<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    @vite('resources/css/app.css')
    <!-- Font Awesome for Google icon -->
    <script src="https://kit.fontawesome.com/9c2ca1d73f.js" crossorigin="anonymous"></script>
</head>

<body class="min-h-screen flex items-center justify-center font-sans px-4 sm:px-6 lg:px-8">
    <div class="w-full max-w-md mx-auto mt-10">
        <!-- Header -->
        <h1 class="text-4xl font-bold text-center mb-10">Ruminix</h1>

        <!-- Form Section -->
        <div class="mb-6">
            <h2 class="text-2xl font-bold">Sign Up</h2>
            <p class="text-sm text-gray-600">
                Have an account?
                <a href="/login" class="text-blue-600 hover:underline">Sign In</a>
            </p>
        </div>

        <!-- Google Sign Up Button -->
        <div class="mb-6">
            <a href="{{ route('google.redirect') }}"
               class="flex items-center justify-center gap-2 w-full px-4 py-3 border border-gray-300 rounded-md text-sm font-medium hover:bg-gray-100 transition">
                <i class="fab fa-google text-red-500"></i> Sign Up with Google
            </a>
        </div>

        <!-- Divider -->
        <div class="flex items-center justify-center mb-4">
            <div class="border-t border-gray-300 w-full"></div>
            <span class="mx-2 text-gray-500 text-sm">or</span>
            <div class="border-t border-gray-300 w-full"></div>
        </div>

        <!-- Form -->
        <form action="/signup" method="POST" class="space-y-4">
            @csrf
            <input type="text" name="name" placeholder="Full Name" required
                class="w-full px-4 py-3 bg-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" />

            <input type="email" name="email" placeholder="Email Address" required
                class="w-full px-4 py-3 bg-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" />

            <input type="password" name="password" placeholder="Password" required
                class="w-full px-4 py-3 bg-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" />

            <input type="password" name="password_confirmation" placeholder="Confirm Password" required
                class="w-full px-4 py-3 bg-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" />

            <div class="flex justify-center pt-4">
                <button type="submit"
                    class="w-full bg-gray-300 text-black px-8 py-2 rounded-md font-semibold hover:bg-gray-400 transition">
                    Sign Up
                </button>
            </div>
        </form>
    </div>
</body>
</html>
