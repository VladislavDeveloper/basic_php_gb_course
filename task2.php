<?php

$numbers = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

function arrayHandler(array $array) : array
{
    return [
        'max' => max($array),
        'min' => min($array),
        'avg' => array_sum($array) / count($array)
    ];
}

print_r(arrayHandler($numbers));