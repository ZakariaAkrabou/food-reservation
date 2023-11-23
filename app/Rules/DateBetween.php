<?php

namespace App\Rules;

use Closure;
use Illuminate\Support\Carbon;
use Illuminate\Contracts\Validation\ValidationRule;


class DateBetween implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $pickdate = Carbon::parse($value);

        $lastdate = Carbon::now()->addWeek();
    
        if ($value < now() || $value > $lastdate) {
            $fail('Please Choose Date Between a week from now.');
        }
    }

}