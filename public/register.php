<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seureka - Register</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link href="./output.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-black flex min-h-screen"
    style="background-image: url('image/bgLogin.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">

    <div class="flex container px-16 items-center text-white">
        <!-- Kotak Register -->
        <div
            class="backdrop-filter backdrop-blur-md bg-opacity-35 border border-purple-900 rounded-lg p-8 w-full max-w-md">
            <h2 class="text-3xl font-bold mb-6">Register</h2>
            <form action="register.php" method="POST" class="space-y-4">
                <!-- Firs/Last Name -->
                <!-- <div>
                    <div class="flex items-center justify-between gap-6">
                        <div>
                            <label for="first_name" class="block text-sm font-medium text-gray-300 mb-1">First Name</label>
                            <input 
                                type="text" 
                                id="first_name" 
                                name="first_name" 
                                placeholder="Your First Name" 
                                class="w-full px-4 py-2 border border-gray-800 bg-gray-800 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-700 "
                                required
                            >
                        </div>
                        <div>
                            <label for="last_name" class="block text-sm font-medium text-gray-300 mb-1">Last Name</label>
                            <input 
                                type="text" 
                                id="last_name" 
                                name="last_name" 
                                placeholder="Yout First Name" 
                                class="w-full px-4 py-2 border border-gray-800 bg-gray-800 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-700 "
                                required
                            >
                        </div>
                    </div>
                </div> -->

                <div>
                    <label for="username" class="block text-sm font-medium text-gray-300 mb-1">Username</label>
                    <input type="text" id="username" name="username" placeholder="Choose a username"
                        class="w-full px-4 py-2 border border-gray-800 bg-gray-800 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-700 "
                        required>
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-300 mb-1">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email"
                        class="w-full px-4 py-2 border border-gray-800 bg-gray-800 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-700 "
                        required>
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-300 mb-1">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter a password"
                        class="w-full px-4 py-2 border border-gray-800 bg-gray-800 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-700 "
                        required>
                </div>
                <div>
                    <label for="confirm-password" class="block text-sm font-medium text-gray-300 mb-1">Confirm
                        Password</label>
                    <input type="password" id="confirm-password" name="confirm_password"
                        placeholder="Confirm your password"
                        class="w-full px-4 py-2 border border-gray-800 bg-gray-800 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-700 "
                        required>
                </div>
                <div>
                    <label for="profile_picture" class="block text-sm font-medium text-gray-300 mb-1">Profile
                        Picture</label>
                    <input type="file" id="profile_picture" name="profile_picture" accept="image/*" class="w-full">
                </div>
                <div class="flex flex-col items-center">
                    <a href="login.html" type="submit"
                        class="bg-purple-700 text-center text-white font-semibold w-full py-3 rounded-md hover:bg-purple-900 focus:outline-none focus:ring-2 focus:ring-purple-400 focus:ring-offset-2 mb-4">
                        Register
                    </a>
                    <p class="text-sm text-gray-500">
                        Already have an account?
                        <a href="login.html" class="text-purple-600 hover:underline">Login</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</body>

</html>