<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-slate-800 leading-tight">
            {{ __('Editar Producto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-8 text-gray-900">
                    <form method="POST" action="{{ route('productos.update', $producto->id) }}" class="space-y-6 max-w-2xl">
                        @csrf
                        @method('PUT')
                        
                        <!-- Nombre del Producto -->
                        <div>
                            <x-input-label for="nombre" :value="__('Nombre del Producto')" />
                            <x-text-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre', $producto->nombre)" required autofocus />
                            <x-input-error :messages="$errors->get('nombre')" class="mt-2" />
                        </div>

                        <!-- Descripción -->
                        <div>
                            <x-input-label for="descripcion" :value="__('Descripción')" />
                            <textarea id="descripcion" name="descripcion" rows="3" class="block mt-1 w-full border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm">{{ old('descripcion', $producto->descripcion) }}</textarea>
                            <x-input-error :messages="$errors->get('descripcion')" class="mt-2" />
                        </div>

                        <!-- Precio -->
                        <div>
                            <x-input-label for="precio" :value="__('Precio')" />
                            <div class="relative mt-1 rounded-md shadow-sm">
                                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                    <span class="text-gray-500 sm:text-sm">$</span>
                                </div>
                                <x-text-input id="precio" class="block w-full pl-7" type="number" step="0.01" name="precio" :value="old('precio', $producto->precio)" required />
                            </div>
                            <x-input-error :messages="$errors->get('precio')" class="mt-2" />
                        </div>

                        <!-- Stock -->
                        <div>
                            <x-input-label for="stock" :value="__('Stock')" />
                            <x-text-input id="stock" class="block mt-1 w-full" type="number" name="stock" :value="old('stock', $producto->stock)" required />
                            <x-input-error :messages="$errors->get('stock')" class="mt-2" />
                        </div>

                        <div class="flex items-center gap-4 pt-4">
                            <x-primary-button class="bg-blue-600 hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-800">
                                {{ __('Actualizar Producto') }}
                            </x-primary-button>
                            <a href="{{ route('productos.index') }}" class="text-sm text-gray-600 hover:text-gray-900 underline">
                                {{ __('Cancelar') }}
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
