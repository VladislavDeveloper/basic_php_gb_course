<?php
//Самый простой вариант реализации, который пришел в голову ))

$numbers = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

$checkNumbers = function(int $number){
    if($number % 2 == 0){
        echo "Четное" . PHP_EOL;
    }else{
        echo "Нечетное" . PHP_EOL;
    }
};

$result = array_map($checkNumbers, $numbers);