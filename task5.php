<?php

$add = function($x, $y){
    return $x + $y;
};

$sub = function($x, $y){
    return $x - $y;
};

$mult = function($x, $y){
    return $x * $y;
};

$div = function($x, $y){
    return $x == 0 ||  $y == 0 ? null : $x / $y;
};

function mathOperation($x, $y, $operation)
{
    return $operation($x, $y);
}

print(mathOperation(50, 10, $div) . PHP_EOL);
