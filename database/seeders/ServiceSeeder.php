<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\Employee;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            ['name' => 'Consulta Médica General', 'description' => 'Evaluación clínica completa de la mascota', 'price' => 45000.00, 'duration_minutes' => 30],
            ['name' => 'Vacunación Canina Séxtuple', 'description' => 'Inmunización contra parvovirus, moquillo, hepatitis y leptospira', 'price' => 60000.00, 'duration_minutes' => 20],
            ['name' => 'Vacunación Felina Triple', 'description' => 'Inmunización contra rinotraqueítis, calicivirus y panleucopenia', 'price' => 55000.00, 'duration_minutes' => 20],
            ['name' => 'Profilaxis / Limpieza Dental', 'description' => 'Eliminación de sarro por ultrasonido', 'price' => 120000.00, 'duration_minutes' => 60],
            ['name' => 'Cirugía de Esterilización', 'description' => 'Procedimiento quirúrgico con anestesia inhalatoria', 'price' => 180000.00, 'duration_minutes' => 90],
            ['name' => 'Baño Medicado y Peluquería Canina', 'description' => 'Baño con champú dermatológico, corte higiénico y corte de uñas', 'price' => 40000.00, 'duration_minutes' => 45],
        ];

        foreach ($services as $srv) {
            Service::updateOrCreate(['name' => $srv['name']], $srv);
        }

        $employees = [
            ['name' => 'Dr. Fernando Arango', 'role' => 'Médico Veterinario Zootecnista', 'email' => 'fernando.vet@huellitas.com', 'phone' => '3119876543', 'license_number' => 'MP-18492-COMVEZCOL'],
            ['name' => 'Dra. Carolina Méndez', 'role' => 'Cirujana Veterinaria', 'email' => 'carolina.cirugia@huellitas.com', 'phone' => '3128765432', 'license_number' => 'MP-20411-COMVEZCOL'],
            ['name' => 'Sebastián Quintero', 'role' => 'Auxiliar Veterinario', 'email' => 'sebastian.aux@huellitas.com', 'phone' => '3137654321', 'license_number' => 'AUX-9482'],
            ['name' => 'Laura Morales', 'role' => 'Recepcionista y Atención al Cliente', 'email' => 'recepcion@huellitas.com', 'phone' => '3146543210', 'license_number' => null],
            ['name' => 'Julián Cárdenas', 'role' => 'Estilista Canino y Felino', 'email' => 'peluqueria@huellitas.com', 'phone' => '3155432109', 'license_number' => null],
        ];

        foreach ($employees as $emp) {
            Employee::updateOrCreate(['email' => $emp['email']], $emp);
        }
    }
}
