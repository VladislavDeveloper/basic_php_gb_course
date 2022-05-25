<?php
include "Unit.php";

$character1 = new Unit('Геральт', 100, 10);
$character2 = new Unit('Эредин', 120, 15);

print_r($character1);
print_r($character2);

$character1->attack($character2);
$character1->attack($character2);
$character1->attack($character2);
$character2->attack($character1);
$character2->attack($character1);
$character1->attack($character2);

print_r($character1);
print_r($character2);