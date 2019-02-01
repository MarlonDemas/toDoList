<?php
    include_once("connect.php");

    $sql = "CREATE TABLE IF NOT EXISTS list_items(
            ListID INT NOT NULL,
            ListText VARCHAR(128) NOT NULL,
            ListItemDone INT(1) NOT NULL,
            ListItemID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY)";
    
    $table = mysqli_query($db_server, $sql);

    if ($table) {
        echo "Table was successfully created.";
    } else {
        echo "Failed to create table: " . mysqli_error($db_server);
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Todo List</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.0/css/bulma.min.css"/>
    </head>
    <body>
    </body>
</html>