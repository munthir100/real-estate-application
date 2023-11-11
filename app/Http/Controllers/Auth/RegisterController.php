<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\UserType;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\Auth\RegisterRequest;

class RegisterController extends Controller
{
    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function registerForm()
    {
        return view('auth.register');
    }


    public function register(RegisterRequest $request)
    {
        $validatedData = $request->validated();
        $userType = $validatedData['user_type'] === 'broker' ? UserType::BROKER : UserType::SEEKER;

        $user = User::create(array_merge($validatedData, ['user_type_id' => $userType]));

        if ($validatedData['user_type'] === 'broker') {
            $user->broker()->create($validatedData);
        } else {
            $user->seeker()->create($validatedData);
        }



        Auth::login($user);

        return redirect()->route('home');
    }
}
