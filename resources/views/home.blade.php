<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home - Ruminix</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <script src="https://kit.fontawesome.com/9c2ca1d73f.js" crossorigin="anonymous"></script>
</head>
<main class="bg-white font-sans min-h-screen relative">

<!-- Floating Navbar -->
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
      class="w-full pl-10 pr-4 py-2 focus:outline-none"
    />
  </div>
</div>





  <section class="max-w-6xl mx-auto mb-6 mt-36">
    <div class="swiper hero-swiper rounded-lg overflow-hidden">
        <div class="swiper-wrapper flex">
            
            <!-- Slide 1 -->
            <div class="swiper-slide shrink-0 w-full bg-gray-100 px-8 py-10 md:py-16">
                <div class="flex flex-col md:flex-row items-center">
                <div class="w-full md:w-1/2 mb-6 md:mb-0">
                    <h1 class="text-3xl md:text-4xl font-bold mb-4">Lorem ipsum!</h1>
                    <p class="text-base md:text-lg text-gray-600 mb-6">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                    <button class="bg-black text-white px-6 py-3 rounded text-base hover:bg-gray-800">
                    Shop Now
                    </button>
                </div>
                <div class="w-full md:w-1/2 flex justify-center">
                    <div class="bg-white h-48 w-full md:h-64 md:w-4/5 rounded-lg shadow-sm"></div>
                </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="swiper-slide shrink-0 w-full bg-gray-100 px-8 py-10 md:py-16">
                <div class="flex flex-col md:flex-row items-center">
                <div class="w-full md:w-1/2 mb-6 md:mb-0">
                    <h1 class="text-3xl md:text-4xl font-bold mb-4">Ruminix Deals</h1>
                    <p class="text-base md:text-lg text-gray-600 mb-6">
                    Nikmati penawaran terbaik hari ini hanya di Ruminix Store.
                    </p>
                    <button class="bg-black text-white px-6 py-3 rounded text-base hover:bg-gray-800">
                    Lihat Produk
                    </button>
                </div>
                <div class="w-full md:w-1/2 flex justify-center">
                    <div class="bg-white h-48 w-full md:h-64 md:w-4/5 rounded-lg shadow-sm"></div>
                </div>
                </div>
            </div>

            </div>

            <!-- Controls -->
            <div class="swiper-pagination"></div>
         
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
          <div class="p-2">
          <a href="/product-detail" class="block hover:bg-gray-50 transition rounded-md p-2">
          <!-- Image Placeholder -->
          <div class="aspect-square bg-gray-200 rounded-md mb-2"></div>

          <!-- Product Title -->
          <h3 class="font-semibold text-xs md:text-sm">Lorem ipsum frigus</h3>

          <!-- Product Price -->
          <p class="text-xs text-gray-700 mb-2">Rp200.000</p>

          <!-- Action Buttons -->
          <div class="flex items-center space-x-2">

            <!-- Wishlist Button -->
            <div class="group flex items-center cursor-pointer">
              <div class="w-9 h-9 rounded-full bg-gray-400 flex items-center justify-center">
                <i class="far fa-heart text-white text-base"></i>
              </div>
              <span class="ml-0 overflow-hidden max-w-0 group-hover:ml-2 group-hover:max-w-[100px] transition-all duration-300 text-sm text-gray-700 whitespace-nowrap opacity-0 group-hover:opacity-100">
                Wishlist
              </span>
          </div>

              <!-- Add to Bag Button -->
              <div class="group flex items-center cursor-pointer">
                <div class="w-9 h-9 rounded-full bg-gray-400 flex items-center justify-center">
                  <i class="fas fa-shopping-bag text-white text-base"></i>
                </div>
                <span class="ml-0 overflow-hidden max-w-0 group-hover:ml-2 group-hover:max-w-[100px] transition-all duration-300 text-sm text-gray-700 whitespace-nowrap opacity-0 group-hover:opacity-100">
                  Add to Bag
                </span>
              </div>

            </div>
          </a>
        </div>
        
        <!-- Product 2 -->
        <div class="p-2">
          <a href="/product-detail" class="block hover:bg-gray-50 transition rounded-md p-2">
          <!-- Image Placeholder -->
          <div class="aspect-square bg-gray-200 rounded-md mb-2"></div>

          <!-- Product Title -->
          <h3 class="font-semibold text-xs md:text-sm">Lorem ipsum frigus</h3>

          <!-- Product Price -->
          <p class="text-xs text-gray-700 mb-2">Rp200.000</p>

          <!-- Action Buttons -->
          <div class="flex items-center space-x-2">

            <!-- Wishlist Button -->
            <div class="group flex items-center cursor-pointer">
              <div class="w-9 h-9 rounded-full bg-gray-400 flex items-center justify-center">
                <i class="far fa-heart text-white text-base"></i>
              </div>
              <span class="ml-0 overflow-hidden max-w-0 group-hover:ml-2 group-hover:max-w-[100px] transition-all duration-300 text-sm text-gray-700 whitespace-nowrap opacity-0 group-hover:opacity-100">
                Wishlist
              </span>
          </div>

              <!-- Add to Bag Button -->
              <div class="group flex items-center cursor-pointer">
                <div class="w-9 h-9 rounded-full bg-gray-400 flex items-center justify-center">
                  <i class="fas fa-shopping-bag text-white text-base"></i>
                </div>
                <span class="ml-0 overflow-hidden max-w-0 group-hover:ml-2 group-hover:max-w-[100px] transition-all duration-300 text-sm text-gray-700 whitespace-nowrap opacity-0 group-hover:opacity-100">
                  Add to Bag
                </span>
              </div>

            </div>
          </a>
        </div>
        
        <!-- Product 3 -->
        <div class="p-2">
          <a href="/product-detail" class="block hover:bg-gray-50 transition rounded-md p-2">
          <!-- Image Placeholder -->
          <div class="aspect-square bg-gray-200 rounded-md mb-2"></div>

          <!-- Product Title -->
          <h3 class="font-semibold text-xs md:text-sm">Lorem ipsum frigus</h3>

          <!-- Product Price -->
          <p class="text-xs text-gray-700 mb-2">Rp200.000</p>

          <!-- Action Buttons -->
          <div class="flex items-center space-x-2">

            <!-- Wishlist Button -->
            <div class="group flex items-center cursor-pointer">
              <div class="w-9 h-9 rounded-full bg-gray-400 flex items-center justify-center">
                <i class="far fa-heart text-white text-base"></i>
              </div>
              <span class="ml-0 overflow-hidden max-w-0 group-hover:ml-2 group-hover:max-w-[100px] transition-all duration-300 text-sm text-gray-700 whitespace-nowrap opacity-0 group-hover:opacity-100">
                Wishlist
              </span>
          </div>

              <!-- Add to Bag Button -->
              <div class="group flex items-center cursor-pointer">
                <div class="w-9 h-9 rounded-full bg-gray-400 flex items-center justify-center">
                  <i class="fas fa-shopping-bag text-white text-base"></i>
                </div>
                <span class="ml-0 overflow-hidden max-w-0 group-hover:ml-2 group-hover:max-w-[100px] transition-all duration-300 text-sm text-gray-700 whitespace-nowrap opacity-0 group-hover:opacity-100">
                  Add to Bag
                </span>
              </div>

            </div>
          </a>
        </div>
        
        <!-- Product 4 -->
        <div class="p-2">
          <a href="/product-detail" class="block hover:bg-gray-50 transition rounded-md p-2">
          <!-- Image Placeholder -->
          <div class="aspect-square bg-gray-200 rounded-md mb-2"></div>

          <!-- Product Title -->
          <h3 class="font-semibold text-xs md:text-sm">Lorem ipsum frigus</h3>

          <!-- Product Price -->
          <p class="text-xs text-gray-700 mb-2">Rp200.000</p>

          <!-- Action Buttons -->
          <div class="flex items-center space-x-2">

            <!-- Wishlist Button -->
            <div class="group flex items-center cursor-pointer">
              <div class="w-9 h-9 rounded-full bg-gray-400 flex items-center justify-center">
                <i class="far fa-heart text-white text-base"></i>
              </div>
              <span class="ml-0 overflow-hidden max-w-0 group-hover:ml-2 group-hover:max-w-[100px] transition-all duration-300 text-sm text-gray-700 whitespace-nowrap opacity-0 group-hover:opacity-100">
                Wishlist
              </span>
          </div>

              <!-- Add to Bag Button -->
              <div class="group flex items-center cursor-pointer">
                <div class="w-9 h-9 rounded-full bg-gray-400 flex items-center justify-center">
                  <i class="fas fa-shopping-bag text-white text-base"></i>
                </div>
                <span class="ml-0 overflow-hidden max-w-0 group-hover:ml-2 group-hover:max-w-[100px] transition-all duration-300 text-sm text-gray-700 whitespace-nowrap opacity-0 group-hover:opacity-100">
                  Add to Bag
                </span>
              </div>

            </div>
          </a>
        </div>
        
        <!-- Product 5 -->
        <div class="p-2">
          <a href="/product-detail" class="block hover:bg-gray-50 transition rounded-md p-2">
          <!-- Image Placeholder -->
          <div class="aspect-square bg-gray-200 rounded-md mb-2"></div>

          <!-- Product Title -->
          <h3 class="font-semibold text-xs md:text-sm">Lorem ipsum frigus</h3>

          <!-- Product Price -->
          <p class="text-xs text-gray-700 mb-2">Rp200.000</p>

          <!-- Action Buttons -->
          <div class="flex items-center space-x-2">

            <!-- Wishlist Button -->
            <div class="group flex items-center cursor-pointer">
              <div class="w-9 h-9 rounded-full bg-gray-400 flex items-center justify-center">
                <i class="far fa-heart text-white text-base"></i>
              </div>
              <span class="ml-0 overflow-hidden max-w-0 group-hover:ml-2 group-hover:max-w-[100px] transition-all duration-300 text-sm text-gray-700 whitespace-nowrap opacity-0 group-hover:opacity-100">
                Wishlist
              </span>
          </div>

              <!-- Add to Bag Button -->
              <div class="group flex items-center cursor-pointer">
                <div class="w-9 h-9 rounded-full bg-gray-400 flex items-center justify-center">
                  <i class="fas fa-shopping-bag text-white text-base"></i>
                </div>
                <span class="ml-0 overflow-hidden max-w-0 group-hover:ml-2 group-hover:max-w-[100px] transition-all duration-300 text-sm text-gray-700 whitespace-nowrap opacity-0 group-hover:opacity-100">
                  Add to Bag
                </span>
              </div>

            </div>
          </a>
        </div>
        <!-- Product 6 -->
        <div class="p-2">
          <a href="/product-detail" class="block hover:bg-gray-50 transition rounded-md p-2">
          <!-- Image Placeholder -->
          <div class="aspect-square bg-gray-200 rounded-md mb-2"></div>

          <!-- Product Title -->
          <h3 class="font-semibold text-xs md:text-sm">Lorem ipsum frigus</h3>

          <!-- Product Price -->
          <p class="text-xs text-gray-700 mb-2">Rp200.000</p>

          <!-- Action Buttons -->
          <div class="flex items-center space-x-2">

            <!-- Wishlist Button -->
            <div class="group flex items-center cursor-pointer">
              <div class="w-9 h-9 rounded-full bg-gray-400 flex items-center justify-center">
                <i class="far fa-heart text-white text-base"></i>
              </div>
              <span class="ml-0 overflow-hidden max-w-0 group-hover:ml-2 group-hover:max-w-[100px] transition-all duration-300 text-sm text-gray-700 whitespace-nowrap opacity-0 group-hover:opacity-100">
                Wishlist
              </span>
          </div>

              <!-- Add to Bag Button -->
              <div class="group flex items-center cursor-pointer">
                <div class="w-9 h-9 rounded-full bg-gray-400 flex items-center justify-center">
                  <i class="fas fa-shopping-bag text-white text-base"></i>
                </div>
                <span class="ml-0 overflow-hidden max-w-0 group-hover:ml-2 group-hover:max-w-[100px] transition-all duration-300 text-sm text-gray-700 whitespace-nowrap opacity-0 group-hover:opacity-100">
                  Add to Bag
                </span>
              </div>

            </div>
          </a>
        </div>
        
        <!-- Product 7 -->
        <div class="p-2">
          <a href="/product-detail" class="block hover:bg-gray-50 transition rounded-md p-2">
          <!-- Image Placeholder -->
          <div class="aspect-square bg-gray-200 rounded-md mb-2"></div>

          <!-- Product Title -->
          <h3 class="font-semibold text-xs md:text-sm">Lorem ipsum frigus</h3>

          <!-- Product Price -->
          <p class="text-xs text-gray-700 mb-2">Rp200.000</p>

          <!-- Action Buttons -->
          <div class="flex items-center space-x-2">

            <!-- Wishlist Button -->
            <div class="group flex items-center cursor-pointer">
              <div class="w-9 h-9 rounded-full bg-gray-400 flex items-center justify-center">
                <i class="far fa-heart text-white text-base"></i>
              </div>
              <span class="ml-0 overflow-hidden max-w-0 group-hover:ml-2 group-hover:max-w-[100px] transition-all duration-300 text-sm text-gray-700 whitespace-nowrap opacity-0 group-hover:opacity-100">
                Wishlist
              </span>
          </div>

              <!-- Add to Bag Button -->
              <div class="group flex items-center cursor-pointer">
                <div class="w-9 h-9 rounded-full bg-gray-400 flex items-center justify-center">
                  <i class="fas fa-shopping-bag text-white text-base"></i>
                </div>
                <span class="ml-0 overflow-hidden max-w-0 group-hover:ml-2 group-hover:max-w-[100px] transition-all duration-300 text-sm text-gray-700 whitespace-nowrap opacity-0 group-hover:opacity-100">
                  Add to Bag
                </span>
              </div>

            </div>
          </a>
        </div>
        
        <!-- Product 8 -->
        <div class="p-2">
          <a href="/product-detail" class="block hover:bg-gray-50 transition rounded-md p-2">
          <!-- Image Placeholder -->
          <div class="aspect-square bg-gray-200 rounded-md mb-2"></div>

          <!-- Product Title -->
          <h3 class="font-semibold text-xs md:text-sm">Lorem ipsum frigus</h3>

          <!-- Product Price -->
          <p class="text-xs text-gray-700 mb-2">Rp200.000</p>

          <!-- Action Buttons -->
          <div class="flex items-center space-x-2">

            <!-- Wishlist Button -->
            <div class="group flex items-center cursor-pointer">
              <div class="w-9 h-9 rounded-full bg-gray-400 flex items-center justify-center">
                <i class="far fa-heart text-white text-base"></i>
              </div>
              <span class="ml-0 overflow-hidden max-w-0 group-hover:ml-2 group-hover:max-w-[100px] transition-all duration-300 text-sm text-gray-700 whitespace-nowrap opacity-0 group-hover:opacity-100">
                Wishlist
              </span>
          </div>

              <!-- Add to Bag Button -->
              <div class="group flex items-center cursor-pointer">
                <div class="w-9 h-9 rounded-full bg-gray-400 flex items-center justify-center">
                  <i class="fas fa-shopping-bag text-white text-base"></i>
                </div>
                <span class="ml-0 overflow-hidden max-w-0 group-hover:ml-2 group-hover:max-w-[100px] transition-all duration-300 text-sm text-gray-700 whitespace-nowrap opacity-0 group-hover:opacity-100">
                  Add to Bag
                </span>
              </div>

            </div>
          </a>
        </div>
              
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
