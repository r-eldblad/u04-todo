<?php

require_once(__DIR__ . '/../index.php');
require_once(__DIR__ . '/../db/database.php');


if (isset($_POST['submit'])) {

    $title = $_POST['title'];
    $task = $_POST['task'];

    $sql = "INSERT INTO tasks (title, task_message) VALUES(:title, :task)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['title' => $title, 'task' => $task]);

    $_SESSION['task_added'] = "Task has been added!";
    header('location: index.php');
    exit();
};

?>
