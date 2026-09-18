<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Client;
use App\Models\Pet;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Poblar clientes (dueños de mascotas) y sus respectivas mascotas para Veterinaria Huellitas.
     */
    public function run(): void
    {
        $clientsData = [
            [
                'client' => [
                    'name' => 'Carlos Andrés Mendoza',
                    'document_id' => '1112345678',
                    'phone' => '3124567890',
                    'email' => 'carlos.mendoza@gmail.com',
                    'address' => 'Cra 12 # 24-50, Cartago',
                    'status' => 'Activo',
                ],
                'pets' => [
                    [
                        'name' => 'Max',
                        'species' => 'Perro',
                        'breed' => 'Golden Retriever',
                        'birth_date' => '2022-04-15',
                        'gender' => 'Macho',
                        'color' => 'Dorado',
                        'weight' => 31.5,
                        'notes' => 'Alérgico a la picadura de pulga. Vacunas al día.',
                    ],
                    [
                        'name' => 'Luna',
                        'species' => 'Gato',
                        'breed' => 'Siamés',
                        'birth_date' => '2023-01-10',
                        'gender' => 'Hembra',
                        'color' => 'Blanco y Café',
                        'weight' => 4.2,
                        'notes' => 'Esterilizada. Muy tranquila.',
                    ],
                ],
            ],
            [
                'client' => [
                    'name' => 'María Fernanda Gómez',
                    'document_id' => '1113456789',
                    'phone' => '3157891234',
                    'email' => 'mafe.gomez@hotmail.com',
                    'address' => 'Calle 10 # 5-18, Pereira',
                    'status' => 'Activo',
                ],
                'pets' => [
                    [
                        'name' => 'Rocky',
                        'species' => 'Perro',
                        'breed' => 'Bulldog Francés',
                        'birth_date' => '2021-11-20',
                        'gender' => 'Macho',
                        'color' => 'Atigrado',
                        'weight' => 12.8,
                        'notes' => 'Sensibilidad respiratoria en clima cálido.',
                    ],
                ],
            ],
            [
                'client' => [
                    'name' => 'Juan Diego Ospina',
                    'document_id' => '1114567890',
                    'phone' => '3206549871',
                    'email' => 'juand.ospina@yahoo.com',
                    'address' => 'Av. del Río # 14-22, Cartago',
                    'status' => 'Activo',
                ],
                'pets' => [
                    [
                        'name' => 'Milo',
                        'species' => 'Perro',
                        'breed' => 'Beagle',
                        'birth_date' => '2023-06-05',
                        'gender' => 'Macho',
                        'color' => 'Tricolor',
                        'weight' => 14.1,
                        'notes' => 'Tratamiento preventivo para garrapatas.',
                    ],
                    [
                        'name' => 'Kiwi',
                        'species' => 'Ave',
                        'breed' => 'Periquito Australiano',
                        'birth_date' => '2024-02-01',
                        'gender' => 'Macho',
                        'color' => 'Verde y Amarillo',
                        'weight' => 0.04,
                        'notes' => 'Control de muda de plumaje.',
                    ],
                ],
            ],
            [
                'client' => [
                    'name' => 'Valentina Restrepo Gil',
                    'document_id' => '1115678901',
                    'phone' => '3189876543',
                    'email' => 'valentina.restrepo@outlook.com',
                    'address' => 'Cra 7 # 16-45, Cartago',
                    'status' => 'Activo',
                ],
                'pets' => [
                    [
                        'name' => 'Mia',
                        'species' => 'Gato',
                        'breed' => 'Persa',
                        'birth_date' => '2022-09-18',
                        'gender' => 'Hembra',
                        'color' => 'Blanco',
                        'weight' => 3.8,
                        'notes' => 'Cepillado periódico y limpieza ocular frecuente.',
                    ],
                ],
            ],
            [
                'client' => [
                    'name' => 'Alejandro Morales Salazar',
                    'document_id' => '1116789012',
                    'phone' => '3113456789',
                    'email' => 'alejandro.morales@empresa.com',
                    'address' => 'Calle 18 # 4-30, Cartago',
                    'status' => 'Activo',
                ],
                'pets' => [
                    [
                        'name' => 'Thor',
                        'species' => 'Perro',
                        'breed' => 'Pastor Alemán',
                        'birth_date' => '2020-08-30',
                        'gender' => 'Macho',
                        'color' => 'Negro y Fuego',
                        'weight' => 36.0,
                        'notes' => 'Control anual de displasia de cadera.',
                    ],
                ],
            ],
            [
                'client' => [
                    'name' => 'Camila Torres Vargas',
                    'document_id' => '1117890123',
                    'phone' => '3142223344',
                    'email' => 'camila.torres@gmail.com',
                    'address' => 'Cra 4 # 11-08, Cartago',
                    'status' => 'Activo',
                ],
                'pets' => [
                    [
                        'name' => 'Simba',
                        'species' => 'Gato',
                        'breed' => 'Común Europeo',
                        'birth_date' => '2023-03-12',
                        'gender' => 'Macho',
                        'color' => 'Naranja Atigrado',
                        'weight' => 4.5,
                        'notes' => 'Vacuna antirrábica aplicada.',
                    ],
                ],
            ],
        ];

        foreach ($clientsData as $item) {
            $client = Client::firstOrCreate(
                ['document_id' => $item['client']['document_id']],
                $item['client']
            );

            foreach ($item['pets'] as $petData) {
                Pet::firstOrCreate(
                    [
                        'client_id' => $client->id,
                        'name' => $petData['name'],
                    ],
                    $petData
                );
            }
        }
    }
}
