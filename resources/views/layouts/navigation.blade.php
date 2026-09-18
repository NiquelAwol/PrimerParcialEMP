<nav x-data="{ open: false }" class="bg-blue-900 border-b border-blue-800 text-white">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            <div class="flex">
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('panel') }}" class="flex items-center gap-2">
                        <img src="{{ asset('img/logo.png') }}" alt="Logo" class="block h-12 w-auto rounded">
                        <span class="font-bold text-xl tracking-wide hidden sm:block">Distribuidora Tecnológica</span>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-10 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('panel')" :active="request()->routeIs('panel')">
                        Panel principal
                    </x-nav-link>
                    <x-nav-link :href="route('productos.index')" :active="request()->routeIs('productos.*')">
                        Productos
                    </x-nav-link>
                    <x-nav-link :href="route('clientes.index')" :active="request()->routeIs('clientes.*')">
                        Clientes
                    </x-nav-link>
                    <x-nav-link :href="route('ventas.index')" :active="request()->routeIs('ventas.*')">
                        Ventas
                    </x-nav-link>
                    <x-nav-link :href="route('compras.index')" :active="request()->routeIs('compras.*')">
                        Compras
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-4 py-2.5 border border-transparent text-base font-medium rounded-md text-white bg-blue-800 hover:bg-blue-700 focus:outline-none transition ease-in-out duration-150">
                            <img class="h-9 w-9 rounded-full object-cover mr-3 border-2 border-blue-400" src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=0D8ABC&color=fff" alt="{{ Auth::user()->name }}" />
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            Mi Perfil
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                Cerrar Sesión
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-blue-800 focus:outline-none focus:bg-blue-800 focus:text-white transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden bg-blue-900 border-t border-blue-800">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('panel')" :active="request()->routeIs('panel')">
                Panel principal
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('productos.index')" :active="request()->routeIs('productos.*')">
                Productos
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('clientes.index')" :active="request()->routeIs('clientes.*')">
                Clientes
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('ventas.index')" :active="request()->routeIs('ventas.*')">
                Ventas
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('compras.index')" :active="request()->routeIs('compras.*')">
                Compras
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-blue-800">
            <div class="px-4">
                <div class="font-medium text-base text-white">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-blue-200">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    Mi Perfil
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        Cerrar Sesión
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
