<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Supplier;

class SupplierSeeder extends Seeder
{
    public function run(): void
    {
        $suppliers = [
            ['empresa' => 'TechDistribuciones Colombia', 'nit' => '800111222-1', 'correo' => 'ventas@techdistribuciones.com', 'telefono' => '3101112222', 'ciudad' => 'Bogotá', 'direccion' => 'Z.I. Puente Aranda'],
            ['empresa' => 'Importadora Digital S.A.S.', 'nit' => '800222333-2', 'correo' => 'importaciones@importadoradigital.co', 'telefono' => '3152223333', 'ciudad' => 'Buenaventura', 'direccion' => 'Zona Franca del Pacífico'],
            ['empresa' => 'Mayorista Tecnológico Andino', 'nit' => '800333444-3', 'correo' => 'pedidos@mayoristaandino.com', 'telefono' => '3203334444', 'ciudad' => 'Medellín', 'direccion' => 'Guayabal Cra 52'],
            ['empresa' => 'Global Components Colombia', 'nit' => '800444555-4', 'correo' => 'comercial@globalcomponents.co', 'telefono' => '3004445555', 'ciudad' => 'Bogotá', 'direccion' => 'Unilago Local 102'],
            ['empresa' => 'Suministros Informáticos del Valle', 'nit' => '800555666-5', 'correo' => 'contacto@suministrosvalle.com', 'telefono' => '3115556666', 'ciudad' => 'Cali', 'direccion' => 'Pasarela Local 205'],
        ];

        foreach ($suppliers as $supplier) {
            Supplier::updateOrCreate(['nit' => $supplier['nit']], $supplier);
        }
    }
}
