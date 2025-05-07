<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Detail Produk - Ruminix</title>
  <script src="https://kit.fontawesome.com/9c2ca1d73f.js" crossorigin="anonymous"></script>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-gray-800 font-sans">

    <!-- Floating Navbar -->
  <nav id="mainNavbar" class="fixed top-4 left-1/2 transform -translate-x-1/2 w-[90%] md:w-[85%] bg-gray-100 rounded-md shadow px-6 py-3 flex items-center justify-between z-50 transition-all duration-500 ease-in-out">
    <div class="font-bold text-sm md:text-base">Ruminix</div>
    <ul class="hidden md:flex space-x-6 text-sm text-gray-700">
      <li><a href="#" class="hover:underline">Home</a></li>
      <li><a href="#" class="hover:underline">Product</a></li>
      <li><a href="#" class="hover:underline">Shop</a></li>
      <li><a href="#" class="hover:underline">Contact</a></li>
    </ul>
    <div class="flex space-x-4 text-gray-700">
      <a href="/cart"><i class="fas fa-shopping-cart text-sm md:text-base"></i></a>
      <a href="/profile"><i class="fas fa-user text-sm md:text-base"></i></a>
    </div>
  </nav>
  <main class="max-w-4xl mx-auto px-4 py-10 mt-24">

    
    <!-- Gambar Produk -->
    <div class="aspect-[16/9] bg-gray-200 rounded-md overflow-hidden mb-6">


      <img src="https://via.placeholder.com/500" alt="Product Image" class="object-cover w-full h-full" />
    </div>

    <!-- Nama Produk -->
    <h1 class="text-2xl font-semibold mb-2 ">Lorem Ngawi</h1>

    <!-- Harga -->
    <p class="text-xl text-red-500 font-bold mb-4 ">Rp250.000</p>

    <!-- Deskripsi -->
    <div class="mb-6 text-sm text-gray-700">
      <p class="font-semibold mb-1">Deskripsi:</p>
      <p>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur minus, explicabo sapiente fugiat quam et eum fuga necessitatibus facilis fugit officiis illum voluptate quo vel aliquam voluptates itaque voluptatum officia?
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
