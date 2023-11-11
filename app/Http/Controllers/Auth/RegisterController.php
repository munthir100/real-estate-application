<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\UserType;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use App\Services\auth\verificationService;
use App\Http\Requests\Auth\RegisterRequest;

class RegisterController extends Controller
{
    public $verificationService;
    function __construct(verificationService $verificationService)
    {
        $this->verificationService = $verificationService;
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

        $user = User::create(array_merge($validatedData, ['user_type_id' => $userType]));

        if ($userType === UserType::BROKER) {
            $dataToCreate = ['is_developer' => $validatedData['user_type'] === 'developer'];
            $user->broker()->create(array_merge($validatedData, $dataToCreate));
        } else {
            $user->seeker()->create($validatedData);
        }
        Auth::login($user);
        $this->verificationService->sendCodeForUser($user);

        return redirect()->route('auth.verification-form');
    }
}
