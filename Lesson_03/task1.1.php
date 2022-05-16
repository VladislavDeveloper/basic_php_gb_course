<?php

$firstArr = [2, 4, 5, 8, 16, 12, 26, 19, 24, 22];
$secondArr = [4, 2, 2, 10, 8, 3, 5, 12, 7, 11, 21];

//Базовая самая простая реализация с использованием цикла for

for($i = 0; $i < count($firstArr); $i++){
    $result = $firstArr[$i] * $secondArr[$i] . "\n";
    echo $result;
}

//Тоже самое только с foreach

foreach($firstArr as $index => $numbers){
    echo $result = $firstArr[$index] * $secondArr[$index] . "\n";
}