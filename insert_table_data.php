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

// Insert data into the employee table
$sql = "INSERT INTO employee (
    first_name, last_name, email, phone_number, hire_date, job_title, department, salary, status
) VALUES (
    'John', 'Doe', 'john.doe@example.com', '1234567890', '2024-01-15', 'Software Engineer', 'IT', 75000.00, 'Active'
)";

// Execute the query
if (mysqli_query($conn, $sql)) {
    echo "New employee record inserted successfully";
} else {
    echo "Error inserting record: " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>
