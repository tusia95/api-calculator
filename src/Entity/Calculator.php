<?php

namespace App\Entity;

    use App\Entity\Operation\Add;
    use App\Entity\Operation\Divide;
    use App\Entity\Operation\Multiply;
    use App\Entity\Operation\Subtract;
    use Symfony\Component\Validator\Constraints as Assert;

class Calculator
{
    /**
     * @Assert\Type("integer")
     * @Assert\NotEqualTo("0")
     */
    public $firstParam;

    /**
     * @Assert\Type("integer")
     * @Assert\NotEqualTo("0")
     */
    public $secondParam;

    /**
     * @Assert\Choice({"add", "subtract", "multiply", "divide"})
     */
    public $action;

    /**
     * @return integer
     */
    public function getFirstParam(): int
    {
        return $this->firstParam;
    }

    /**
     * @param integer $firstParam
     */
    public function setFirstParam(int $firstParam)
    {
        $this->firstParam = $firstParam;
    }

    /**
     * @return integer
     */
    public function getSecondParam(): int
    {
        return $this->secondParam;
    }

    /**
     * @param integer $secondParam
     */
    public function setSecondParam(int $secondParam)
    {
        $this->secondParam = $secondParam;
    }

    /**
     * @return integer
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param integer $action
     */
    public function setAction(int $action)
    {
        $this->action= $action;
    }

    public function runCalculation()
    {
        switch ($this->getAction()) {
            case "add":
                $operation = new Add();
                break;
            case "subtract":
                $operation = new Subtract();
                break;
            case "multiply":
                $operation = new Multiply();
                break;
            case "divide":
                $operation = new Divide();
                break;
        }

        return $operation->executeCalculation($this->getFirstParam(), $this->getSecondParam());
    }
}