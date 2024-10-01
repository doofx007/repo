<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\EmpAcc;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules;
use Inertia\Inertia;
use Inertia\Response;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): Response
    {
        return Inertia::render('Auth/Register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'empuser' => 'required|string|max:255|unique:emp_acc',
            'empmail' => 'required|string|email|max:255|unique:emp_acc',
            'emppass' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = EmpAcc::create([
            'empid' => uniqid(),
            'empuser' => $request->empuser,
            'empmail' => $request->empmail,
            'emppass' => bcrypt($request->emppass),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard'));
    }
}
