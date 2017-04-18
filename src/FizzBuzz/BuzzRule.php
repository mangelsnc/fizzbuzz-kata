<?php

namespace FizzBuzz;

class BuzzRule implements RuleInterface
{
    const FACTOR = 5;
    const PRIORITY = 3;

    public function match($value)
    {
        return 0 === $value % self::FACTOR;
    }

    public function getReplacement()
    {
        return 'Buzz';
    }

    public function getPriority()
    {
        return self::PRIORITY;
    }
}
