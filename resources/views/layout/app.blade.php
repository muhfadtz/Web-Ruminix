<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ruminix</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-white font-sans text-gray-900">
    @include('partials.header')
    <main class="mt-4">
        @yield('content')
    </main>
</body>
</html>
