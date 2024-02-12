<?php
$servername = "localhost"; // Replace with your MySQL server hostname
$username = "bbcap23_26";     // Replace with your MySQL username
$password = "Is73JdUf";     // Replace with your MySQL password
$dbname = "wp_bbcap23_26";       // Replace with the name of your MySQL database

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
