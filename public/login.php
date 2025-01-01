<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seureka - Your Socialize Website</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link href="./output.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
    .navbar {
        z-index: 9999;
    }
    </style>
</head>

<body class="bg-black flex min-h-screen"
    style="background-image: url('image/bgLogin.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">

    <div class="flex container px-16 items-center text-white">
        <!-- Kotak Login -->
        <div
            class="backdrop-filter backdrop-blur-md bg-opacity-35 border border-purple-900 rounded-lg p-8 w-full max-w-md">
            <h2 class="text-3xl font-bold mb-6">Login</h2>
            <form action="login.php" method="POST" class="space-y-4">
                <div>
                    <label for="username" class="block text-sm font-medium text-gray-300 mb-1">Username</label>
                    <input type="text" id="username" name="username" placeholder="Enter your username"
                        class="w-full px-4 py-2 border border-gray-800 bg-gray-800 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-700 "
                        required>
                </div>
                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm font-medium text-gray-300 mb-1">Password</label>
                        <a href="forgot_password.html" class="text-sm text-purple-600 font-normal hover:underline">
                            Forgot Password?
                        </a>
                    </div>
                    <input type="password" id="password" name="password" placeholder="Enter your password"
                        class="w-full px-4 py-2 border border-gray-800 bg-gray-800 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-700 "
                        required>
                </div>
                <div class="flex flex-col items-center">
                    <!-- Tombol Login Memanjang -->
                    <a href="dashboard.html"
                        class="bg-purple-700 text-white font-semibold w-full py-3 rounded-md hover:bg-purple-900 focus:outline-none focus:ring-2 focus:ring-purple-400 focus:ring-offset-2 mb-4 text-center block">
                        Login
                    </a>

                    <!-- Link Register -->
                    <p class="text-sm text-gray-500">
                        Don't have an account?
                        <a href="register.html" class="text-purple-600 hover:underline">Register</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</body>

</html>