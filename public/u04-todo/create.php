<?php

require_once(__DIR__ . '/db/database.php');

if (isset($_POST['add'])) {

    $dat

    $title = $_POST['title'];
    $task = $_POST['task'];

    $sql = "INSERT INTO tasks (title, task_message, done) VALUES('$title', '$task')";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$title, $task]);

};

?>