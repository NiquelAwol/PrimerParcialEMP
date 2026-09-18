<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-bold text-2xl text-slate-800 leading-tight">
                {{ __('Detalle de Venta') }} - {{ $venta->numero_venta }}
            </h2>
            <a href="{{ route('ventas.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                {{ __('Volver') }}
            </a>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <!-- Información General -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl border border-gray-100 p-8">
                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <h3 class="text-sm font-semibold text-gray-500 uppercase">Cliente</h3>
                        <p class="text-lg text-gray-900 font-bold mt-1">{{ $venta->client->empresa }}</p>
                        <p class="text-sm text-gray-600">NIT: {{ $venta->client->nit }}</p>
                    </div>
                    <div class="text-right">
                        <h3 class="text-sm font-semibold text-gray-500 uppercase">Fecha y Estado</h3>
                        <p class="text-lg text-gray-900 mt-1">{{ \Carbon\Carbon::parse($venta->fecha_venta)->format('d/m/Y H:i') }}</p>
                        <span class="px-3 py-1 inline-flex text-sm leading-5 font-semibold rounded-full bg-green-100 text-green-800 mt-2">{{ $venta->estado }}</span>
                    </div>
                </div>
            </div>

            <!-- Detalles de la Factura -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl border border-gray-100">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Producto</th>
                                <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Cantidad</th>
                                <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Precio Unit.</th>
                                <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Subtotal</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($venta->items as $item)
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $item->product->nombre }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 text-right">{{ $item->cantidad }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-right">${{ number_format($item->precio_unitario, 2) }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-medium text-right">${{ number_format($item->subtotal, 2) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot class="bg-gray-50">
                            <tr>
                                <th colspan="3" class="px-6 py-4 text-right text-sm font-bold text-gray-900">Total Venta:</th>
                                <th class="px-6 py-4 text-right text-lg font-extrabold text-blue-700">${{ number_format($venta->total, 2) }}</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
