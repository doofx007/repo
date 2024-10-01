<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\EmpAcc;
use Inertia\Inertia;
use App\Helpers\EmailHelper;
use Illuminate\Support\Facades\Log;

class OTPController extends Controller
{
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

                    // Check user_type and redirect accordingly
                    if ($user->user_type == 1) {
                        return redirect()->route('admin.dashboard');
                    } else {
                        return redirect()->route('dashboard');
                    }
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
}