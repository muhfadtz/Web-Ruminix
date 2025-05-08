<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Penting -->
    <title>Sign In - Ruminix</title>
    @vite('resources/css/app.css')
    <script src="https://kit.fontawesome.com/9c2ca1d73f.js" crossorigin="anonymous"></script>
</head>
<body class="min-h-screen flex items-center justify-center font-sans px-4 sm:px-6 lg:px-8">
    <div class="w-full max-w-md mx-auto mt-10">
        <h1 class="text-3xl font-bold text-center mb-8">Ruminix</h1>
        
        <div class="rounded-lg p-6">
            <h2 class="text-xl font-semibold mb-2">Sign In</h2>
            <p class="text-sm mb-4">
                Don't have an account? 
                <a href="/signup" class="text-blue-600 hover:underline">Sign up</a>
            </p>

            <form method="POST" action="/login" class="space-y-4">
                @csrf
                <div>
                    <input 
                        type="email" 
                        name="email" 
                        placeholder="Email Address"
                        class="w-full px-4 py-2 rounded bg-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required
                    >
                </div>
                <div>
                    <input 
                        type="password" 
                        name="password" 
                        placeholder="Password"
                        class="w-full px-4 py-2 rounded bg-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required
                    >
                    <div class="text-right mt-1">
                        <a href="/forgot-password" class="text-xs text-blue-600 hover:underline">Forgot Password</a>
                    </div>
                </div>
                <div>
                    <button 
                        type="submit"
                        class="w-full py-2 rounded bg-gray-300 hover:bg-gray-400 text-center font-semibold"
                    >
                        Sign In
                    </button>
                </div>
                <div class="mb-6">
                    <a href="{{ route('google.redirect') }}"
                    class="flex items-center justify-center gap-2 w-full px-4 py-3 border border-gray-300 rounded-md text-sm font-medium hover:bg-gray-100 transition">
                        <i class="fab fa-google text-red-500"></i> Sign In with Google
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
