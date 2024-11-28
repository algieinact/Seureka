<?php
session_start();
require 'db.php';

// Periksa apakah user adalah admin
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header('Location: login.php');
    exit;
}

// Proses penghapusan pengguna jika ada permintaan
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete_user_id'])) {
    $deleteUserId = $_POST['delete_user_id'];

    // Pastikan admin tidak menghapus dirinya sendiri
    if ($deleteUserId == $_SESSION['user_id']) {
        $error = "You cannot delete your own account.";
    } else {
        // Hapus pengguna dari database
        $stmt = $pdo->prepare("DELETE FROM users WHERE id = :id");
        $stmt->execute([':id' => $deleteUserId]);
        $success = "User successfully deleted.";
    }
}

// Ambil semua pengguna dari database
$stmt = $pdo->prepare("SELECT id, username, email, role FROM users ORDER BY role DESC, username ASC");
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white px min-h-screen">
    <div class="container mx-auto px-10 py-8">
        <h1 class="text-black text-3xl font-bold mb-6">Dashboard <span class="text-purple-400"><?php echo htmlspecialchars($_SESSION['username']);?></span>. Hello Admin!</h1>

        <!-- Pesan Sukses/Error -->
        <?php if (!empty($error)): ?>
            <div class="bg-red-100 text-red-700 px-4 py-2 rounded mb-4">
                <?php echo htmlspecialchars($error); ?>
            </div>
        <?php endif; ?>
        <?php if (!empty($success)): ?>
            <div class="bg-green-100 text-green-700 px-4 py-2 rounded mb-4">
                <?php echo htmlspecialchars($success); ?>
            </div>
        <?php endif; ?>

        <!-- Tabel Pengguna -->
        <div class="overflow-x-auto bg-gray-300 rounded-lg shadow-md">
            <table class="table-auto w-full  border-collapse ">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="border border-black px-4 py-2">ID</th>
                        <th class="border border-black px-4 py-2">Username</th>
                        <th class="border border-black px-4 py-2">Email</th>
                        <th class="border border-black px-4 py-2">Role</th>
                        <th class="border border-black px-4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr class="text-center text-black">
                            <td class="border border-black px-4 py-2"><?php echo htmlspecialchars($user['id']); ?></td>
                            <td class="border border-black px-4 py-2"><?php echo htmlspecialchars($user['username']); ?></td>
                            <td class="border border-black px-4 py-2"><?php echo htmlspecialchars($user['email']); ?></td>
                            <td class="border border-black px-4 py-2"><?php echo htmlspecialchars($user['role']); ?></td>
                            <td class="border border-black px-4 py-2">
                                <!-- Tombol Hapus -->
                                <?php if ($user['role'] !== 'admin'): ?>
                                    <form action="admin_dashboard.php" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');">
                                        <input type="hidden" name="delete_user_id" value="<?php echo htmlspecialchars($user['id']); ?>">
                                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-700">
                                            Delete
                                        </button>
                                    </form>
                                <?php else: ?>
                                    <span class="text-gray-500">Cannot Delete</span>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <!-- Tombol Logout -->
        <div class="mt-6">
            <a href="logout.php" class="bg-blue-500 text-white px-6 py-2 rounded hover:bg-blue-700">
                Logout
            </a>
        </div>
    </div>
</body>
</html>
