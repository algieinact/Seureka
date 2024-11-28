<?php
require 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM users WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: list_users.php");
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
