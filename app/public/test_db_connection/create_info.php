<?php
    require_once 'db_connect.php';

    $sql = file_get_contents('tempDB.sql');

    if (mysqli_multi_query($conn, $sql)) {
        echo "SQL queries executed successfully";
    } else {
        echo "Error executing SQL queries: " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>
