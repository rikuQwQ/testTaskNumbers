<?php
namespace TestTask;

class BcAddSum implements ArraySumInterface
{
    public function sumArrayValues(array $array)
    {
        $sum = 0;
        foreach ($array as $value) {
            $sum = bcadd($sum, $value);
        }
        return $sum;
    }
}