<?php
$servername = "localhost";
$username = "root";  // Default username in XAMPP
$password = "";  // Default password is blank in XAMPP
$database = "grocery_store";  // Make sure this is the correct database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
