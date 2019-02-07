<?php
    require_once "connect.php";

    $drop = $db_server->query("DROP TABLE IF EXISTS list_items");

    $table = $db_server->query("CREATE TABLE list_items(
                               ListID INT,
                               ListText VARCHAR(128) NOT NULL,
                               ListItemDone INT(1),
                               ListItemID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY)");
    
    if ($table) {
        echo 'Table was successfully created. You can now <a href="add.php">insert</a> data into the table.<br>';
        echo 'Table was successfully created. You can now <a href="post.php">insert</a> data manually to the table.';
    } else {
        echo "Error: " . $add;
    }

    
?>