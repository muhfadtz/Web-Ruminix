<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cart - Ruminix</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <script src="https://kit.fontawesome.com/9c2ca1d73f.js" crossorigin="anonymous"></script>
</head>
<body class="bg-white font-sans min-h-screen relative">

  <!-- Floating Navbar -->
  <!-- Floating Navbar with Search -->
    <nav id="mainNavbar" class="fixed top-4 left-1/2 transform -translate-x-1/2 w-[90%] md:w-[85%] bg-gray-100 rounded-md shadow px-6 py-3 flex items-center justify-between z-50 transition-all duration-300 ease-in-out bg-gray py-4 shadow-sm"">

    <!-- Logo -->
    <div class="font-bold text-base">Ruminix</div>

    <!-- Menu -->
    <ul class="hidden md:flex space-x-6 text-sm text-gray-700">
        <li><a href="#" class="hover:underline">Home</a></li>
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
        class="w-full pl-10 pr-4 py-2 focus:outline-none "
        />
    </div>
    </div>

  <!-- Main Content -->
  <main id="mainContent" class="pt-28 px-4 max-w-3xl mx-auto">
    <h2 class="text-md font-semibold mb-6 flex items-center">
      <i class="fas fa-shopping-bag mr-2"></i> Keranjang
    </h2>

    <div class="space-y-6 mb-10">

      <!-- Cart Item -->
      <div class="cart-item flex space-x-4">
        <div class="w-20 h-20 bg-gray-200 rounded-md shrink-0"></div>
        <div class="flex flex-col justify-between flex-1">
          <div>
            <h3 class="font-semibold text-sm mb-1">Lorem Ipsum Ngawi</h3>
            <p class="text-sm text-gray-700 mb-3">Rp200.000</p>
          </div>
          <div class="flex items-center space-x-3">
            <button id="decreaseBtn" class="decrease text-gray-600 hover:text-gray-800">
              <i class="fas fa-minus-circle"></i>
            </button>
            <span class="quantity text-sm">1</span>
            <button id="increaseBtn" class="increase text-gray-600 hover:text-gray-800">
              <i class="fas fa-plus-circle"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Cart Item Duplicate -->
      <div class="cart-item flex space-x-4">
        <div class="w-20 h-20 bg-gray-200 rounded-md shrink-0"></div>
        <div class="flex flex-col justify-between flex-1">
          <div>
            <h3 class="font-semibold text-sm mb-1">Lorem Ipsum Ngawi</h3>
            <p class="text-sm text-gray-700 mb-3">Rp200.000</p>
          </div>
          <div class="flex items-center space-x-3">
            <button class="decrease text-gray-600 hover:text-gray-800">
              <i class="fas fa-minus-circle"></i>
            </button>
            <span class="quantity text-sm">1</span>
            <button class="increase text-gray-600 hover:text-gray-800">
              <i class="fas fa-plus-circle"></i>
            </button>
          </div>
        </div>
      </div>

    </div>

    <!-- Checkout Button -->
    <div class="w-full max-w-sm mx-auto">
      <button class="w-full bg-black text-white py-2 rounded hover:bg-gray-800 text-sm">
        Checkout
      </button>
    </div>
  </main>

  <!-- SCRIPT: Quantity Handler -->
 
</body>
</html>
