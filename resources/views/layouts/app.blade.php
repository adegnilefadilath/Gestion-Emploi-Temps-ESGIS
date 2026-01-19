<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESGIS - @yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <nav class="bg-indigo-700 p-4 text-white shadow-lg mb-6">
        <div class="max-w-6xl mx-auto flex justify-between items-center">
            <span class="font-bold text-xl">ESGIS Planning</span>
            <div>
                <a href="/mon-planning" class="px-3 hover:underline">Mon Planning</a>
            </div>
        </div>
    </nav>

    <main class="max-w-6xl mx-auto p-4">
        @yield('content') </main>
</body>
</html>