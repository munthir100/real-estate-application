<?php

namespace App\Rules;

use Closure;
use Illuminate\Validation\Rule;
use App\Rules\SaudiArabianPhoneNumber;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\Validation\ValidationRule;

class UsernameValidationRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (filter_var($value, FILTER_VALIDATE_EMAIL)) {
            $validator = Validator::make([$attribute => $value], [
                $attribute => 'email|email:rfc,dns|unique:users,email',
            ]);
            if (!$validator->passes()) {
                $fail("Ensure the email is valid or not used.");
            }
        } else {
            $validator = Validator::make([$attribute => $value], [
                $attribute => new SaudiArabianPhoneNumber,
            ]);
            if (!$validator->passes()) {
                $fail(__("The phone number is not a valid Saudi Arabian phone number"));
            }
        }
    }
}
