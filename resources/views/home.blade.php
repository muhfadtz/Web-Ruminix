<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home - Ruminix</title>
  @vite('resources/css/app.css')
  <script src="https://kit.fontawesome.com/9c2ca1d73f.js" crossorigin="anonymous"></script>
</head>
<body class="bg-white font-sans min-h-screen relative">

  <!-- Floating Navbar -->
  <nav class="fixed top-4 left-1/2 transform -translate-x-1/2 w-[90%] md:w-[85%] bg-gray-100 rounded-md shadow px-6 py-3 flex items-center justify-between z-50">
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

  <!-- Main Content -->
  <main class="pt-28 px-4 mx-auto">
    <!-- Hero Section -->
    <section class="bg-gray-100 rounded-lg p-6 mb-6 max-w-6xl mx-auto">
      <div class="flex flex-col md:flex-row items-center">
        <div class="w-full md:w-1/2 mb-6 md:mb-0">
          <h1 class="text-2xl md:text-3xl font-bold mb-3">Lorem ipsum!</h1>
          <p class="text-sm text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin accumsan justo at libero porta.</p>
          <button class="bg-black text-white px-4 py-2 rounded text-sm hover:bg-gray-800">Shop Now</button>
        </div>
        <div class="w-full md:w-1/2 flex justify-center">
          <div class="bg-white h-36 w-full md:h-48 md:w-4/5 rounded-lg shadow-sm"></div>
        </div>
      </div>
    </section>

    <!-- Features Section -->
    <section class="bg-gray-100 rounded-lg p-5 mb-10 max-w-6xl mx-auto">
      <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-center">
        <div class="p-2">
          <div class="flex justify-center mb-2">
            <i class="fas fa-truck text-sm md:text-base"></i>
          </div>
          <h3 class="font-semibold text-xs md:text-sm">Free Delivery</h3>
          <p class="text-xs text-gray-600">For all orders over $100</p>
        </div>
        <div class="p-2">
          <div class="flex justify-center mb-2">
            <i class="fas fa-credit-card text-sm md:text-base"></i>
          </div>
          <h3 class="font-semibold text-xs md:text-sm">Secure Payment</h3>
          <p class="text-xs text-gray-600">100% secure payment</p>
        </div>
        <div class="p-2">
          <div class="flex justify-center mb-2">
            <i class="fas fa-headset text-sm md:text-base"></i>
          </div>
          <h3 class="font-semibold text-xs md:text-sm">24/7 Support</h3>
          <p class="text-xs text-gray-600">Dedicated support</p>
        </div>
        <div class="p-2">
          <div class="flex justify-center mb-2">
            <i class="fas fa-undo text-sm md:text-base"></i>
          </div>
          <h3 class="font-semibold text-xs md:text-sm">Money Back Guarantee</h3>
          <p class="text-xs text-gray-600">30 day money back</p>
        </div>
      </div>
    </section>

    <!-- Products Section -->
    <section class="mb-10 max-w-6xl mx-auto">
      <h2 class="text-lg font-semibold mb-5 text-center">Our Product</h2>
      
      <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        <!-- Product 1 -->
        <div>
          <div class="aspect-square bg-gray-200 rounded-md mb-2"></div>
          <h3 class="font-semibold text-xs md:text-sm">Lorem ipsum frigus</h3>
          <p class="text-xs text-gray-700 mb-1">Rp200.000</p>
          <div class="flex items-center justify-between mt-1">
            <div class="flex space-x-1">
              <button class="text-gray-600 hover:text-gray-800">
                <i class="far fa-heart text-xs"></i>
              </button>
              <button class="text-gray-600 hover:text-gray-800">
                <i class="fas fa-shopping-cart text-xs"></i>
              </button>
            </div>
          </div>
        </div>
        
        <!-- Product 2 -->
        <div>
          <div class="aspect-square bg-gray-200 rounded-md mb-2"></div>
          <h3 class="font-semibold text-xs md:text-sm">Lorem ipsum frigus</h3>
          <p class="text-xs text-gray-700 mb-1">Rp150.000</p>
          <div class="flex items-center justify-between mt-1">
            <div class="flex space-x-1">
              <button class="text-gray-600 hover:text-gray-800">
                <i class="far fa-heart text-xs"></i>
              </button>
              <button class="text-gray-600 hover:text-gray-800">
                <i class="fas fa-shopping-cart text-xs"></i>
              </button>
            </div>
          </div>
        </div>
        
        <!-- Product 3 -->
        <div>
          <div class="aspect-square bg-gray-200 rounded-md mb-2"></div>
          <h3 class="font-semibold text-xs md:text-sm">Lorem ipsum frigus</h3>
          <p class="text-xs text-gray-700 mb-1">Rp180.000</p>
          <div class="flex items-center justify-between mt-1">
            <div class="flex space-x-1">
              <button class="text-gray-600 hover:text-gray-800">
                <i class="far fa-heart text-xs"></i>
              </button>
              <button class="text-gray-600 hover:text-gray-800">
                <i class="fas fa-shopping-cart text-xs"></i>
              </button>
            </div>
          </div>
        </div>
        
        <!-- Product 4 -->
        <div>
          <div class="aspect-square bg-gray-200 rounded-md mb-2"></div>
          <h3 class="font-semibold text-xs md:text-sm">Lorem ipsum frigus</h3>
          <p class="text-xs text-gray-700 mb-1">Rp225.000</p>
          <div class="flex items-center justify-between mt-1">
            <div class="flex space-x-1">
              <button class="text-gray-600 hover:text-gray-800">
                <i class="far fa-heart text-xs"></i>
              </button>
              <button class="text-gray-600 hover:text-gray-800">
                <i class="fas fa-shopping-cart text-xs"></i>
              </button>
            </div>
          </div>
        </div>
        
        <!-- Product 5 -->
        <div>
          <div class="aspect-square bg-gray-200 rounded-md mb-2"></div>
          <h3 class="font-semibold text-xs md:text-sm">Lorem ipsum frigus</h3>
          <p class="text-xs text-gray-700 mb-1">Rp190.000</p>
          <div class="flex items-center justify-between mt-1">
            <div class="flex space-x-1">
              <button class="text-gray-600 hover:text-gray-800">
                <i class="far fa-heart text-xs"></i>
              </button>
              <button class="text-gray-600 hover:text-gray-800">
                <i class="fas fa-shopping-cart text-xs"></i>
              </button>
            </div>
          </div>
        </div>
        
        <!-- Product 6 -->
        <div>
          <div class="aspect-square bg-gray-200 rounded-md mb-2"></div>
          <h3 class="font-semibold text-xs md:text-sm">Lorem ipsum frigus</h3>
          <p class="text-xs text-gray-700 mb-1">Rp175.000</p>
          <div class="flex items-center justify-between mt-1">
            <div class="flex space-x-1">
              <button class="text-gray-600 hover:text-gray-800">
                <i class="far fa-heart text-xs"></i>
              </button>
              <button class="text-gray-600 hover:text-gray-800">
                <i class="fas fa-shopping-cart text-xs"></i>
              </button>
            </div>
          </div>
        </div>
        
        <!-- Product 7 -->
        <div>
          <div class="aspect-square bg-gray-200 rounded-md mb-2"></div>
          <h3 class="font-semibold text-xs md:text-sm">Lorem ipsum frigus</h3>
          <p class="text-xs text-gray-700 mb-1">Rp210.000</p>
          <div class="flex items-center justify-between mt-1">
            <div class="flex space-x-1">
              <button class="text-gray-600 hover:text-gray-800">
                <i class="far fa-heart text-xs"></i>
              </button>
              <button class="text-gray-600 hover:text-gray-800">
                <i class="fas fa-shopping-cart text-xs"></i>
              </button>
            </div>
          </div>
        </div>
        
        <!-- Product 8 -->
        <div>
          <div class="aspect-square bg-gray-200 rounded-md mb-2"></div>
          <h3 class="font-semibold text-xs md:text-sm">Lorem ipsum frigus</h3>
          <p class="text-xs text-gray-700 mb-1">Rp195.000</p>
          <div class="flex items-center justify-between mt-1">
            <div class="flex space-x-1">
              <button class="text-gray-600 hover:text-gray-800">
                <i class="far fa-heart text-xs"></i>
              </button>
              <button class="text-gray-600 hover:text-gray-800">
                <i class="fas fa-shopping-cart text-xs"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer class="bg-black text-white py-6 px-4">
    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-6">
      <div>
        <h3 class="text-sm font-semibold mb-3">About Us</h3>
        <p class="text-xs text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed ex commodo tempus. Donec ut et vehicula augue.</p>
      </div>
      <div>
        <h3 class="text-sm font-semibold mb-3">Help</h3>
        <ul class="space-y-1">
          <li><a href="#" class="text-xs text-gray-400 hover:text-white">Customer Service</a></li>
          <li><a href="#" class="text-xs text-gray-400 hover:text-white">Accounts</a></li>
          <li><a href="#" class="text-xs text-gray-400 hover:text-white">Return Policy</a></li>
        </ul>
      </div>
      <div>
        <h3 class="text-sm font-semibold mb-3">Contact Us</h3>
        <div class="flex space-x-3 mb-3">
          <a href="#" class="text-white hover:text-gray-300">
            <i class="fab fa-whatsapp text-sm"></i>
          </a>
          <a href="#" class="text-white hover:text-gray-300">
            <i class="fab fa-instagram text-sm"></i>
          </a>
          <a href="#" class="text-white hover:text-gray-300">
            <i class="fab fa-twitter text-sm"></i>
          </a>
        </div>
      </div>
    </div>
    <div class="max-w-6xl mx-auto border-t border-gray-800 mt-4 pt-3 text-center text-xs text-gray-400">
      <p>Copyright © 2025 Ruminix. All rights reserved.</p>
    </div>
  </footer>
</body>
</html>