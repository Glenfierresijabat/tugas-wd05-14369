<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Buat user dokter
        User::create([
            'nama' => 'Dr. Farhan Wijaya',
            'alamat' => 'Jl. Merdeka No. 10, Jakarta',
            'no_hp' => '08111122334',
            'email' => 'dr.farhan@example.com',
            'role' => 'dokter',
            'password' => Hash::make('password123'),
        ]);

        User::create([
            'nama' => 'Dr. Siti Aisyah',
            'alamat' => 'Jl. Sudirman No. 21, Bandung',
            'no_hp' => '08222233445',
            'email' => 'dr.siti@example.com',
            'role' => 'dokter',
            'password' => Hash::make('password123'),
        ]);

        // Buat user pasien
        User::create([
            'nama' => 'Bagas Pratama',
            'alamat' => 'Jl. Kenanga No. 5, Surabaya',
            'no_hp' => '08333344556',
            'email' => 'bagas@example.com',
            'role' => 'pasien',
            'password' => Hash::make('password123'),
        ]);

        User::create([
            'nama' => 'Indah Lestari',
            'alamat' => 'Jl. Melati No. 8, Medan',
            'no_hp' => '08444455667',
            'email' => 'indah@example.com',
            'role' => 'pasien',
            'password' => Hash::make('password123'),
        ]);

        User::create([
            'nama' => 'Rizky Ananda',
            'alamat' => 'Jl. Anggrek No. 15, Semarang',
            'no_hp' => '08555566778',
            'email' => 'rizky@example.com',
            'role' => 'pasien',
            'password' => Hash::make('password123'),
        ]);
    }
}
