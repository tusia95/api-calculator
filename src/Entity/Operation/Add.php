<?php

namespace App\Entity\Operation;

use AppBundle\Entity\Operation\OperationInterface;

class Add implements OperationInterface

{
    public function executeCalculation($firstNumber, $secondNumber)
    {
        return $firstNumber + $secondNumber;
    }
}