<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\UserType;
use App\Services\UserService;
use App\Services\auth\otpService;
use App\Services\RegisterService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\RegisterRequest;

class RegisterController extends Controller
{

    public function registerForm()
    {
        return view('auth.register');
    }



    public function register(
        RegisterRequest $request,
        otpService $otpService,
        UserService $userService,
        RegisterService $registerService
    ) {
        $validatedData = $request->validated();

        $userType = in_array($validatedData['user_type'], ['broker', 'developer']) ? UserType::BROKER : UserType::SEEKER;
        $validatedData['user_type_id'] = $userType;
        $user = $registerService->createUserWithUserName($validatedData);
        $this->createUserType($userType, $user, $validatedData);
        // $otpService->sendOtpForUser($user, $validatedData['username']);
        Auth::login($user);

        return to_route('dashboard.account.settings.edit')->with('success', __('registration successfull'));
    }









    function createUserType($userType, $user, $validatedData)
    {
        if ($userType === UserType::BROKER) {
            $dataToCreate = ['is_developer' => $validatedData['user_type'] === 'developer'];
            $user->broker()->create(array_merge($validatedData, $dataToCreate));
        } else {
            $user->seeker()->create($validatedData);
        }
    }
}
