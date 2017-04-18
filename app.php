<?php

include __DIR__ . '/vendor/autoload.php';

use FizzBuzz\FizzBuzz;
use FizzBuzz\FizzRule;
use FizzBuzz\BuzzRule;
use FizzBuzz\FizzBuzzRule;

$fizzbuzz = new FizzBuzz();
$fizzbuzz->addRule(new FizzRule());
$fizzbuzz->addRule(new BuzzRule());
$fizzbuzz->addRule(new FizzBuzzRule());

$fizzbuzz->getList();
