<?php
    require_once "connect.php";

    $drop = $db_server->query("DROP TABLE IF EXISTS list_items");

    $table = $db_server->query("CREATE TABLE list_items(
                               ListID INT NOT NULL,
                               ListText VARCHAR(128) NOT NULL,
                               ListItemDone INT(1) NOT NULL,
                               ListItemID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY)");
    
    if ($table === TRUE) {
        echo 'Table was successfully created. You can now <a href="add.php">insert</a> data into the table.';
    }

    
?>