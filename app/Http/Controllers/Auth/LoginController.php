<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Services\auth\otpService;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;

class LoginController extends Controller
{
    public $otpService;
    function __construct(otpService $otpService)
    {
        $this->otpService = $otpService;
    }

    function loginForm()
    {
        return view('auth.login');
    }



    function login(LoginRequest $request)
    {
        $data = $request->validated();

        $user = User::where('email', $data['email'])
            ->orWhere('phone', $data['email'])
            ->first();

        if (!$user) {
            return back()
                ->withErrors(['email' => __('These credentials do not match our records')])
                ->withInput($request->only('email'));
        }

        if (!password_verify($data['password'], $user->password)) {
            return back()
                ->withErrors(['email' => __('These credentials do not match our records')])
                ->withInput($request->only('email'));
        }
        $this->otpService->sendOtpForUser($user, $data['email']);

        return redirect()->route('auth.verification-form');
    }

    public function logout()
    {
        auth()->logout();

        return redirect(route('login'));
    }
}
