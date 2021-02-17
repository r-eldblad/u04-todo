<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO-App</title>
</head>
<body>
<?php require_once(__DIR__ . '/db/database.php'); ?>

    <form action="" method="POST">
        <label for="name">Title</label>
        <input id="name" type="text" name="name" value="Enter title">
        <label for="name">Task</label>
        <input id="task" type="text" name="name" value="Enter task">
        <button type="submit" name="add">Add &#43;</button>
    </form>
</body>
</html>