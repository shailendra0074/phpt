<?php
echo "Welcome to MySQL connection<br>";

// Ways to connect to a MySQL database:
// 1. MySQLi extension
// 2. PDO (PHP Data Objects)

// Connection parameters
$servername = "localhost";
$username = "root";
$password = "";

// Create a connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connection was successful";
?>
