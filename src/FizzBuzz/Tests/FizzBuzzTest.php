<?php
namespace FizzBuzz\Tests;

use FizzBuzz\FizzBuzz;

class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @dataProvider listValuesProvider
     */
    public function itShouldGenerateTheCorrectReplacementForEachNumber($value, $expected)
    {
        $this->assertEquals($expected, FizzBuzz::getReplacement($value));
    }

    public function listValuesProvider()
    {
        return [
            [1, 1],
            [2, 2],
            [3, 'Fizz'],
            [4, 4],
            [5, 'Buzz'],
            [15, 'FizzBuzz'],
        ];
    }
}
