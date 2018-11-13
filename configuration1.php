<?php
$servername = "localhost";
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($servername, $username, $password, 'zjemto');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$conn->set_charset("utf8")
?>