<?php

namespace App\Http\Controllers\auth;


use App\Models\User;
use App\Services\auth\otpService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\auth\VerifyOtpRequest;

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

    public function verifyCode(VerifyOtpRequest $request)
    {
        $data = $request->validated();

        $user = User::findOrFail(session()->get('user_id'));
        $otp = session()->get('otp');
        $verifiedOtp = $this->otpService->verifyOtp($data['otp'], $otp);
        if (!$verifiedOtp) {
            return back()->withErrors(['otp' => 'Invalid verification code']);
        }
        $user->markUserAsVerified();
        session()->forget(['otp', 'user']);
        Auth::login($user);

        return to_route('dashboard.account.settings.edit')->with('success', __('verification successfull'));
    }
}
