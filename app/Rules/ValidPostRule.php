<?php

namespace App\Rules;

use Closure;
use App\Models\Post;
use Illuminate\Contracts\Validation\ValidationRule;

class ValidPostRule implements ValidationRule
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
        // Don't allow too many posts to be stored.
        if (Post::count() >= 10) {
            $fail('There are too many posts. Delete some posts until there are fewer than 10.');
        }
    }
}
