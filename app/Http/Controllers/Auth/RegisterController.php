<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\UserType;
use App\Models\Subscriber;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
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
        $userType = $validatedData['user_type'] === 'subscriber' ? UserType::SUBSCRIBER : UserType::SEEKER;

        $user = User::create(array_merge($validatedData, ['user_type_id' => $userType]));

        if ($validatedData['user_type'] === 'subscriber') {
            $user->subscriber()->create($validatedData);
        } else {
            $user->seeker()->create($validatedData);
        }



        Auth::login($user);

        return redirect()->route('home');
    }
}
