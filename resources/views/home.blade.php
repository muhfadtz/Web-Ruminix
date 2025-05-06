<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ruminix</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-white text-gray-900">

    <!-- Header -->
    <header class="mt-6 mx-6">
        <div class="bg-gray-100 rounded-xl shadow p-4 flex justify-between items-center">
            <div class="font-bold text-xl">Ruminix</div>
            <nav class="space-x-6">
                <a href="#" class="hover:underline">Home</a>
                <a href="#" class="hover:underline">Product</a>
                <a href="#" class="hover:underline">Shop</a>
                <a href="#" class="hover:underline">Contact</a>
            </nav>
            <div class="space-x-4 text-xl">
                <span>🛒</span>
                <span>👤</span>
            </div>
        </div>

        <!-- Search Bar -->
        <div class="mt-3">
            <input 
                type="text" 
                placeholder="Search..." 
                class="w-full border rounded-full px-5 py-3 shadow focus:outline-none" 
            >
        </div>
    </header>




    <!-- Banner -->
    <section class="bg-gray-200 p-10 text-center mt-4">
        <h1 class="text-4xl font-bold">Lorem Ipsum!</h1>
        <p class="mt-2 text-sm">Lorem Ipsum has been the industry's standard dummy</p>
    </section>

    <!-- Features -->
    <section class="bg-gray-100 py-6 text-center">
        <div class="container mx-auto grid grid-cols-4 gap-4">
            <div>
                <div>🚚</div>
                <p class="font-semibold">Free Delivery</p>
                <p class="text-sm">Free Shipping on all order</p>
            </div>
            <div>
                <div>💳</div>
                <p class="font-semibold">Secure Payment</p>
                <p class="text-sm">Free Shipping on all order</p>
            </div>
            <div>
                <div>🎧</div>
                <p class="font-semibold">24/7 Support</p>
                <p class="text-sm">Free Shipping on all order</p>
            </div>
            <div>
                <div>🔁</div>
                <p class="font-semibold">Return Policy</p>
                <p class="text-sm">Free Shipping on all order</p>
            </div>
        </div>
    </section>

    <!-- Products -->
    <section class="container mx-auto py-8">
        <h2 class="text-2xl font-bold text-center mb-2">Our Product</h2>
        <p class="text-center text-sm mb-6">Lorem ipsum has been the industry's standard dummy</p>
        <div class="grid grid-cols-4 gap-6">
            @for($i = 0; $i < 8; $i++)
                <div class="border p-4 text-center">
                    <div class="bg-gray-200 h-40 mb-2"></div>
                    <p class="font-semibold">Lorem Ipsum Ngawi</p>
                    <p class="text-sm">Rp200.000</p>
                    <div class="mt-2 flex justify-center space-x-4 text-xl">
                        <span>🛒</span>
                        <span>❤️</span>
                    </div>
                </div>
            @endfor
        </div>
    </section>

</body>
</html>
