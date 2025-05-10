<?php
// Connection parameters
$servername = "localhost";
$username = "root";
$password = "";

// Create a connection
$conn = mysqli_connect($servername, $username, $password);

// create database
$sql = "CREATE DATABASE DBSHAILENDRA";
mysqli_query($conn, $sql);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connection was successful";
?>
