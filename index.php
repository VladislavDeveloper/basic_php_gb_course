<?php
include "User.php";
include "Task.php";
include "Comment.php";
include "TaskService.php";

$user1 = new User("Vladilen", "vladilen@mail.ru");
$task1 = new Task($user1, "Сходить в магазин");
TaskService::addComment($user1, $task1, 'Нужно успеть до закрытия');
$task1->markAsDone();
print_r($task1);
