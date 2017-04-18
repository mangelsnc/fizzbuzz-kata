<?php
namespace FizzBuzz\Tests;

use FizzBuzz\FizzBuzz;

class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @dataProvider fizzNumbersProvider
     */
    public function itShouldReturnFizzIfDivisibleByThree($value, $expected)
    {
        $fizzBuzz = new FizzBuzz();

        $this->assertEquals($expected, $fizzBuzz->isFizz($value));
    }

    public function fizzNumbersProvider()
    {
        return [
            [3, true],
            [9, true],
            [12, true],
            [15, true],
            [18, true],
        ];
    }

    /**
     * @test
     * @dataProvider buzzNumbersProvider
     */
    public function itShouldReturnBuzzIfDivisibleByThree($value, $expected)
    {
        $fizzBuzz = new FizzBuzz();

        $this->assertEquals($expected, $fizzBuzz->isBuzz($value));
    }

    public function buzzNumbersProvider()
    {
        return [
            [5, true],
            [10, true],
            [15, true],
            [20, true],
            [25, true],
        ];
    }
}
