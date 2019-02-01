<?php
    require_once "connect.php";


    $todo_res = $db_server->query("SELECT * FROM list_items ORDER BY ListItemID DESC");

    while($row = $todo_res->fetch_assoc()) {
        echo "<br>" .$row['ListText']. "<br>";
    };
?>