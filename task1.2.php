<?php
//По моему этот вариант гораздо красивее и лаконичнее )

$numbers = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

$result = array_map(function(int $number){
    $number % 2 == 0 ? print("Четное" . PHP_EOL) : print("Нечетное" . PHP_EOL);
}, $numbers);