<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Ruminix</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white min-h-screen flex items-center justify-center font-sans">

    <div class="w-full max-w-sm px-6">
        <!-- Title -->
        <h1 class="text-2xl font-bold text-center mb-6">Ruminix</h1>

        <!-- Header -->
        <h2 class="text-xl font-semibold mb-1">Sign Up</h2>
        <p class="text-sm mb-4">
            Have an account? 
            <a href="/login" class="text-blue-600 hover:underline">Sign In</a>
        </p>

        <!-- Sign Up Form -->
        <form method="POST" action="/register" class="space-y-4">
            @csrf

            <!-- Email -->
            <div>
                <input 
                    type="email" 
                    name="email" 
                    placeholder="Email Address"
                    required
                    class="w-full px-4 py-2 rounded bg-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500"
                >
            </div>

            <!-- Password -->
            <div>
                <input 
                    type="password" 
                    name="password" 
                    placeholder="Password"
                    required
                    class="w-full px-4 py-2 rounded bg-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500"
                >
            </div>

            <!-- Confirm Password -->
            <div>
                <input 
                    type="password" 
                    name="password_confirmation" 
                    placeholder="Confirm Password"
                    required
                    class="w-full px-4 py-2 rounded bg-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500"
                >
            </div>

            <!-- Submit -->
            <div>
                <button 
                    type="submit"
                    class="w-full py-2 rounded bg-gray-300 hover:bg-gray-400 text-center font-semibold"
                >
                    Sign Up
                </button>
            </div>
        </form>
    </div>

</body>
</html>
