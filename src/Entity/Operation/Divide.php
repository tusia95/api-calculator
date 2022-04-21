<?php

namespace App\Entity\Operation;

class Divide
{
    public function executeCalculation($firstNumber, $secondNumber): float|int
    {
        return $firstNumber / $secondNumber;
    }
}