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
        $this->assertEquals($expected, FizzBuzz::isFizz($value));
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
    public function itShouldReturnBuzzIfDivisibleByFive($value, $expected)
    {
        $this->assertEquals($expected, FizzBuzz::isBuzz($value));
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

    /**
     * @test
     * @dataProvider fizzBuzzNumbersProvider
     */
    public function itShouldReturnFizzBuzzIfDivisibleByBothThreeAndFive($value, $expected)
    {
        $this->assertEquals($expected, FizzBuzz::isFizzBuzz($value));
    }

    public function fizzBuzzNumbersProvider()
    {
        return [
            [15, true],
            [30, true],
            [45, true],
            [60, true],
            [75, true],
        ];
    }
}
