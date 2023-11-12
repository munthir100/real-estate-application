<?php

namespace App\Http\Requests;

use App\Models\User;
use App\Rules\SaudiArabianPhoneNumber;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;

class UpdateAgentRequest extends FormRequest
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
            'middle_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'phone' => [
                'required|string|max:15',
                new SaudiArabianPhoneNumber
            ],
            'description' => 'nullable|string',
            'birth_date' => 'required|date',
            'email' => 'required|email',
            'gender' => 'required|in:male,female',
            'password' => 'nullable|string|min:8', // Make password nullable to avoid validation when not provided
        ];
    }



    public function validateUniqueValues($user)
    {
        $existingUser = User::where('username', $user->username)
            ->where('id', '!=', $user->id)
            ->first();
        if ($existingUser) {
            throw ValidationException::withMessages([
                'username' => ['The username has already been taken.'],
            ]);
        }

        $existingUser = User::where('phone', $user->phone)
            ->where('id', '!=', $user->id)
            ->first();
        if ($existingUser) {
            throw ValidationException::withMessages([
                'phone' => ['The phone number has already been taken.'],
            ]);
        }

        $existingUser = User::where('email', $user->email)
            ->where('id', '!=', $user->id)
            ->first();
        if ($existingUser) {
            throw ValidationException::withMessages([
                'email' => ['The email has already been taken.'],
            ]);
        }
    }
}
