<?php

namespace Database\Seeders;

use App\Models\Obat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ObatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $obats = [
            [
                'nama_obat' => 'Aspirin',
                'kemasan' => 'Tablet 100mg',
                'harga' => 12000,
            ],
            [
                'nama_obat' => 'Loratadine',
                'kemasan' => 'Tablet 10mg',
                'harga' => 17000,
            ],
            [
                'nama_obat' => 'Salbutamol',
                'kemasan' => 'Tablet 2mg',
                'harga' => 14000,
            ],
            [
                'nama_obat' => 'Ranitidine',
                'kemasan' => 'Tablet 150mg',
                'harga' => 22000,
            ],
            [
                'nama_obat' => 'Clindamycin',
                'kemasan' => 'Kapsul 300mg',
                'harga' => 33000,
            ],
            [
                'nama_obat' => 'Prednisone',
                'kemasan' => 'Tablet 5mg',
                'harga' => 9000,
            ],
            [
                'nama_obat' => 'Zinc',
                'kemasan' => 'Tablet 20mg',
                'harga' => 6000,
            ],
            [
                'nama_obat' => 'Mylanta',
                'kemasan' => 'Suspensi 150ml',
                'harga' => 25000,
            ],
            [
                'nama_obat' => 'Fluoxetine',
                'kemasan' => 'Kapsul 20mg',
                'harga' => 28000,
            ],
            [
                'nama_obat' => 'Glibenclamide',
                'kemasan' => 'Tablet 5mg',
                'harga' => 16000,
            ],
        ];

        foreach ($obats as $obat) {
            Obat::create($obat);
        }
    }
}
