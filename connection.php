<?php // Replace these with your actual database credentials
$servername = 'localhost';
$user = 'root';
$pass = '123';
$dbname = 'ELECTRONACER';

// Create connection
$conn = new mysqli($servername, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Your other code here...

// Close the connection
$conn->close();
