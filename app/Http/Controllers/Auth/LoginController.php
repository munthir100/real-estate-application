<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\LoginRequest;
use App\Services\auth\verificationService;

class LoginController extends Controller
{
    public $verificationService;
    function __construct(verificationService $verificationService)
    {
        $this->verificationService = $verificationService;
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
            return redirect()
                ->back()
                ->withErrors(['email' => __('These credentials do not match our records')])
                ->withInput($request->only('email'));
        }

        if (!password_verify($data['password'], $user->password)) {
            return redirect()
                ->back()
                ->withErrors(['email' => __('These credentials do not match our records')])
                ->withInput($request->only('email'));
        }

        Auth::login($user);

        $this->verificationService->sendCodeForUser($user, $data['email']);

        return redirect()->route('auth.verification-form');
    }

    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('login'))->with('success', 'You have been logged out.');
    }
}
