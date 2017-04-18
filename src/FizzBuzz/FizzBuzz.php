<?php
namespace FizzBuzz;

/**
 * Class FizzBuzz
 */
class FizzBuzz
{
    const FIZZ_FACTOR = 3;

    public function isFizz($value)
    {
        return 0 === $value % self::FIZZ_FACTOR;
    }

    public function isBuzz($value)
    {
        
    }
}
