<?php

require_once(__DIR__ . '/../index.php');
require_once(__DIR__ . '/../db/database.php');

if(isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM tasks WHERE task_id = $id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    $_SESSION['task_deleted'] = "Task has been deleted!";
    header('location: ../index.php');
    exit();
}

?>