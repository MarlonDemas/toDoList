<?php
    require_once "connect.php";

    $sql = "CREATE TABLE IF NOT EXISTS list_items(
            ListID INT NOT NULL,
            ListText VARCHAR(128) NOT NULL,
            ListItemDone INT(1) NOT NULL,
            ListItemID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY)";
    
    $table = mysqli_query($db_server, $sql);

    if ($table) {
        echo 'Table was successfully created. You can now <a href="add.php">display</a> data into the table.';
    } else {
        echo "Failed to create table: " . mysqli_error($db_server);
    }
?>