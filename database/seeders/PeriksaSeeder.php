<?php
namespace Database\Seeders;
use App\Models\DetailPeriksa;
use App\Models\Periksa;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeriksaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Pemeriksaan yang sudah selesai
        $periksa1 = Periksa::create([
            'id_pasien' => 3, // Bagas Pratama
            'id_dokter' => 1, // Dr. Farhan Wijaya
            'tgl_periksa' => Carbon::now()->subDays(5),
            'keluhan' => 'Sakit tenggorokan dan demam ringan',
            'catatan_dokter' => 'Pasien mengeluh sakit tenggorokan dan demam ringan. Diagnosis: Faringitis.',
            'biaya_periksa' => 200000, // 150000 + 50000 (obat)
            'status' => 'done'
        ]);

        // Tambahkan obat untuk periksa1
        DetailPeriksa::create([
            'id_periksa' => $periksa1->id,
            'id_obat' => 1, // Aspirin
        ]);
        
        DetailPeriksa::create([
            'id_periksa' => $periksa1->id,
            'id_obat' => 7, // Zinc
        ]);

        // Pemeriksaan yang sudah selesai 2
        $periksa2 = Periksa::create([
            'id_pasien' => 4, // Indah Lestari
            'id_dokter' => 2, // Dr. Siti Aisyah
            'tgl_periksa' => Carbon::now()->subDays(3),
            'keluhan' => 'Batuk kronis dan sesak napas',
            'catatan_dokter' => 'Pasien mengalami batuk kronis dan sesak napas. Diagnosis: Asma ringan.',
            'biaya_periksa' => 215000, // 150000 + 65000 (obat)
            'status' => 'done'
        ]);

        // Tambahkan obat untuk periksa2
        DetailPeriksa::create([
            'id_periksa' => $periksa2->id,
            'id_obat' => 3, // Salbutamol
        ]);
        
        DetailPeriksa::create([
            'id_periksa' => $periksa2->id,
            'id_obat' => 2, // Loratadine
        ]);
        
        DetailPeriksa::create([
            'id_periksa' => $periksa2->id,
            'id_obat' => 6, // Prednisone
        ]);

        // Pemeriksaan yang belum selesai (menunggu dokter)
        Periksa::create([
            'id_pasien' => 5, // Rizky Ananda
            'id_dokter' => 1, // Dr. Farhan Wijaya
            'tgl_periksa' => Carbon::now()->addHours(2),
            'keluhan' => 'Nyeri perut kanan bawah dan mual',
            'catatan_dokter' => null,
            'biaya_periksa' => 0, // Belum diperiksa
            'status' => 'pending'
        ]);

        // Pemeriksaan yang belum selesai (menunggu dokter)
        Periksa::create([
            'id_pasien' => 3, // Bagas Pratama
            'id_dokter' => 2, // Dr. Siti Aisyah
            'tgl_periksa' => Carbon::now()->addDays(1),
            'keluhan' => 'Nyeri dada ringan saat beraktivitas berat',
            'catatan_dokter' => null,
            'biaya_periksa' => 0, // Belum diperiksa
            'status' => 'pending'
        ]);
    }
}