<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|max:15|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'birth_date' => 'required|date', 
            'gender' => 'required|in:male,female',
            'user_type' => 'required|in:regular,broker',
            'commertial_number' => 'required_if:user_type,broker|nullable|integer',
            'company_name' => 'required_if:user_type,broker|nullable|string|max:255',
            'tax_number' => 'required_if:user_type,broker|nullable|integer',
            'office_name' => 'required_if:user_type,broker|nullable|string|max:255',
        ];
        
    }
}

/*
RegisterRequest:

first_name
last_name
username
email
phone
password
birth_date
gender
user_type (regular ,broker)

broker model (required if user_type = broker):
            commercial_number
            company_name
            tax_number
            office_name

*/