<?php
// Database Configuration
$host = "127.0.0.1"; // Host address (use "localhost" if on the same server)
$username = "root"; // Database username
$password = ""; // Database password (leave blank if no password is set)
$dbname = "merged_database"; // Database name

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// For debugging connection success
// echo "Connected successfully";
?>
