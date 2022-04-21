<?php

namespace App\Entity\Operation;

class Multiply
{
    public function executeCalculation($firstNumber, $secondNumber): float|int
    {
        return $firstNumber * $secondNumber;
    }
}