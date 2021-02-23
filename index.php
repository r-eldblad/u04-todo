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
    <div class="formWrapper">
    <form method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="title">Titel</label>
        <input id="title" type="text" name="title" placeholder="Titel" value="<?php echo $title; ?>" required>
        <label for="task">Uppgift</label>
        <input id="task" type="text" name="task" placeholder="Vad ska du göra?" value="<?php echo $task_message; ?>" required>

        </div>
        <?php if ($update === true) { ?>
            <div class="buttonWrapper">
            <button type="submit" name="update">Uppdatera</button>
            </div>
        <?php } else { ?>
            <div class="buttonWrapper">
            <button type="submit" name="submit">Lägg till &#43;</button>
        </div>
        <?php } ?>
    </form>
</body>
</html>