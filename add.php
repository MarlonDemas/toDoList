<?php
    require_once "connect.php";

    $add = $db_server->query("INSERT INTO list_items(ListID, ListText, ListItemDone) VALUES
                            (1, 'Finish project', 0),
                            (3, 'Do class exercise', 1),
                            (2, 'Do some research on what you would like the project to look like', 1),
                            (4, 'Have some lunch', 1)");

    

    $todo_res = $db_server->query("SELECT * FROM list_items ORDER BY ListItemID DESC");

    while($row = $todo_res->fetch_assoc()) {
        echo "<br>" .$row['ListText']. "<br>";
    };
?>