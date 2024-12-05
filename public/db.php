<?php
$host = 'localhost';
$dbname = 'seureka';
$username = 'root';
$password = '';

$conn = new mysqli($host, $username, $password, $dbname);

// Periksa koneksi database
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>
?>