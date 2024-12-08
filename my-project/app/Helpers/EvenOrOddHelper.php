<?php

namespace App\Helpers;

class EvenOrOddHelper
{
    public static function evenOrOdd(int $number)
    {
        if ($number % 2 == 0) {
            return "even";
        } else {
            return "odd";
        }
    }
}
