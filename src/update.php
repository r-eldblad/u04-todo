<?php

require_once(__DIR__ . '/../index.php');
require_once(__DIR__ . '/../db/database.php');

$id = 0;
$update = false;
$title = '';
$task_message = '';

if (isset($_GET['edit'])) {
    $update = true;
    $id = $_GET['edit'];
    $sql = "SELECT * FROM tasks WHERE `task_id`='$id'";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($result as $row) {
        $title = $row["title"];
        $task_message = $row["task_message"];
    }
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $task_message = $_POST['task_message'];
    $sql = "UPDATE tasks SET title='$title', task_message = '$task_message' WHERE `task_id` = $id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    $_SESSION['task_updated'] = "Task has been updated!";
    header('location: index.php');
    exit();

    }
?>