<?php

namespace App\Services\auth;

use App\Mail\EmailOtp;
use App\Services\UserService;
use Illuminate\Support\Facades\Mail;

class otpService
{
    public $userService;
    function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
    function sendOtpForUser($user, $username)
    {
        $usernameType = $this->userService->checkUserNameType($username);
        $otp = $this->generateOtp();
        $this->sendOTPForUsernameType($user, $username, $usernameType, $otp);
    }




    public function sendOtpForUsernameType($user, $username, $usernameType, $otp)
    {
        if ($usernameType === 'email') {
            $this->sendOtpForEmail($user, $username, $otp);
        } else {
            $this->sendOtpForPhoneNumber($user, $username, $otp);
        }
    }

    public function sendOtpForEmail($user, $username, $otp)
    {
        Mail::to($username)->send(new EmailOtp($otp));
        $this->saveUserOtpOnSession($user, $otp);
    }

    public function sendOtpForPhoneNumber($user, $username, $otp)
    {
        $this->saveUserOtpOnSession($user, 1234);
    }

    private function generateOtp()
    {
        return mt_rand(100000, 999999);
    }

    private function saveUserOtpOnSession($user, $otp)
    {
        session(['otp' => $otp, 'user_id' => $user->id]);
    }

    public function verifyOtp($requestedOtp, $otp)
    {
        return $requestedOtp == $otp;
    }
}
