<?php
require 'db.php';
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    // Validasi input
    if (empty($username) || empty($password)) {
        echo 'Username and password are required.';
        exit;
    }

    // Ambil data pengguna berdasarkan username
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>

<body class="bg-gray-900 text-white min-h-screen flex items-center justify-center">
    <div class="container mx-auto p-8 max-w-md">
        <h1 class="text-3xl font-bold mb-6">Login</h1>
        <form method="POST" class="space-y-4">
            <div>
                <label for="username" class="block text-sm font-medium">Username</label>
                <input type="text" id="username" name="username" class="w-full p-2 rounded bg-gray-800 text-white"
                    required>
            </div>
            <div>
                <label for="password" class="block text-sm font-medium">Password</label>
                <input type="password" id="password" name="password" class="w-full p-2 rounded bg-gray-800 text-white"
                    required>
            </div>
            <button type="submit" class="bg-purple-600 hover:bg-purple-700 px-6 py-2 rounded text-white font-bold">
                Login
            </button>
        </form>
    </div>
</body>

</html>