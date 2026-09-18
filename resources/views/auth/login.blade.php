<x-guest-layout>
    <x-slot name="title">Iniciar sesión - Distribuidora Tecnológica</x-slot>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="mb-6 text-center">
        <h3 class="text-xl font-semibold text-slate-800">¡Bienvenido de nuevo!</h3>
        <p class="text-sm text-gray-500">Ingresa tus credenciales para acceder al ERP</p>
    </div>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" value="Correo Electrónico" />
            <div class="relative mt-1 rounded-md shadow-sm">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                    </svg>
                </div>
                <x-text-input id="email" class="block w-full pl-10 border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-md" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="admin@distribuidora.com" />
            </div>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-5">
            <x-input-label for="password" value="Contraseña" />
            <div class="relative mt-1 rounded-md shadow-sm">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                </div>
                <x-text-input id="password" class="block w-full pl-10 border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-md"
                                type="password"
                                name="password"
                                required autocomplete="current-password" placeholder="********" />
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="flex items-center justify-between mt-5">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-blue-600 shadow-sm focus:ring-blue-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">Recordarme</span>
            </label>

            @if (Route::has('password.request'))
                <a class="text-sm font-medium text-blue-600 hover:text-blue-500" href="{{ route('password.request') }}">
                    ¿Olvidaste tu contraseña?
                </a>
            @endif
        </div>

        <div class="mt-6">
            <button type="submit" class="w-full flex justify-center py-2.5 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors">
                Iniciar sesión
            </button>
        </div>
        
        @if (Route::has('register'))
        <div class="mt-6 text-center">
            <p class="text-sm text-gray-600">¿No tienes cuenta? 
                <a href="{{ route('register') }}" class="font-medium text-blue-600 hover:text-blue-500">Regístrate aquí</a>
            </p>
        </div>
        @endif
    </form>
</x-guest-layout>
