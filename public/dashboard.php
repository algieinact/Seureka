<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.html');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seureka - Home</title>
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

<body class="bg-gradient-to-br from-purple-950 from-10% via-black via-40% to-purple-900 to-90% text-white font-sans
    min-h-screen">
    <script src="../node_modules/flyonui/flyonui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <!-- Header Section -->
    <nav class="px-16 backdrop-filter sticky top-0 backdrop-blur-md bg-opacity-30">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <!-- Logo -->
            <button onclick="scrollToSection('hero')" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="favicon.ico" class="h-10" alt="Seureka Logo" />
            </button>

            <!-- Hamburger Button -->
            <button data-collapse-toggle="navbar-multi-level" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:focus:ring-gray-600"
                aria-controls="navbar-multi-level" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>

            <!-- Navigation Links -->
            <div class="hidden w-full md:block md:w-auto" id="navbar-multi-level">
                <ul
                    class="flex flex-col md:flex-row md:space-x-6 font-medium items-center p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-transparent md:mt-0 md:border-0">
                    <li>
                        <a href="help.html"
                            class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent hover:text-purple-500 md:text-purple-700 md:p-0 md:dark:text-white dark:bg-purple-600 md:dark:bg-transparent"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="about.html"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-purple-700 md:p-0 dark:text-white md:dark:hover:text-purple-500 dark:hover:bg-purple-700 dark:hover:text-white md:dark:hover:bg-transparent">Open
                            Discussion</a>
                    </li>
                    <li>
                        <a href="about.html"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-purple-700 md:p-0 dark:text-white md:dark:hover:text-purple-500 dark:hover:bg-purple-700 dark:hover:text-white md:dark:hover:bg-transparent">About
                            Us</a>
                    </li>
                    <li>
                        <a href="about.html"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-purple-700 md:p-0 dark:text-white md:dark:hover:text-purple-500 dark:hover:bg-purple-700 dark:hover:text-white md:dark:hover:bg-transparent">Community</a>
                    </li>
                    <li>
                        <a href="about.html"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-purple-700 md:p-0 dark:text-white md:dark:hover:text-purple-500 dark:hover:bg-purple-700 dark:hover:text-white md:dark:hover:bg-transparent">Help</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <div class=" mx-16 mt-4 mb-8 flex flex-col min-h-screen">
        <!-- Welcome Section -->
        <section class="mb-12 mt-4">
            <h1 class="text-4xl font-bold">Welcome, <span class="text-purple-400">Obito!</span></h1>
        </section>

        <!-- Content Section -->
        <section class="flex gap-12 flex-1">
            <div class="w-1/3 gap-12">
                <div
                    class=" bg-gray-800 border border-gray-100/20 p-6 rounded-lg shadow-lg backdrop-filter backdrop-blur-md bg-opacity-40 mb-6 min-h-80">
                    <h2 class="text-xl font-semibold text-center mb-4">May</h2>
                    <div class="grid grid-cols-7 gap-2 text-center text-gray-300">
                        <!-- Calendar Header -->
                        <div>Mo</div>
                        <div>Tu</div>
                        <div>We</div>
                        <div>Th</div>
                        <div>Fr</div>
                        <div>Sa</div>
                        <div>Su</div>
                        <!-- Calendar Days -->
                        <div class="text-gray-400">01</div>
                        <div class="text-gray-400">02</div>
                        <div class="text-gray-400">03</div>
                        <div class="bg-purple-500 text-white rounded-full">18</div>
                        <!-- More dates -->
                    </div>
                </div>
                <!-- Your Community -->
                <div
                    class=" bg-gray-800 border border-gray-100/20 p-6 rounded-lg shadow-lg backdrop-filter backdrop-blur-md bg-opacity-40">
                    <h1 class="text-xl font-semibold text-center mb-4">Your Community</h1>
                </div>
            </div>

            <!-- Events Section -->
            <div class="flex-1">
                <h2 class="text-3xl font-bold mb-4">Your Event</h2>
                <div class="flex gap-4 mb-6">
                    <select
                        class="bg-gray-800 border border-gray-100/20 p-2 rounded-lg shadow-lg backdrop-filter backdrop-blur-md bg-opacity-40">
                        <option>Event Type</option>
                    </select>
                    <select
                        class="bg-gray-800 border border-gray-100/20 p-2 rounded-lg shadow-lg backdrop-filter backdrop-blur-md bg-opacity-40">
                        <option>Categories</option>
                    </select>
                    <input type="text" placeholder="Search"
                        class="bg-gray-800 border border-gray-100/20 p-2 rounded-lg shadow-lg backdrop-filter backdrop-blur-md bg-opacity-40 w-full">
                </div>

                <!-- Today's Events -->
                <h3 class="text-xl font-semibold mb-4">Today</h3>
                <div class="bg-gray-800 p-4 rounded-lg shadow-lg flex items-center gap-4 mb-4">
                    <span class="bg-yellow-500 text-black py-1 px-3 rounded-full text-sm">Open Discussion</span>
                    <div>
                        <h4 class="text-lg font-semibold">Diskusi Mantap</h4>
                        <p class="text-gray-400 text-sm">Welcome to the "Development of Youth Resources" forum.</p>
                        <span class="text-gray-500 text-xs">25/05/2024</span>
                    </div>
                </div>

                <!-- Tomorrow's Events -->
                <h3 class="text-xl font-semibold mb-4">Tomorrow</h3>
                <div class="bg-gray-800 p-4 rounded-lg shadow-lg flex items-center gap-4 mb-4">
                    <span class="bg-yellow-500 text-black py-1 px-3 rounded-full text-sm">Open Discussion</span>
                    <div>
                        <h4 class="text-lg font-semibold">Diskusi Gunung</h4>
                        <p class="text-gray-400 text-sm">Welcome to the "Development of Youth Resources" forum.</p>
                        <span class="text-gray-500 text-xs">26/05/2024</span>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Footer Section -->
    <footer class="footer bg-black px-15 py-4">
        <div class="flex w-full flex-wrap items-center justify-between">
            <!-- Left Section: Logo -->
            <div class="flex items-center gap-2 text-xl font-bold">
                <img src="favicon.ico" alt="Logo" class="h-8 w-auto">
                <span>SEUREKA</span>
            </div>

            <!-- Center Section: Copyright -->
            <aside class="flex items-center">
                <p>© 2024 <a class="link link-hover font-medium" href="#">SEUREKA</a></p>
            </aside>

            <!-- Right Section: Social Icons -->
            <div class="flex gap-4">
                <a href="#" class="link" aria-label="Github Link">
                    <span class="icon-[tabler--brand-github] text-xl"></span>
                </a>
                <a href="#" class="link" aria-label="Facebook Link">
                    <span class="icon-[tabler--brand-facebook] text-xl"></span>
                </a>
                <a href="#" class="link" aria-label="X Link">
                    <span class="icon-[tabler--brand-x] text-xl"></span>
                </a>
                <a href="#" class="link" aria-label="Google Link">
                    <span class="icon-[tabler--brand-google] text-xl"></span>
                </a>
            </div>
        </div>
    </footer>
</body>

</html>