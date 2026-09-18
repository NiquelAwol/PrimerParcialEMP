<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $catMeds = Category::where('name', 'like', '%Medicamentos%')->first()?->id;
        $catFood = Category::where('name', 'like', '%Alimentos%')->first()?->id;
        $catAcc = Category::where('name', 'like', '%Accesorios%')->first()?->id;
        $catJuguetes = Category::where('name', 'like', '%Juguetes%')->first()?->id;

        $products = [
            [
                'code' => 'MED-0001',
                'name' => 'Bravecto Antipulgas y Garrapatas 20-40kg',
                'description' => 'Tableta masticable de protección por 12 semanas',
                'category_id' => $catMeds,
                'purchase_price' => 95000.00,
                'sale_price' => 135000.00,
                'stock' => 25,
                'min_stock' => 5,
                'status' => 'Activo',
            ],
            [
                'code' => 'MED-0002',
                'name' => 'Amoxicilina + Ácido Clavulánico 250mg',
                'description' => 'Antibiótico de amplio espectro para caninos y felinos x 10 tabletas',
                'category_id' => $catMeds,
                'purchase_price' => 32000.00,
                'sale_price' => 48000.00,
                'stock' => 40,
                'min_stock' => 10,
                'status' => 'Activo',
            ],
            [
                'code' => 'ALM-0001',
                'name' => 'Pro Plan Puppy Razas Medianas 3kg',
                'description' => 'Nutrición avanzada con calostro para cachorros',
                'category_id' => $catFood,
                'purchase_price' => 78000.00,
                'sale_price' => 105000.00,
                'stock' => 18,
                'min_stock' => 4,
                'status' => 'Activo',
            ],
            [
                'code' => 'ALM-0002',
                'name' => 'Royal Canin Veterinary Diet Gastrointestinal Cat 2kg',
                'description' => 'Alimento dietético para gatos con trastornos digestivos',
                'category_id' => $catFood,
                'purchase_price' => 89000.00,
                'sale_price' => 122000.00,
                'stock' => 12,
                'min_stock' => 3,
                'status' => 'Activo',
            ],
            [
                'code' => 'ACC-0001',
                'name' => 'Collar Ajustable Reflectivo Talla M',
                'description' => 'Collar de alta resistencia con costuras reflectivas nocturnas',
                'category_id' => $catAcc,
                'purchase_price' => 15000.00,
                'sale_price' => 28000.00,
                'stock' => 30,
                'min_stock' => 5,
                'status' => 'Activo',
            ],
            [
                'code' => 'JUG-0001',
                'name' => 'Kong Classic Rojo Mediano',
                'description' => 'Juguete de caucho ultra resistente para estimulación mental canina',
                'category_id' => $catJuguetes,
                'purchase_price' => 42000.00,
                'sale_price' => 65000.00,
                'stock' => 15,
                'min_stock' => 4,
                'status' => 'Activo',
            ],
        ];

        foreach ($products as $prod) {
            Product::updateOrCreate(['code' => $prod['code']], $prod);
        }
    }
}
