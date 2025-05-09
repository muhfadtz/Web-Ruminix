<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - Ruminix</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://kit.fontawesome.com/9c2ca1d73f.js" crossorigin="anonymous"></script>
</head>
<body class="bg-white font-sans min-h-screen relative">

    <!-- Floating Navbar with Search -->
    <nav id="mainNavbar" class="fixed top-4 left-1/2 transform -translate-x-1/2 w-[90%] md:w-[85%] bg-gray-100 rounded-md shadow px-6 py-3 flex items-center justify-between z-50 transition-all duration-300 ease-in-out bg-gray py-4 shadow-sm"">

    <!-- Logo -->
    <div class="font-bold text-base">Ruminix</div>

    <!-- Menu -->
    <ul class="hidden md:flex space-x-6 text-sm text-gray-700">
        <li><a href="/home" class="hover:underline">Home</a></li>
        <li><a href="#" class="hover:underline">Product</a></li>
        <li><a href="#" class="hover:underline">Shop</a></li>
        <li><a href="#" class="hover:underline">Contact</a></li>
    </ul>

    <!-- Icons -->
    <div class="flex space-x-4 items-center text-gray-700">
        <a href="/cart"><i class="fas fa-shopping-cart"></i></a>
        <button data-toggle="search" class="focus:outline-none">
        <i class="fas fa-search"></i>
        </button>

        <a href="/profile"><i class="fas fa-user"></i></a>
    </div>
    </nav>

    <!-- Hidden Search Bar -->
    <div id="searchBar" class="fixed top-[70px] left-1/2 transform -translate-x-1/2 w-[90%] md:w-[85%] bg-white shadow px-4 py-2 rounded-md hidden z-40 transition-all duration-300 border rounded-md">
    <div class="relative bg-white">
        <span class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400">
        <i class="fas fa-search"></i>
        </span>
        <input 
        type="text" 
        placeholder="Search.." 
        class="w-full pl-10 pr-4 py-2 focus:outline-none"
        />
    </div>
    </div>

    {{-- Main Content --}}
    <main id="mainContent" class="pt-28 px-4 flex flex-col items-center text-center">
        <div class="w-full max-w-xs text-left text-gray-800 text-sm mb-3">
            <i class="fas fa-user-circle mr-2 mb-12"></i> Profile
        </div>

        <h1 class="text-lg font-semibold mb-12">{{ Auth::user()->name }}</h1>


        <div class="w-full max-w-xs space-y-3">
            {{-- Theme Button --}}
            <button class="w-full flex items-center px-4 py-2 border rounded text-sm text-gray-700 hover:bg-gray-100">
                <i class="fas fa-palette mr-3 w-4 text-gray-600"></i>
                Theme
            </button>

            {{-- Logout Button --}}
            <form method="POST" action="/logout">
                @csrf
                <button type="submit" class="w-full flex items-center px-4 py-2 border rounded text-sm text-gray-700 hover:bg-gray-100">
                    <i class="fas fa-sign-out-alt mr-3 w-4 text-gray-600"></i>
                    Logout
                </button>
            </form>
        </div>
    </main>

</body>
</html>
