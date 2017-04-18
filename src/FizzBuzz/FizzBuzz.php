<?php
namespace FizzBuzz;

/**
 * Class FizzBuzz
 */
class FizzBuzz
{
    const FIZZ_FACTOR = 3;
    const BUZZ_FACTOR = 5;
    const TOTAL_ITEMS = 100;

    public static function isFizz($value)
    {
        return 0 === $value % self::FIZZ_FACTOR;
    }

    public static function isBuzz($value)
    {
        return 0 === $value % self::BUZZ_FACTOR;
    }

    public static function isFizzBuzz($value)
    {
        return self::isFizz($value) && self::isBuzz($value);
    }

    public static function getReplacement($value)
    {
    }
}
