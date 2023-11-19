<?php
namespace TestTask;

class RandomNumberGenerator
{
    public function generateRandomNumbersArray($arrayLength, $nunmberLength)
    {
        $numbers = array();
        for ($i = 0; $i < $arrayLength; $i++) {
            $number = '';
            for ($j = 0; $j < $nunmberLength; $j++) {
                $digit = ($j === 0) ? rand(1, 9) : rand(0, 9);
                $number = $number . $digit;
            }
            array_push($numbers, $number);
        }
        return $numbers;
    }
}