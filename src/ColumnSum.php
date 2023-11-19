<?php
namespace TestTask;

class ColumnSum implements ArraySumInterface
{
    public function sumArrayValues(array $array)
    {
        $sum = '';
        $carry = 0;

        for ($i = count($array) - 1; $i >= 0; $i--) {
            $columnSum = $carry;
            foreach ($array as $number) {
                $columnSum += $number[$i];
            }
            $sumDigit = $columnSum % 10;
            $carry = ($columnSum - $sumDigit) / 10;
            $sum = $sumDigit . $sum;
        }
        if ($carry) {
            $sum = $carry . $sum;
        }
        return $sum;
    }
}