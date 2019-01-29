<?php
    include_once('user.php');

    // Connecting to the database
    $conn = mysqli_connect(DB_Host, DB_User, DB_Pass, DB_Name);

    // Checking if there is a connection
    if (mysqli_connect_errno()) {
        echo "Connection Unsuccessful: " . mysqli_connect_error();
    } 
?>