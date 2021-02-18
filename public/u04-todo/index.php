<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO-App</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php 

    session_start();

    require_once(__DIR__ . '/db/database.php');
    require_once(__DIR__ . '/create.php');
    require_once(__DIR__ . '/read.php');
    require_once(__DIR__ . '/update.php');
    require_once(__DIR__ . '/delete.php');

    if (isset($_SESSION['task_added'])) { ?>
        <p id="add-message"><?php echo $_SESSION['task_added']; ?></p>
        <?php unset($_SESSION['task_added']);
    } 
    
    else if (isset($_SESSION['task_deleted'])) { ?>
    <p id="delete-message"><?php echo $_SESSION['task_deleted']; ?></p>
        <?php unset($_SESSION['task_deleted']);
    }

?>

    <form action="" method="POST">
        <label for="title">Title</label>
        <input id="title" type="text" name="title" placeholder="Enter title">
        <label for="task">Task</label>
        <input id="task" type="text" name="task" placeholder="Enter task">
        <button type="submit" name="submit">Add &#43;</button>
    </form>
</body>
</html>