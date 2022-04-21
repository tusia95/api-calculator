<?php

namespace App\Entity\Operation;

class Subtract
{
    public function executeCalculation($firstNumber, $secondNumber)
    {
        return $firstNumber - $secondNumber;
    }
}