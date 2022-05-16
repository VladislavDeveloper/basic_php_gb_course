<?php
//Покапался немного в функция для массивов, и реализовал таким образом
$array = ['str', 2, 3, 4, 5];
print_r(array_merge(...array_map(null,$array, $array)));