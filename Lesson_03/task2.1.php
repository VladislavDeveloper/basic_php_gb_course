<?php
//Протой вариант решения задания по примеру из методички

$wishes = ['счастья', 'здоровья', 'успехa', 'терпения', 'везения', 'настроения'];
$epithets = ['огромного', 'большого', 'бесконечного', 'безудержного', 'сумасшедшего', 'космического'];

do{
    $userName = readline('Имя именинника ?');
}while(!$userName);

echo "$userName от всего средца поздравляем Вас с праздником и желаем Вам " . $epithets[array_rand($epithets)] . " ". $wishes[array_rand($wishes)]  . " !\n" ;