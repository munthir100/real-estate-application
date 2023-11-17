<?php

namespace App\Services\auth;

use App\Mail\EmailVerificationCode;
use Illuminate\Support\Facades\Mail;

class verificationService
{
    function sendCodeForUser($user, $username)
    {
        $this->sendCodeForUsername($user, $username);
    }

    private function sendCodeForUsername($user, $username)
    {
        if (filter_var($username, FILTER_VALIDATE_EMAIL)) {
            $verificationCode = $this->createVerificationCode();

            Mail::to($username)->send(new EmailVerificationCode($verificationCode));
            $this->saveCode($user, $verificationCode);
        } else {
            $verificationCode = '1234';
            $this->saveCode($user, $verificationCode);
        }
    }

    private function createVerificationCode()
    {
        return mt_rand(100000, 999999);
    }

    private function saveCode($user, $verificationCode)
    {
        $user->verificationCode()->updateOrCreate(
            ['user_id' => $user->id],
            ['code' => $verificationCode]
        );
    }
}
