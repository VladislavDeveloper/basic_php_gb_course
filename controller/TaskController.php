<?php
require_once "model/User.php";
include_once "model/Task.php";
include_once "model/TaskProvider.php";
session_start();

if (isset($_SESSION['username'])) {
    $userName = $_SESSION['username']->getUsername();
} else {
    header("Location: ?controller=security");
    die();
}

$taskProvider = new TaskProvider();

if (isset($_GET['action']) && $_GET['action'] === 'add') {
    $taskProvider->addTask(new Task($_POST['task'], $_POST['description']));
    header("Location: /?controller=tasks");
    die();
}

$tasks = array_reverse($taskProvider->getUndoneList());

require_once "view/tasks.php";
