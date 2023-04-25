<?php
    require_once 'db_connect.php';

    phpinfo();

    if ($conn) {
        $sql = "CREATE DATABASE IF NOT EXISTS tempDB";

        if (mysqli_query($conn, $sql)) {
            echo "Database created successfully";
        } else {
            echo "Error creating database: " . mysqli_error($conn);
        }   
    }

    mysqli_close($conn);
?>
