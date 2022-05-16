<?php
//Второй вариант первого задания, который мне пришёл в голову - результирующий массив

$firstArr = [2, 4, 5, 8, 16, 12, 26, 19, 24, 22];
$secondArr = [4, 2, 2, 10, 8, 3, 5, 12, 7, 11, 21];
$result = [];

foreach($firstArr as $index => $numbers){
    $result[] = $firstArr[$index] * $secondArr[$index] . "\n";
}

print_r($result);

//А здесь я решил еще немного поиграться и добавить результирующему массиву в качестве ключа строчку, с информацией что на что было умножено

foreach($firstArr as $index => $numbers){
    $result["$firstArr[$index] * $secondArr[$index] = "] = $firstArr[$index] * $secondArr[$index] . "\n";
}

print_r($result);