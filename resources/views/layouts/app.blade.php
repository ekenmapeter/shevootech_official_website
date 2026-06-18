<?php
/**
 * resources/views/layouts/app.blade.php
 *
 * Master layout using Tailwind CSS, dark mode, and a responsive navigation bar.
 */
?>
<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-50 dark:bg-gray-900 transition-colors">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        /* Custom gradient background for premium feel */
        body {
            background: linear-gradient(135deg, hsl(215, 20%, 98%), hsl(215, 30%, 94%));
        }
        @media (prefers-color-scheme: dark) {
            body { background: linear-gradient(135deg, hsl(215, 20%, 14%), hsl(215, 30%, 10%)); }
        }
    </style>
</head>
<body class="font-sans antialiased flex flex-col min-h-screen">
    <header class="bg-white dark:bg-gray-800 shadow-md">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between h-16">
            <div class="flex items-center space-x-4">
                <a href="{{ url('/') }}" class="text-xl font-semibold text-gray-900 dark:text-white">
                    {{ config('app.name') }}
                </a>
                <a href="{{ route('services.index') }}" class="text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white">Services</a>
                <a href="{{ route('portfolio.index') }}" class="text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white">Portfolio</a>
                <a href="{{ route('blog.index') }}" class="text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white">Blog</a>
                <a href="{{ route('tools.index') }}" class="text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white">Tools</a>
                <a href="{{ route('store.index') }}" class="text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white">Store</a>
            </div>
            <div>
                @auth
                <a href="{{ route('dashboard') }}" class="px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-500">Dashboard</a>
                @else
                <a href="{{ route('login') }}" class="px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-500">Login</a>
                @endauth
            </div>
        </nav>
    </header>

    <main class="flex-grow container mx-auto px-4 py-8">
        @yield('content')
    </main>

    <footer class="bg-gray-100 dark:bg-gray-800 py-4 text-center text-gray-600 dark:text-gray-400">
        &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
    </footer>
</body>
</html>
