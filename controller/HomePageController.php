<?php
require_once "model/User.php";
include_once "model/Task.php";
include_once "model/TaskProvider.php";
session_start();

$userName = null;

if (isset($_SESSION['username'])) {
    $userName = $_SESSION['username']->getUsername();
}

$taskProvider = new TaskProvider();
$tasks = array_reverse($taskProvider->getUndoneList());

require_once "view/home.php";
