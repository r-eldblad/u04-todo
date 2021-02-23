<?php

require_once(__DIR__ . '/../index.php');
require_once(__DIR__ . '/../db/database.php');


if (isset($_POST['submit'])) {

    $title = $_POST['title'];
    $task = $_POST['task'];

    $sql = "INSERT INTO tasks (title, task_message, completed) VALUES(:title, :task, :completed)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['title' => $title, 'task' => $task, 'completed' => 0]);

    $_SESSION['task_added'] = "Uppgiften har lagts till!";
    header('location: index.php');
    exit();
};

?>
