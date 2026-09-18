<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Purchase;
use App\Models\PurchaseItem;
use App\Models\Supplier;
use App\Models\Product;
use Carbon\Carbon;

class PurchaseSeeder extends Seeder
{
    public function run(): void
    {
        $suppliers = Supplier::all();
        $products = Product::all();

        if ($suppliers->isEmpty() || $products->isEmpty()) return;

        $compras = [
            ['numero' => 'C-0001', 'supplier_idx' => 0, 'items' => [['prod_idx' => 0, 'cant' => 10], ['prod_idx' => 1, 'cant' => 10]]],
            ['numero' => 'C-0002', 'supplier_idx' => 1, 'items' => [['prod_idx' => 12, 'cant' => 5]]],
            ['numero' => 'C-0003', 'supplier_idx' => 2, 'items' => [['prod_idx' => 2, 'cant' => 20], ['prod_idx' => 3, 'cant' => 10]]],
            ['numero' => 'C-0004', 'supplier_idx' => 3, 'items' => [['prod_idx' => 14, 'cant' => 50], ['prod_idx' => 6, 'cant' => 50]]],
            ['numero' => 'C-0005', 'supplier_idx' => 4, 'items' => [['prod_idx' => 4, 'cant' => 100], ['prod_idx' => 5, 'cant' => 150]]],
            ['numero' => 'C-0006', 'supplier_idx' => 0, 'items' => [['prod_idx' => 9, 'cant' => 10]]],
            ['numero' => 'C-0007', 'supplier_idx' => 1, 'items' => [['prod_idx' => 13, 'cant' => 15]]],
            ['numero' => 'C-0008', 'supplier_idx' => 2, 'items' => [['prod_idx' => 7, 'cant' => 40]]],
            ['numero' => 'C-0009', 'supplier_idx' => 3, 'items' => [['prod_idx' => 8, 'cant' => 30]]],
            ['numero' => 'C-0010', 'supplier_idx' => 4, 'items' => [['prod_idx' => 10, 'cant' => 20], ['prod_idx' => 11, 'cant' => 50]]],
        ];

        foreach ($compras as $index => $cData) {
            $supplier = $suppliers[$cData['supplier_idx']];
            
            $purchase = Purchase::firstOrCreate(
                ['numero_compra' => $cData['numero']],
                [
                    'supplier_id' => $supplier->id,
                    'fecha_compra' => Carbon::now()->subDays(15 - $index)->format('Y-m-d'),
                    'total' => 0,
                    'estado' => 'Recibida'
                ]
            );

            if ($purchase->wasRecentlyCreated) {
                $total = 0;
                foreach ($cData['items'] as $itemData) {
                    $product = $products[$itemData['prod_idx']];
                    // Costo de compra es approx 70% del precio de venta
                    $costo = $product->precio * 0.7;
                    $subtotal = $costo * $itemData['cant'];
                    $total += $subtotal;

                    PurchaseItem::create([
                        'purchase_id' => $purchase->id,
                        'product_id' => $product->id,
                        'cantidad' => $itemData['cant'],
                        'precio' => $costo,
                        'subtotal' => $subtotal
                    ]);
                }
                $purchase->update(['total' => $total]);
            }
        }
    }
}
