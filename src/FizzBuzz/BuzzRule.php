<?php

namespace FizzBuzz;

class BuzzRule implements RuleInterface
{
    const FACTOR = 5;

    public function match($value)
    {
        return 0 === $value % self::FACTOR;
    }

    public function getReplacement()
    {
        return 'Buzz';
    }
}
