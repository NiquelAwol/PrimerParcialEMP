<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'Medicamentos y Fármacos', 'description' => 'Antibióticos, analgésicos, antiparasitarios y vacunas'],
            ['name' => 'Alimentos y Nutrición', 'description' => 'Alimento seco, húmedo y dietas de prescripción clínica'],
            ['name' => 'Accesorios y Paseo', 'description' => 'Collares, correas, bozales, transportadoras'],
            ['name' => 'Juguetes y Entretenimiento', 'description' => 'Mordedores, pelotas, rascadores y dispensadores interactivos'],
            ['name' => 'Higiene y Cuidado Estético', 'description' => 'Champús dermatológicos, cepillos, cortaúñas y perfumes'],
        ];

        foreach ($categories as $cat) {
            Category::updateOrCreate(['name' => $cat['name']], $cat);
        }
    }
}
