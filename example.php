<?php
$numbers = [2, 3, 4, 5, 6, 8, 10];

// $result = array_map(function(int $number){
//     return $number / 2;
// }, $numbers);

// print_r($result);

$divideFunction = function(int $number){
    return $number / 2;
};

$result = array_map($divideFunction, $numbers);

print_r($result);