<?php

namespace App\Services;

class UserService
{

    public function checkUserNameType($username)
    {
        if (filter_var($username, FILTER_VALIDATE_EMAIL)) {
            return 'email';
        } else {
            return 'phone';
        }
    }

    public function isEmail($username)
    {
        return filter_var($username, FILTER_VALIDATE_EMAIL) !== false;
    }
}
