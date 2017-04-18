<?php

namespace FizzBuzz;

interface RuleInterface
{
    public function match($value);

    public function getReplacement();

    public function getPriority();
}
