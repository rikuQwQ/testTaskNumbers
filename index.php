<?php
require_once 'vendor/autoload.php';

use TestTask\BcAddSum;
use TestTask\ColumnSum;
use TestTask\GmpAddSum;
use TestTask\NumberOperations;
use TestTask\RandomNumberGenerator;

$randomNumberGenerator = new RandomNumberGenerator();
$randomNumbers = $randomNumberGenerator->generateRandomNumbersArray(50, 50);
echo 'Сгенерированные числа </br>';
print_r($randomNumbers);
echo '</br></br>';

//сложение чисел массива с ичпользованием bcadd
$bcAddSummation = new BcAddSum();
$numberOperations = new NumberOperations($bcAddSummation);
$result = $numberOperations->sumArrayValues($randomNumbers);
echo "Сумма: " . $result . '</br>';

//сложение чисел массива с ичпользованием gmp_add
$gmpAddSummation = new GmpAddSum();
$numberOperations = new NumberOperations($gmpAddSummation);
$result = $numberOperations->sumArrayValues($randomNumbers);
echo "Сумма: " . $result . '</br>';

//сложение чисел массива в столбик
$columnSummation = new ColumnSum();
$numberOperations = new NumberOperations($columnSummation);
$result = $numberOperations->sumArrayValues($randomNumbers);
echo "Сумма: " . $result . '</br>';