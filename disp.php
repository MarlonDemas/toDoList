<?php
    require_once "connect.php";
?>

<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Display Table</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.0/css/bulma.min.css"/>
    </head>
    <body>
        <table class="table is-bordered">
            <thead>
                <tr>
                    <td>ListID</td>
                    <td>ListText</td>
                    <td>ListItemDone</td>
                    <td>ListItemID</td>
                </tr>
            </thead>
            <tbody>
            <?php
                $todo_res = $db_server->query("SELECT * FROM list_items ORDER BY ListItemID DESC");
                while($row = $todo_res->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $row['ListID'] ?></td>
                    <td><?php echo $row['ListText'] ?></td>
                    <td><?php echo $row['ListItemDone'] ?></td>
                    <td><?php echo $row['ListItemID'] ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>

        <?php
            mysqli_close($db_server);
        ?>

        <a href="index.php" class="button is-primary">Home</a>
    </body>
</html>