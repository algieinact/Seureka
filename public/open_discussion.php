<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seureka - Open Discussion</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link href="./output.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
    body {
        font-family: 'Montserrat';
    }

    .sticky {
        z-index: 9999;
    }
    </style>
</head>

<body class="bg-gray-900 text-white">
    <!-- Wrapper -->
    <div class="flex h-screen">

        <!-- Left Sidebar (Navigation) -->
        <div class="bg-black w-16 flex flex-col items-center py-4 space-y-6">
            <!-- Logo -->
            <div class="bg-purple-600 p-3 rounded-full">
                <span class="text-white text-xl font-bold">O</span>
            </div>
            <!-- Navigation Icons -->
            <div class="flex flex-col items-center space-y-4">
                <button class="bg-purple-600 p-3 rounded-full">
                    <img src="https://via.placeholder.com/24" alt="icon 1">
                </button>
                <button class="bg-gray-700 p-3 rounded-full">
                    <img src="https://via.placeholder.com/24" alt="icon 2">
                </button>
                <button class="bg-gray-700 p-3 rounded-full">
                    <img src="https://via.placeholder.com/24" alt="icon 3">
                </button>
                <button class="bg-gray-700 p-3 rounded-full">
                    <img src="https://via.placeholder.com/24" alt="icon 4">
                </button>
            </div>
            <!-- Add Button -->
            <button class="bg-purple-600 p-3 rounded-full mt-auto">
                <img src="https://via.placeholder.com/24" alt="add icon">
            </button>
        </div>

        <!-- Right Sidebar (Chats List) -->
        <div class="w-64 bg-gray-800 flex flex-col">
            <!-- Header -->
            <div class="px-4 py-2 bg-gray-900">
                <h2 class="text-lg font-semibold">Discussion Chat Interaction</h2>
            </div>
            <!-- Search Box -->
            <div class="p-4">
                <input type="text" placeholder="Search chats"
                    class="w-full p-2 rounded bg-gray-700 text-gray-200 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-600" />
            </div>
            <!-- Chat List -->
            <div class="flex-1 overflow-y-auto">
                <!-- Chat Item -->
                <div class="flex items-center px-4 py-2 hover:bg-gray-700 cursor-pointer">
                    <div
                        class="w-12 h-12 bg-purple-600 rounded-full flex items-center justify-center text-xl font-bold">
                        D</div>
                    <div class="ml-4">
                        <p class="font-semibold">Diskusi Mantap</p>
                        <p class="text-sm text-gray-400">25/05/2024</p>
                    </div>
                </div>
                <div class="flex items-center px-4 py-2 hover:bg-gray-700 cursor-pointer">
                    <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center text-xl font-bold">D
                    </div>
                    <div class="ml-4">
                        <p class="font-semibold">Diskusi Oke</p>
                        <p class="text-sm text-gray-400">01/06/2024</p>
                    </div>
                </div>
                <div class="flex items-center px-4 py-2 hover:bg-gray-700 cursor-pointer">
                    <div class="w-12 h-12 bg-green-600 rounded-full flex items-center justify-center text-xl font-bold">
                        D</div>
                    <div class="ml-4">
                        <p class="font-semibold">Diskusi Siap</p>
                        <p class="text-sm text-gray-400">26/05/2024</p>
                    </div>
                </div>
                <div class="flex items-center px-4 py-2 hover:bg-gray-700 cursor-pointer">
                    <div
                        class="w-12 h-12 bg-yellow-600 rounded-full flex items-center justify-center text-xl font-bold">
                        D</div>
                    <div class="ml-4">
                        <p class="font-semibold">Diskusi Ganteng</p>
                        <p class="text-sm text-gray-400">01/06/2024</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 bg-gray-900">
            <!-- Add your main content here -->
        </div>

    </div>
    </div>
    </aside>

</body>

</html>