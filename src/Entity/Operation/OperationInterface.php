<?php
namespace AppBundle\Entity\Operation;

interface OperationInterface
{
    public function executeCalculation($firstNumber, $secondNumber);
}
