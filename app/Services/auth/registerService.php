<?php

namespace App\Services\auth;

use App\Mail\EmailOtp;
use Illuminate\Support\Facades\Mail;

class registerService
{
    function sendOtpForUser($user, $username)
    {
        $usernameType = $this->checkUserNameType($username);
        $this->sendOTPForUsernameType($user, $username, $usernameType);
    }


    public function checkUserNameType($username)
    {
        if (filter_var($username, FILTER_VALIDATE_EMAIL)) {
            return 'email';
        } else {
            return 'phone';
        }
    }

    public function sendOtpForUsernameType($user, $username, $usernameType)
    {
        $otp = $this->generateOtp();
        if ($usernameType === 'email') {
            $this->sendOtpForEmail($user, $username, $otp);
        } else {
            $this->sendOtpForPhoneNumber($user, $username, $otp);
        }
    }

    public function sendOtpForEmail($user, $username, $otp)
    {
        Mail::to($username)->send(new EmailOtp($otp));
        $this->updateUserEmail($user, $username);
        $this->saveUserOtp($user, $otp);
    }

    public function sendOtpForPhoneNumber($user, $username, $otp)
    {
        $this->saveUserPhone($user, $username);
        $this->saveUserOtp($user, '1234');
    }

    public function updateUserEmail($user, $username)
    {
        $user->email = $username;
        $user->save();
    }

    public function saveUserPhone($user, $username)
    {
        $user->phone = $username;
        $user->save();
    }
   

    private function generateOtp()
    {
        return mt_rand(100000, 999999);
    }

    private function saveUserOtp($user, $otp)
    {
        $user->otp()->updateOrCreate(
            ['user_id' => $user->id],
            ['otp' => $otp]
        );
    }
}
