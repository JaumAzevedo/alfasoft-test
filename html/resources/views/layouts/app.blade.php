<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Contact Management')</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="font-sans antialiased bg-gray-100">
    <div class="min-h-screen flex flex-col">
        <!-- Navigation -->
        <header class="bg-indigo-600 text-white shadow-md">
            <div class="max-w-7xl mx-auto px-6 py-4">
                <div class="flex justify-between items-center">
                    <h1 class="text-3xl font-semibold">Contact Management</h1>
                    <nav>
                        <a href="{{ route('contacts.index') }}" class="px-4 py-2 rounded bg-indigo-500 hover:bg-indigo-700">Contacts</a>
                    </nav>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main class="flex-grow">
            <div class="max-w-7xl mx-auto px-6 py-8">
                @yield('content')
            </div>
        </main>

        <!-- Footer -->
        <footer class="bg-gray-800 text-white py-4">
            <div class="max-w-7xl mx-auto text-center">
                <p>&copy; {{ date('Y') }} Contact Management. All rights reserved.</p>
            </div>
        </footer>
    </div>
</body>
</html>
