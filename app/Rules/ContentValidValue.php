<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class ContentValidValue implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $invalid = (
            $value !== 'Hello' &&
            $value !== 'Greetings' &&
            $value !== 'Bonjour'
        );
        if ($invalid) {
            $fail('The :attribute must be the value "Hello" or "Greetings" or "Bonjour" (case sensitive).');
        }
    }
}
