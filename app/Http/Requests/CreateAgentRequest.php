<?php

namespace App\Http\Requests;

use App\Rules\SaudiArabianPhoneNumber;
use Illuminate\Foundation\Http\FormRequest;

class CreateAgentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            // Validation rules for the User model
            'first_name' => 'required|string|max:255',
            'middle_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'phone' => [
                'required',
                'string',
                'unique:users',
                new SaudiArabianPhoneNumber
            ],
            'description' => 'nullable|string',
            'birth_date' => 'required|date',
            'email' => 'required|email|unique:users',
            'gender' => 'required|in:male,female,other',
            'password' => 'required|string|min:8',
        ];
    }
}
/*
CreateAgentRequest :

            user model :
                        first_name
                        last_name
                        username
                        phone
                        description
                        birth_date
                        email
                        gender
                        password
                        user_type_id default UserType::AGENT
            
            Agent model :
                        broker_id // from current authentcated user 
                        user_id : created user 
                        ceo




*/