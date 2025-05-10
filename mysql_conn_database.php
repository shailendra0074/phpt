<?php
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
echo "<br>";

// create database
$sql = "CREATE DATABASE DBSHAILENDRA";
mysqli_query($conn, $sql);

// Check Data

// $result = mysqli_query($conn, $sql);

// if($result){
//     echo "Data Base create a succussfully";
// }
// else{
//     echo "Data base not create";
// }

// echo "The result is ";
// echo var_dump($result);
// echo"<br>";


?>
