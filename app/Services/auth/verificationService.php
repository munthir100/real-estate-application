<?php

namespace App\Services\auth;

use App\Mail\EmailVerificationCode;
use Illuminate\Support\Facades\Mail;

class verificationService
{
    function sendCodeForUser($user)
    {
        if (!$user->recently_verified) {
            $verificationCode = mt_rand(100000, 999999);

            $user->verificationCode()->updateOrCreate(
                ['user_id' => $user->id],
                ['code' => $verificationCode]
            );

            Mail::to($user->email)->send(new EmailVerificationCode($verificationCode));
        }
    }
}
