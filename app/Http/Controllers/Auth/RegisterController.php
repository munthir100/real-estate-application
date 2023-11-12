<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\UserType;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Services\auth\registerService;
use App\Providers\RouteServiceProvider;
use App\Services\auth\verificationService;
use App\Http\Requests\Auth\RegisterRequest;

class RegisterController extends Controller
{
    public $registerService;
    function __construct(registerService $registerService)
    {
        $this->registerService = $registerService;
    }

    public function registerForm()
    {
        return view('auth.register');
    }
    // fal no image . 

    /*
 number of num of

 صورة من السجل التجاري رقم من اليسجل التجلري












*/









    public function register(RegisterRequest $request)
    {
        $validatedData = $request->validated();

        $userType = in_array($validatedData['user_type'], ['broker', 'developer']) ? UserType::BROKER : UserType::SEEKER;

        $user = new User();
        $user->password = $validatedData['password'];
        $user->user_type_id = $userType;
        $this->registerService->sendCodeForUser($user, $validatedData['username']);
        if ($userType === UserType::BROKER) {
            $dataToCreate = ['is_developer' => $validatedData['user_type'] === 'developer'];
            $user->broker()->create(array_merge($validatedData, $dataToCreate));
        } else {
            $user->seeker()->create($validatedData);
        }
        Auth::login($user);

        return redirect()->route('auth.verification-form');
    }
}
