<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\EmpAcc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use App\Helpers\EmailHelper;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;

class AuthenticatedSessionController extends Controller
{
    public function create()
    {
        return Inertia::render('Login');
    }

    public function store(Request $request)
{
    $credentials = $request->validate([
        'empuser' => ['required', 'string'],
        'emppass' => ['required', 'string'],
    ]);

    if (Auth::attempt(['empuser' => $credentials['empuser'], 'password' => $credentials['emppass']])) {
        $request->session()->regenerate();
        $user = Auth::user();
        $request->session()->put('user_empmail', $user->empmail);
        $request->session()->put('user_id', (string) $user->empid);
        $request->session()->put('user_type', $user->user_type); // Store user_type in session

        Log::info('User logged in, email, ID, and user_type stored in session: ' . $user->empmail . ', ' . $user->empid . ', ' . $user->user_type);

        try {
            $otp = EmailHelper::generateOTP();
            Session::put('otp', $otp);
            EmailHelper::sendOTPEmail($user->empmail, $otp);

            // Redirect to the OTP form with context and otpSent flag for login
            return redirect()->route('otp.form', [
                'context' => 'login',
                'otpSent' => true
            ]);
        } catch (\Exception $e) {
            Log::error("Failed to send OTP: " . $e->getMessage());
            return back()->withErrors(['otp' => 'Failed to send OTP. Please try again later.']);
        }
    }

    return back()->withErrors([
        'empuser' => 'The provided credentials do not match our records.',
    ]);
}


public function sendOtp(Request $request)
{
    $request->validate([
        'empmail' => ['required', 'email'],
    ]);

    $user = EmpAcc::where('empmail', $request->empmail)->first();

    if ($user) {
        try {
            $otp = EmailHelper::generateOTP();
            Session::put('otp', $otp);
            Session::put('otp_generated_at', now()); // Store the OTP generation time
            Session::put('user_empmail', $user->empmail);
            Session::put('user_id', $user->empid);
            EmailHelper::sendOTPEmail($user->empmail, $otp);

            Log::info('OTP sent successfully.');

            return redirect()->route('otp.form', [
                'context' => 'forgot-password',
                'otpSent' => true
            ])->with('status', 'OTP sent to your email.');
        } catch (\Exception $e) {
            Log::error("Failed to send OTP: " . $e->getMessage());
            return back()->withErrors(['otp' => 'Failed to send OTP. Please try again later.']);
        }
    } else {
        return back()->withErrors(['empmail' => 'No user found with this email.']);
    }
}



public function verifyOtp(Request $request)
{
    $request->validate([
        'otp' => ['required', 'string'],
        'context' => ['required', 'string'],
    ]);

    $sessionOtp = Session::get('otp');
    $otpGeneratedAt = Session::get('otp_generated_at'); // Store the OTP generation time

    // Check if OTP has expired (assuming 5 minutes validity)
    if ($otpGeneratedAt && now()->diffInSeconds($otpGeneratedAt) > 300) { // 300 seconds = 5 minutes
        // OTP expired, generate and send a new one
        $this->resendOtp();

        return response()->json(['errors' => ['otp' => 'OTP expired. A new OTP has been sent to your email.']], 400);
    }

    if ($request->otp == $sessionOtp) {
        $userId = Session::get('user_id');
        $user = EmpAcc::find($userId);

        if ($user) {
            if ($request->input('context') === 'forgot-password') {
                // OTP verified, reset password to "12345"
                $user->password = '12345';
                $user->save();

                // Clear OTP session
                Session::forget('otp');
                Session::forget('otp_generated_at');

                // Redirect to the success page
                return redirect()->route('password.success');
            } elseif ($request->input('context') === 'login') {
                // Handle regular login OTP
                Session::put('otp_verified', true);
                Session::forget('otp');
                Session::forget('otp_generated_at');

                return redirect()->route('dashboard');
            } else {
                return back()->withErrors(['context' => 'Invalid context provided.']);
            }
        } else {
            return back()->withErrors(['user' => 'User not found.']);
        }
    }

    // If OTP is invalid
    return Inertia::render('Auth/OTP', [
        'error' => 'Invalid OTP.'
    ]);
}

public function resendOtp()
{
    $userId = Session::get('user_id');
    $user = EmpAcc::find($userId);

    if ($user && $user->empmail) {
        $otp = EmailHelper::generateOTP();
        Session::put('otp', $otp);
        Session::put('otp_generated_at', now()); // Store the OTP generation time

        try {
            EmailHelper::sendOTPEmail($user->empmail, $otp);
            Log::info('New OTP sent successfully to ' . $user->empmail);
        } catch (\Exception $e) {
            Log::error("Failed to send OTP to {$user->empmail}. Error: {$e->getMessage()}");
        }
    } else {
        Log::error("User with ID {$userId} not found or missing email.");
    }
}



    public function destroy(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        session()->flush();

        return redirect('/');
    }
}
