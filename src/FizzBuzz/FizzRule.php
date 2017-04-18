<?php

namespace FizzBuzz;

class FizzRule implements RuleInterface
{
    const FACTOR = 3;

    public function match($value)
    {
        return 0 === $value % self::FACTOR;
    }

    public function getReplacement()
    {
        return 'Fizz';
    }
}
