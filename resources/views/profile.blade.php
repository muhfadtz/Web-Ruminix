<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - Ruminix</title>
    @vite('resources/css/app.css')
    <script src="https://kit.fontawesome.com/9c2ca1d73f.js" crossorigin="anonymous"></script>
</head>
<body class="bg-white font-sans min-h-screen relative">

    {{-- Floating Navbar --}}
    <nav class="fixed top-4 left-1/2 transform -translate-x-1/2 w-[90%] md:w-[85%] bg-gray-100 rounded-md shadow px-6 py-3 flex items-center justify-between z-50">
        <div class="font-bold text-sm md:text-base">Ruminix</div>
        <ul class="hidden md:flex space-x-6 text-sm text-gray-700">
            <li><a href="#" class="hover:underline">Home</a></li>
            <li><a href="#" class="hover:underline">Product</a></li>
            <li><a href="#" class="hover:underline">Shop</a></li>
            <li><a href="#" class="hover:underline">Contact</a></li>
        </ul>
        <div class="flex items-center space-x-4 text-gray-700">
            <a href="/cart" class="hover:text-gray-900">
                <i class="fas fa-shopping-cart text-sm md:text-base"></i>
            </a>
            <a href="/profile" class="hover:text-gray-900">
                <i class="fas fa-user text-sm md:text-base"></i>
            </a>
        </div>        
    </nav>

    {{-- Main Content --}}
    <main class="pt-28 px-4 flex flex-col items-center text-center">
        <div class="w-full max-w-xs text-left text-gray-800 text-sm mb-3">
            <i class="fas fa-user-circle mr-2"></i> Profile
        </div>

        <h1 class="text-lg font-semibold mb-6">John Doe</h1>

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
