<?php
// Connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbdatabase = "dbshailendra";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $dbdatabase);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connection was successful";
echo "<br>";

// Create database table
$sql = "CREATE TABLE employee (
    employee_id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE,
    phone_number VARCHAR(20),
    hire_date DATE NOT NULL,
    job_title VARCHAR(100),
    department VARCHAR(100),
    salary DECIMAL(10, 2),
    status ENUM('Active', 'Inactive') DEFAULT 'Active'
)";

// Execute the query
if (mysqli_query($conn, $sql)) {
    echo "Table 'employee' created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>
