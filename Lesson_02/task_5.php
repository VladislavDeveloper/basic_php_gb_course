<?php
$appleAmount = readline("Введите количество яблок: ");

switch($appleAmount){
    case $appleAmount > 10 && $appleAmount < 15 :
        echo "$appleAmount яблок";
        break;
    case $appleAmount%10 == 1 : 
        echo "$appleAmount яблоко";
        break;
    case $appleAmount%10 > 1 && $appleAmount%10 < 5 : 
        echo "$appleAmount яблока";
        break;
    default:
        echo "$appleAmount яблок";
        break;
}