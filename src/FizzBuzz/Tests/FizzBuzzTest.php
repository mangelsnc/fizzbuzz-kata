<?php
namespace FizzBuzz\Tests;

use FizzBuzz\FizzBuzz;
use FizzBuzz\FizzRule;
use FizzBuzz\BuzzRule;
use FizzBuzz\FizzBuzzRule;
use FizzBuzz\RuleInterface;

class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function itShouldAddRulesByPriority()
    {
        $ruleA = $this->getMockBuilder(RuleInterface::class)
            ->setMethods(['getPriority', 'match', 'getReplacement'])
            ->getMock()
        ;
        $ruleA->method('getPriority')->willReturn(1);

        $ruleB = $this->getMockBuilder(RuleInterface::class)
            ->setMethods(['getPriority', 'match', 'getReplacement'])
            ->getMock()
        ;
        $ruleB->method('getPriority')->willReturn(2);

        $ruleC = $this->getMockBuilder(RuleInterface::class)
            ->setMethods(['getPriority', 'match', 'getReplacement'])
            ->getMock()
        ;
        $ruleC->method('getPriority')->willReturn(3);

        $fizzBuzz = new FizzBuzz();
        $fizzBuzz->addRule($ruleA);
        $fizzBuzz->addRule($ruleB);
        $fizzBuzz->addRule($ruleC);

        var_dump($fizzBuzz->getRules());
    }

    /**
     * @test
     * @dataProvider listValuesProvider
     */
    public function itShouldGenerateTheCorrectReplacementForEachNumber($value, $expected)
    {
        $fizzBuzz = new FizzBuzz();
        $fizzBuzz->addRule(new FizzRule());
        $fizzBuzz->addRule(new BuzzRule());
        $fizzBuzz->addRule(new FizzBuzzRule());

        $this->assertEquals($expected, $fizzBuzz->getReplacement($value));
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
