<?php

namespace FizzBuzz;

class FizzRule implements RuleInterface
{
    const FACTOR = 3;
    const PRIORITY = 2;

    public function match($value)
    {
        return 0 === $value % self::FACTOR;
    }

    public function getReplacement()
    {
        return 'Fizz';
    }

    public function getPriority()
    {
        return self::PRIORITY;
    }
}
