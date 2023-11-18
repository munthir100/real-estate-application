<?php

namespace App\Services;

use App\Models\User;

class RegisterService
{
    private $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function createUserWithUserName($validatedData)
    {
        $userAttributes = [
            'password' => $validatedData['password'],
            'user_type_id' => $validatedData['user_type_id'],
        ];

        if ($this->userService->isEmail($validatedData['username'])) {
            $userAttributes['email'] = $validatedData['username'];
        } else {
            $userAttributes['phone'] = $validatedData['username'];
        }

        return User::create($userAttributes);
    }
}
