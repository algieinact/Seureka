<?php
require 'db.php';

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

echo "<table border='1'><tr><th>ID</th><th>Username</th><th>Email</th><th>Action</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['username']}</td>
        <td>{$row['email']}</td>
        <td>
            <a href='edit_user.php?id={$row['id']}'>Edit</a> | 
            <a href='delete_user.php?id={$row['id']}'>Delete</a>
        </td>
    </tr>";
}
echo "</table>";

$conn->close();
?>
