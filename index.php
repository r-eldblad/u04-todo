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
    require_once(__DIR__ . '/src/create.php');
    require_once(__DIR__ . '/src/read.php');
    require_once(__DIR__ . '/src/update.php');
    require_once(__DIR__ . '/src/delete.php');

    if (isset($_SESSION['task_added'])) { ?>
        <p id="add-message"><?php echo $_SESSION['task_added']; ?></p>
        <?php unset($_SESSION['task_added']);
    } 
    
    else if (isset($_SESSION['task_deleted'])) { ?>
    <p id="delete-message"><?php echo $_SESSION['task_deleted']; ?></p>
        <?php unset($_SESSION['task_deleted']);
    } 
    
    else if (isset($_SESSION['task_updated'])) { ?>
        <p id="update-message"><?php echo $_SESSION['task_updated']; ?></p>
            <?php unset($_SESSION['task_updated']);
        }

?>

    <form method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="title">Title</label>
        <input id="title" type="text" name="title" placeholder="Enter title" value="<?php echo $title; ?>">
        <label for="task">Task</label>
        <input id="task_message" type="text" name="task_message" placeholder="Enter task" value="<?php echo $task_message; ?>">

        <?php if ($update === true) { ?>
            <button type="submit" name="update">Update</button>
        <?php } else { ?>
            <button type="submit" name="submit">Add &#43;</button>
        <?php } ?>
    </form>
</body>
</html>