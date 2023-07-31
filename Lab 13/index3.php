<?php
$host = 'localhost';
$username = 'maleesha';
$password = '1234';
$db_name = 'MYDB';

$conn = new mysqli($host, $username, $password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO students (name, email, password) VALUES ('$name', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Student data stored successfully.";
} else {
    echo "Error storing student data: " . $conn->error;
}

$conn->close();
?>
