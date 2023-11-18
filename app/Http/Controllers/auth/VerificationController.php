<?php

namespace App\Http\Controllers\auth;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\auth\otpService;

class VerificationController extends Controller
{
    public $otpService;
    function __construct(otpService $otpService)
    {
        $this->otpService = $otpService;
    }

    public function showVerificationForm()
    {
        return view('auth.verification-form');
    }

    public function verifyCode(Request $request)
    {
        $request->validate([
            'otp' => 'required',
        ]);

        $user = $request->user();
        $otp = $user->otp()->first();

        if ($otp && $otp->code === $request->code) {
            $now = Carbon::now();
            $expiresAt = Carbon::parse($otp->updated_at)->addMinutes(30);

            if ($now <= $expiresAt) {
                $user->markUserAsVerified();

                return redirect()->route('home')->with('success', 'verification successfull');
            }

            return redirect()->back()->withErrors(['otp' => 'Verification code has expired']);
        }

        return redirect()->back()->withErrors(['otp' => 'Invalid verification code']);
    }

}
