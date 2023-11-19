<?php
namespace TestTask;

class NumberOperations
{
    private $arraySum;

    public function __construct(ArraySumInterface $arraySum)
    {
        $this->arraySum = $arraySum;
    }

    public function sumArrayValues($array)
    {
        return $this->arraySum->sumArrayValues($array);
    }
}