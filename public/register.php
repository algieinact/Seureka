<?php
require 'db.php'; // Koneksi database

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validasi input
    if (empty($username) || empty($email) || empty($password)) {
        die('All fields are required.');
    }

    // Hash password
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // Role selalu user untuk pendaftaran via form
    $role = 'user';

    // Simpan ke database
    $stmt = $pdo->prepare("INSERT INTO users (username, email, password, role) VALUES (:username, :email, :password, :role)");
    try {
        $stmt->execute([
            ':username' => $username,
            ':email' => $email,
            ':password' => $hashedPassword,
            ':role' => $role
        ]);
        echo '<script>
                alert("Registration successful!");
                window.location.href = "login.php";
              </script>';
    } catch (PDOException $e) {
        // Tangani error jika username atau email sudah terdaftar
        if ($e->getCode() == 23000) { // Duplicate entry
            die('Username or Email already exists.');
        }
        die('Error: ' . $e->getMessage());
    }
}
?>
