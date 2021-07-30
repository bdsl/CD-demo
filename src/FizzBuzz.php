<?php

declare(strict_types=1);

namespace App;

/**
 * This is just here to give us something to test so we can exercise the pipeline
 */
final class FizzBuzz
{
    public static function intToString(int $integer): string
    {
        if ($integer % 15 === 0) {
            return "Fizz Buzz";
        }

        if ($integer % 5 === 0) {
            return "Buzz";
        }

        if ($integer %3 === 0) {
            return "Fizz";
        }

        return (string) $integer;
    }
}