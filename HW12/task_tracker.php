<?php

require_once 'Tracker.php';
require_once 'StateTask.php';

try {
    $task = new Tracker('tasks.txt');
    $task->addTask('line with information 8', 4);
//    $task->getTasks();
//    $task->completeTask(3);
//    $task->deleteTask(4);
} catch (Exception $exception) {
    echo $exception->getMessage() . PHP_EOL;
}


