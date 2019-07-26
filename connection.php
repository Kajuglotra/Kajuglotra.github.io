<?php
$servername = "40.80.2.244";
$username = "qaappdb";
$password = "Quickdb@1234@";
$database = 'Test';

// Create connection
$conn = new mysqli($servername, $username, $password , $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>