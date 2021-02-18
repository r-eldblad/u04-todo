<?php

require_once(__DIR__ . "/db/database.php");

$sql = "SELECT * FROM tasks";
$data = $pdo->query($sql)->fetchAll();

?>

<table border="3" cellpadding="5" cellspacing="5" align="center">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Task</th>
</tr>

<?php foreach($data as $row)
{
    ?>
    <tr>
        <td><?php echo $row['task_id']; ?></td>
        <td><?php echo $row['title']; ?></td>
        <td><?php echo $row['task_message']; ?></td>
    </tr>
    <?php
}
    ?>
</table>