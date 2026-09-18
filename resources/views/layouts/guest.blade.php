<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gradient-to-br from-slate-900 to-blue-900 text-white">
            <div>
                <a href="/">
                    <img src="{{ asset('img/logo.png') }}" alt="Distribuidora Tecnológica" class="w-24 h-24 shadow-lg rounded-xl">
                </a>
                <h2 class="mt-4 text-center text-3xl font-extrabold text-white">Distribuidora Tecnológica</h2>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-8 bg-white shadow-2xl overflow-hidden sm:rounded-2xl border border-gray-100">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
