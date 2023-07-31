<?php
$host = 'localhost';
$username = 'maleesha';
$password = '1234';
$db_name = 'MyDB';

$conn = new mysqli($host, $username, $password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE students (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table 'students' created successfully.";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
