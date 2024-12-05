<?php
session_start();
require 'db.php';

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header('Location: login.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = $_POST['role'];

    if (!empty($username) && !empty($email) && !empty($password) && !empty($role)) {
        $stmt = $pdo->prepare("INSERT INTO users (username, email, password, role) VALUES (:username, :email, :password, :role)");
        $stmt->execute([':username' => $username, ':email' => $email, ':password' => $password, ':role' => $role]);
        header('Location: admin_dashboard.php?success=User+added');
        exit;
    } else {
        $error = "All fields are required.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="container mx-auto px-10 py-8">
        <h1 class="text-black text-3xl font-bold mb-6">Add New User</h1>
        <?php if (!empty($error)): ?>
        <div class="bg-red-100 text-red-700 px-4 py-2 rounded mb-4">
            <?php echo htmlspecialchars($error); ?>
        </div>
        <?php endif; ?>
        <form action="" method="POST" class="space-y-4">
            <input type="text" name="username" placeholder="Username" class="w-full border px-4 py-2" required>
            <input type="email" name="email" placeholder="Email" class="w-full border px-4 py-2" required>
            <input type="password" name="password" placeholder="Password" class="w-full border px-4 py-2" required>
            <select name="role" class="w-full border px-4 py-2" required>
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>
            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-700">Create
                User</button>
        </form>
        <div class="mt-6">
            <a href="admin_dashboard.php" class="bg-blue-500 text-white px-6 py-2 rounded hover:bg-blue-700">Back to
                Dashboard</a>
        </div>
    </div>
</body>

</html>