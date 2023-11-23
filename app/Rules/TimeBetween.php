<?php

namespace App\Rules;

use Closure;
use Illuminate\Support\Carbon;
use Illuminate\Contracts\Validation\ValidationRule;

class TimeBetween implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
{
    $pickdate = Carbon::parse($value);
    $picktime = Carbon::createFromTime($pickdate->hour, $pickdate->minute, $pickdate->second);

    // if res open

    $opentime = Carbon::createFromTimeString('16:00:00');
    $closetime = Carbon::createFromTimeString('22:00:00');

    if (!$picktime->between($opentime, $closetime)) {
        $fail('Please Choose time between 16:00-22:00');
    }

  
}


}