<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-slate-800 leading-tight">
            {{ __('Editar Cliente') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-8 text-gray-900">
                    <form method="POST" action="{{ route('clientes.update', $cliente->id) }}" class="space-y-6 max-w-2xl">
                        @csrf
                        @method('PUT')
                        
                        <!-- Empresa -->
                        <div>
                            <x-input-label for="empresa" :value="__('Empresa')" />
                            <x-text-input id="empresa" class="block mt-1 w-full" type="text" name="empresa" :value="old('empresa', $cliente->empresa)" required autofocus />
                            <x-input-error :messages="$errors->get('empresa')" class="mt-2" />
                        </div>

                        <!-- NIT -->
                        <div>
                            <x-input-label for="nit" :value="__('NIT')" />
                            <x-text-input id="nit" class="block mt-1 w-full" type="text" name="nit" :value="old('nit', $cliente->nit)" required />
                            <x-input-error :messages="$errors->get('nit')" class="mt-2" />
                        </div>

                        <!-- Correo -->
                        <div>
                            <x-input-label for="correo" :value="__('Correo Electrónico')" />
                            <x-text-input id="correo" class="block mt-1 w-full" type="email" name="correo" :value="old('correo', $cliente->correo)" required />
                            <x-input-error :messages="$errors->get('correo')" class="mt-2" />
                        </div>

                        <!-- Teléfono -->
                        <div>
                            <x-input-label for="telefono" :value="__('Teléfono')" />
                            <x-text-input id="telefono" class="block mt-1 w-full" type="text" name="telefono" :value="old('telefono', $cliente->telefono)" required />
                            <x-input-error :messages="$errors->get('telefono')" class="mt-2" />
                        </div>

                        <!-- Ciudad -->
                        <div>
                            <x-input-label for="ciudad" :value="__('Ciudad')" />
                            <x-text-input id="ciudad" class="block mt-1 w-full" type="text" name="ciudad" :value="old('ciudad', $cliente->ciudad)" required />
                            <x-input-error :messages="$errors->get('ciudad')" class="mt-2" />
                        </div>

                        <div class="flex items-center gap-4 pt-4">
                            <x-primary-button class="bg-blue-600 hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-800">
                                {{ __('Actualizar Cliente') }}
                            </x-primary-button>
                            <a href="{{ route('clientes.index') }}" class="text-sm text-gray-600 hover:text-gray-900 underline">
                                {{ __('Cancelar') }}
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
