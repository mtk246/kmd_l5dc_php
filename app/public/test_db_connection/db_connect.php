<?php
  $servername = "db";
  $username = "root";
  $password = "my_secret_password";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  } else {
    echo "Connected successfully";
  }
?>