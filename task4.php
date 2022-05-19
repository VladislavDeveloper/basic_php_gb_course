<?php
//Нахождение факториала
$number = readline("Введите число, факториал которого хотите найти: " . PHP_EOL);

function factorial(int $n) : int
{
    return($n < 2 ? 1 : $n * factorial($n - 1));
}

$result = factorial($number);

echo "Факториал $number! = $result" . PHP_EOL;