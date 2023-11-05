<?php

namespace App\Http\Requests\Dashboard\Account;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // You can implement authorization logic here if needed.
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'username' => [
                'required',
                'string',
                'max:255',
                Rule::unique('users')->ignore(auth()->user()->id),
            ],
            'phone' => [
                'required',
                'string', 'max:15',
                Rule::unique('users')->ignore(auth()->user()->id),
            ],
            'birth_date' => 'required|date',
            'gender' => 'required|in:male,female',
            'description' => 'nullable|string|max:255',
        ];
    }
}

// 'email' => [
//     'required',
//     'string',
//     'email',
//     'max:255',
//     Rule::unique('users')->ignore(auth()->user()->id),
// ],