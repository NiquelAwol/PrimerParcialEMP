<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sale;
use App\Models\SaleItem;
use App\Models\Client;
use App\Models\Product;
use Carbon\Carbon;

class SaleSeeder extends Seeder
{
    public function run(): void
    {
        $clients = Client::all();
        $products = Product::all();

        if ($clients->isEmpty() || $products->isEmpty()) return;

        $ventas = [
            ['numero' => 'V-0001', 'client_idx' => 0, 'items' => [['prod_idx' => 0, 'cant' => 2], ['prod_idx' => 4, 'cant' => 5]]],
            ['numero' => 'V-0002', 'client_idx' => 1, 'items' => [['prod_idx' => 12, 'cant' => 1]]],
            ['numero' => 'V-0003', 'client_idx' => 2, 'items' => [['prod_idx' => 2, 'cant' => 3], ['prod_idx' => 3, 'cant' => 1]]],
            ['numero' => 'V-0004', 'client_idx' => 3, 'items' => [['prod_idx' => 8, 'cant' => 10]]],
            ['numero' => 'V-0005', 'client_idx' => 4, 'items' => [['prod_idx' => 5, 'cant' => 20], ['prod_idx' => 4, 'cant' => 20]]],
            ['numero' => 'V-0006', 'client_idx' => 5, 'items' => [['prod_idx' => 14, 'cant' => 5]]],
            ['numero' => 'V-0007', 'client_idx' => 6, 'items' => [['prod_idx' => 9, 'cant' => 2]]],
            ['numero' => 'V-0008', 'client_idx' => 7, 'items' => [['prod_idx' => 6, 'cant' => 15]]],
            ['numero' => 'V-0009', 'client_idx' => 8, 'items' => [['prod_idx' => 13, 'cant' => 2]]],
            ['numero' => 'V-0010', 'client_idx' => 9, 'items' => [['prod_idx' => 1, 'cant' => 5], ['prod_idx' => 11, 'cant' => 10]]],
            ['numero' => 'V-0011', 'client_idx' => 0, 'items' => [['prod_idx' => 10, 'cant' => 3]]],
            ['numero' => 'V-0012', 'client_idx' => 1, 'items' => [['prod_idx' => 7, 'cant' => 8]]],
        ];

        foreach ($ventas as $index => $vData) {
            $client = $clients[$vData['client_idx']];
            
            $sale = Sale::firstOrCreate(
                ['numero_venta' => $vData['numero']],
                [
                    'client_id' => $client->id,
                    'fecha_venta' => Carbon::now()->subDays(12 - $index)->format('Y-m-d'),
                    'total' => 0,
                    'estado' => 'Completada'
                ]
            );

            if ($sale->wasRecentlyCreated) {
                $total = 0;
                foreach ($vData['items'] as $itemData) {
                    $product = $products[$itemData['prod_idx']];
                    $subtotal = $product->precio * $itemData['cant'];
                    $total += $subtotal;

                    SaleItem::create([
                        'sale_id' => $sale->id,
                        'product_id' => $product->id,
                        'cantidad' => $itemData['cant'],
                        'precio' => $product->precio,
                        'subtotal' => $subtotal
                    ]);
                }
                $sale->update(['total' => $total]);
            }
        }
    }
}
