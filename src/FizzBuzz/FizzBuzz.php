<?php
namespace FizzBuzz;

/**
 * Class FizzBuzz
 */
class FizzBuzz
{
    const TOTAL_ITEMS = 100;

    public static function getReplacement($value)
    {
        $fizzBuzzRule = new FizzBuzzRule();
        if ($fizzBuzzRule->match($value)) {
            return $fizzBuzzRule->getReplacement();
        }

        $fizzRule = new FizzRule();
        if ($fizzRule->match($value)) {
            return $fizzRule->getReplacement();
        }

        $buzzRule = new BuzzRule();
        if ($buzzRule->match($value)) {
            return $buzzRule->getReplacement();
        }

        return $value;
    }

    public static function getList()
    {
        for ($number=1; $number<=self::TOTAL_ITEMS; $number++) {
            echo self::getReplacement($number);
            echo "\n";
        }
    }
}
