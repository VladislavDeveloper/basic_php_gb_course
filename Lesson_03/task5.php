<?php

$array = [];

for($i = 1; $i <= 100; $i++){
    $randNum = rand(0, 200);
    if(!in_array($randNum, $array)){
       $array[$i] = $randNum;
    } 
};

print_r($array);