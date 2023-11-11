<?php

namespace App\Http\Controllers\auth;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\auth\verificationService;

class VerificationController extends Controller
{
    public $verificationService;
    function __construct(verificationService $verificationService)
    {
        $this->verificationService = $verificationService;
    }

    public function showVerificationForm()
    {
        return view('auth.verification-form');
    }

    public function verifyCode(Request $request)
    {
        $request->validate([
            'code' => 'required',
        ]);

        $user = $request->user();
        $verificationCode = $user->verificationCode()->first();

        if ($verificationCode && $verificationCode->code === $request->code) {
            $now = Carbon::now();
            $expiresAt = Carbon::parse($verificationCode->updated_at)->addMinutes(30);
            
            if ($now <= $expiresAt) {
                $user->markEmailAsVerified();

                return redirect()->route('home')->with('success', 'Email verified successfully');
            }

            return redirect()->back()->withErrors(['code' => 'Verification code has expired']);
        }

        return redirect()->back()->withErrors(['code' => 'Invalid verification code']);
    }

    function resendCode()
    {
        $this->verificationService->sendCodeForUser(request()->user());

        return back()->with('success', 'the code send , check your email');
    }
}
