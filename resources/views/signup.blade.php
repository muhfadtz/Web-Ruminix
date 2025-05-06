<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-white font-sans">
    <div class="w-full max-w-md px-8 mt-45 mx-auto">
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

        <!-- Form -->
        <form action="/signup" method="POST" class="space-y-4">
            @csrf

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
