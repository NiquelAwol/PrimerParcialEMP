<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-slate-800 leading-tight">
            Panel de Control
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl border border-gray-100">
                <div class="p-8 text-gray-900">
                    <h1 class="text-3xl font-extrabold text-slate-800 tracking-tight">¡Bienvenido, {{ auth()->user()->name }}!</h1>
                    <p class="text-gray-500 mt-2 text-base">ERP Distribuidora Tecnológica - Resumen de Operaciones</p>
                </div>
            </div>

            <!-- KPIs -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8">
                <!-- Tarjeta 1 -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl border-l-4 border-blue-500 hover:shadow-md transition duration-150">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-blue-50 rounded-lg p-3">
                                <svg class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                                </svg>
                            </div>
                            <div class="ml-5 w-0 flex-1">
                                <dl>
                                    <dt class="text-base font-medium text-gray-500 truncate">Total de Productos</dt>
                                    <dd class="text-3xl font-bold text-gray-900 mt-1">{{ number_format($totalProducts) }}</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tarjeta 2 -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl border-l-4 border-green-500 hover:shadow-md transition duration-150">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-green-50 rounded-lg p-3">
                                <svg class="h-8 w-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                            </div>
                            <div class="ml-5 w-0 flex-1">
                                <dl>
                                    <dt class="text-base font-medium text-gray-500 truncate">Total de Clientes</dt>
                                    <dd class="text-3xl font-bold text-gray-900 mt-1">{{ number_format($totalClients) }}</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tarjeta 3 -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl border-l-4 border-purple-500 hover:shadow-md transition duration-150">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-purple-50 rounded-lg p-3">
                                <svg class="h-8 w-8 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div class="ml-5 w-0 flex-1">
                                <dl>
                                    <dt class="text-base font-medium text-gray-500 truncate">Ventas del Día</dt>
                                    <dd class="text-3xl font-bold text-gray-900 mt-1">${{ number_format($todaySales, 0, ',', '.') }}</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tarjeta 4 -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl border-l-4 border-red-500 hover:shadow-md transition duration-150">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-red-50 rounded-lg p-3">
                                <svg class="h-8 w-8 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                </svg>
                            </div>
                            <div class="ml-5 w-0 flex-1">
                                <dl>
                                    <dt class="text-base font-medium text-gray-500 truncate">Bajo Stock</dt>
                                    <dd class="text-3xl font-bold text-gray-900 mt-1">{{ $lowStock }}</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</x-app-layout>
