<?php

namespace FizzBuzz;

class FizzBuzzRule implements RuleInterface
{
    const FIZZ_FACTOR = 3;
    const BUZZ_FACTOR = 5;
    const PRIORITY = 1;

    public function match($value)
    {
        if (
            0 === $value % self::FIZZ_FACTOR
            &&
            0 === $value % self::BUZZ_FACTOR
        ) {
            return true;
        }

        return false;
    }

    public function getReplacement()
    {
        return 'FizzBuzz';
    }

    public function getPriority()
    {
        return self::PRIORITY;
    }
}
