<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO-App</title>
</head>
<body>

<?php 

require_once(__DIR__ . '/db/database.php');
require_once(__DIR__ . '/create.php');
require_once(__DIR__ . '/read.php');
require_once(__DIR__ . '/delete.php');


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