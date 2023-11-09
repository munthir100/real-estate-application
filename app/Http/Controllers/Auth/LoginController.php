<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\EmailVerificationCode;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\Auth\LoginRequest;

class LoginController extends Controller
{

    function loginForm()
    {
        return view('auth.login');
    }



    function login(LoginRequest $request)
    {
        $data = $request->validated();

        $user = User::where('email', $data['email'])
            ->orWhere('email', $data['email'])
            ->first();

        if (!$user) {
            return redirect()
                ->back()
                ->withErrors(['email' => 'These credentials do not match our records.'])
                ->withInput($request->only('email'));
        }

        if (!password_verify($data['password'], $user->password)) {
            return redirect()
                ->back()
                ->withErrors(['email' => 'These credentials do not match our records.'])
                ->withInput($request->only('email'));
        }

        Auth::login($user);
        // // Generate and store a random verification code
        // $verificationCode = mt_rand(100000, 999999);
        // $user->update(['verification_code' => $verificationCode]);

        // // Send email with verification code
        // Mail::to($user->email)->send(new EmailVerificationCode($verificationCode));
        // return redirect()->route('auth.verification-code', ['email' => $user->email]);
        
        return to_route('home');
    }

    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('login'))->with('success', 'You have been logged out.');
    }
}
