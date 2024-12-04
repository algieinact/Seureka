<?php
require 'db.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Ambil data pengguna berdasarkan username
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
    $stmt->execute([':username' => $username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        // Simpan data pengguna ke session
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role']; // Simpan role ke session

        // Redirect berdasarkan role
        if ($user['role'] == 'admin') {
            header('Location: admin_dashboard.php'); // Dashboard admin
        } else {
            header('Location: dashboard.php'); // Dashboard user
        }
        exit;
    } else {
        echo 'Invalid username or password.';
    }
}
?>