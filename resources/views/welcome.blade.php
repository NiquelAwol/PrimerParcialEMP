<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Distribuidora Tecnológica - ERP</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800&display=swap" rel="stylesheet" />
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased font-sans bg-slate-50 text-slate-800">
        <div class="min-h-screen flex flex-col relative overflow-hidden">
            <!-- Background Decoration -->
            <div class="absolute inset-0 z-0 overflow-hidden pointer-events-none">
                <div class="absolute -top-[30%] -right-[10%] w-[70%] h-[70%] rounded-full bg-blue-100/50 blur-3xl"></div>
                <div class="absolute -bottom-[20%] -left-[10%] w-[60%] h-[60%] rounded-full bg-blue-50/50 blur-3xl"></div>
            </div>

            <!-- Navbar -->
            <nav class="relative z-10 bg-white/80 backdrop-blur-md border-b border-gray-100">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-20 items-center">
                        <div class="flex items-center gap-3">
                            <img src="{{ asset('img/logo.png') }}" alt="Logo" class="h-12 w-auto shadow-sm rounded-lg">
                            <span class="font-extrabold text-2xl text-blue-900 tracking-tight">Distribuidora Tecnológica</span>
                        </div>
                        <div class="flex items-center gap-4">
                            @if (Route::has('login'))
                                @auth
                                    <a href="{{ route('panel') }}" class="text-sm font-semibold text-gray-700 hover:text-blue-600 transition">Panel de Control</a>
                                @else
                                    <a href="{{ route('login') }}" class="text-sm font-semibold text-gray-700 hover:text-blue-600 transition">Iniciar Sesión</a>
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="inline-flex items-center justify-center px-5 py-2.5 border border-transparent text-sm font-medium rounded-lg text-white bg-blue-600 hover:bg-blue-700 shadow-md hover:shadow-lg transition-all">Registrarse</a>
                                    @endif
                                @endauth
                            @endif
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Hero Section -->
            <main class="relative z-10 flex-grow flex items-center justify-center pt-10 pb-20">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                    <h1 class="text-5xl md:text-6xl font-extrabold text-slate-900 tracking-tight mb-6">
                        Gestión Inteligente para tu <span class="text-blue-600">Negocio</span>
                    </h1>
                    <p class="mt-4 max-w-2xl text-xl text-gray-600 mx-auto mb-10">
                        El sistema ERP diseñado para optimizar el control de productos, clientes, compras y ventas de tu distribuidora. Todo en un solo lugar.
                    </p>
                    
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ route('panel') }}" class="inline-flex items-center justify-center px-8 py-3.5 border border-transparent text-base font-semibold rounded-xl text-white bg-blue-600 hover:bg-blue-700 shadow-lg shadow-blue-500/30 transition-all hover:-translate-y-0.5">
                                    Ir al Panel de Control
                                </a>
                            @else
                                <a href="{{ route('login') }}" class="inline-flex items-center justify-center px-8 py-3.5 border border-transparent text-base font-semibold rounded-xl text-white bg-blue-600 hover:bg-blue-700 shadow-lg shadow-blue-500/30 transition-all hover:-translate-y-0.5">
                                    Iniciar Sesión
                                </a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="inline-flex items-center justify-center px-8 py-3.5 border border-gray-300 text-base font-semibold rounded-xl text-slate-700 bg-white hover:bg-gray-50 shadow-sm transition-all hover:-translate-y-0.5">
                                        Crear Cuenta
                                    </a>
                                @endif
                            @endauth
                        @endif
                    </div>

                    <!-- Features Grid -->
                    <div class="mt-24 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3 text-left">
                        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition">
                            <div class="w-12 h-12 inline-flex items-center justify-center rounded-xl bg-blue-100 text-blue-600 mb-4">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Control de Inventario</h3>
                            <p class="text-gray-600">Administra tus productos, categorías y stock en tiempo real con precisión milimétrica.</p>
                        </div>
                        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition">
                            <div class="w-12 h-12 inline-flex items-center justify-center rounded-xl bg-green-100 text-green-600 mb-4">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Gestión de Clientes</h3>
                            <p class="text-gray-600">Mantén un registro organizado de tus clientes y sus historiales de compras.</p>
                        </div>
                        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition">
                            <div class="w-12 h-12 inline-flex items-center justify-center rounded-xl bg-purple-100 text-purple-600 mb-4">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Ventas y Reportes</h3>
                            <p class="text-gray-600">Registra tus ventas y accede a métricas clave para la toma de decisiones.</p>
                        </div>
                    </div>
                </div>
            </main>

            <!-- Footer -->
            <footer class="relative z-10 bg-white border-t border-gray-200 mt-auto py-8">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row justify-between items-center text-sm text-gray-500">
                    <div class="mb-4 md:mb-0">
                        &copy; {{ date('Y') }} Distribuidora Tecnológica ERP. Todos los derechos reservados.
                    </div>
                    <div class="flex gap-4">
                        <a href="/" class="hover:text-blue-600 transition">Soporte</a>
                        <a href="/" class="hover:text-blue-600 transition">Términos</a>
                        <a href="/" class="hover:text-blue-600 transition">Privacidad</a>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>
