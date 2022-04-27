<?php
/*Доработайте скрипт, реализованный во втором задании, следующим образом: Замените вопрос о возрасте на цепочку опроса о важных делах, запланированных на день (три задачи). 
Программа спрашивает: «Какая задача стоит перед вами сегодня?». Пользователь отвечает текстом и нажимает Enter. 
Следующий вопрос программы: «Сколько примерно времени эта задача займет?». 
Пользователь отвечает числом и нажимает Enter. 
Обратите внимание, что количество задач строго ограничено в коде и равно трём. Вероятность ввода некорректных значений в данном задании игнорируем. 
После трёх вопросов выводится итог следующего вида 

Иван, сегодня у вас запланировано 3 приоритетных задачи на день:
- Погулять с кошкой (1ч)
- Попить кофе (2ч)
- Полежать на диване (4ч)
Примерное время выполнения плана = 7ч */

$userName = readline("What's your name ?\n");

$toDo1 = readline("Add your first task\n");

$timeToDo1 = readline("How many times do you need ?\n");

$toDo2 = readline("Add your second task\n");

$timeToDo2 = readline("How many times do you need ?\n");

$toDo3 = readline("Add your third task\n");

$timeToDo3 = readline("How many times do you need ?\n");

$totalTime = $timeToDo1 + $timeToDo2 + $timeToDo3;

echo "You have three important tasks today:\n
    1. $toDo1 $timeToDo1 hours \n
    2. $toDo2 $timeToDo2 hours \n
    3. $toDo3 $timeToDo3 hours \n
    You'll spend about $totalTime hours for all of this tasks
";