<?php
namespace TestTask;

class GmpAddSum implements ArraySumInterface
{
    public function sumArrayValues(array $array)
    {
        $sum = 0;
        foreach ($array as $value) {
            $sum = gmp_add($sum, $value);
        }
        return $sum;
    }
}