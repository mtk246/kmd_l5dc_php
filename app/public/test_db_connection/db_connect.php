<?php
$servername = "db";
$username = "db_user";
$password = "db_user_pass";
$dbname = "app_db";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>