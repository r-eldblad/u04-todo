<?php

require_once(__DIR__ . "/../db/database.php");
require_once(__DIR__ . "/update.php");

$sql = "SELECT * FROM tasks";
$result = $pdo->query($sql)->fetchAll();

?>

<table align="center">
    <tr>
        <th>Titel</th>
        <th>Uppgift</th>
        <th>Handling</th>
        <th>Avslutad</th>
    </tr>

<?php foreach($result as $row)
{
    ?>
    <tr>
        <td><?php echo $row['title']; ?></td>
        <td><?php echo $row['task_message']; ?></td>
        <td>
            <a href="index.php?edit=<?php echo $row['task_id']; ?>">Ändra</a>
            <a href="src/delete.php?delete=<?php echo $row['task_id'] ?>">Radera</a>
            <a href="index.php?complete=<?php echo $row['task_id'] ?>">Klar</a>
        </td>
        <td>
        <?php
            if(($row['completed']) > 0) {
                echo "Färdig!";
            }
            ?>
        </td>
    </tr>
    <?php
}
    ?>

</table>