<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Detail Produk - Ruminix</title>
  <script src="https://kit.fontawesome.com/9c2ca1d73f.js" crossorigin="anonymous"></script>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-gray-800 font-sans">

  <!-- Navbar -->
  <nav id="mainNavbar" class="fixed top-4 left-1/2 transform -translate-x-1/2 w-[90%] md:w-[85%] bg-gray-100 rounded-md shadow px-6 py-4 flex items-center justify-between z-50 transition-all duration-300 ease-in-out">


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

  <!-- Search Bar -->
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
  <main id="mainContent" class="max-w-4xl mx-auto px-4 py-10 mt-32 transition-all duration-300">

    <!-- Gambar Produk -->
    <div class="aspect-[16/9] bg-gray-200 rounded-md overflow-hidden mb-6">
      <img src="https://via.placeholder.com/500" alt="Product Image" class="object-cover w-full h-full" />
    </div>

    <!-- Nama Produk -->
    <h1 class="text-2xl font-semibold mb-2">Lorem Ngawi</h1>

    <!-- Harga -->
    <p class="text-xl text-red-500 font-bold mb-4">Rp250.000</p>

    <!-- Deskripsi -->
    <div class="mb-6 text-sm text-gray-700">
      <p class="font-semibold mb-1">Deskripsi:</p>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur minus, explicabo sapiente fugiat quam et eum fuga necessitatibus facilis.
      </p>
    </div>

    <!-- Tombol Aksi -->
    <div class="flex flex-col sm:flex-row gap-3 mt-6">
      <button class="w-full bg-black text-white py-2 rounded hover:bg-gray-800">
        <i class="fas fa-shopping-cart mr-2"></i> Tambah ke Keranjang
      </button>
      <button class="w-full bg-indigo-600 text-white py-2 rounded hover:bg-indigo-700">
        <i class="fas fa-bolt mr-2"></i> Beli Sekarang
      </button>
    </div>

  </main>

 

</body>
</html>
