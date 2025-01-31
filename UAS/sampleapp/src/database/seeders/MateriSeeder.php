<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pengguna;
use App\Models\Materi;
use Illuminate\Support\Facades\App;

class MateriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pengguna = Pengguna::first();

        $materis = [
            [
                'judul' => 'Perlindungan Sistem',
                'tanggal_upload' => '2021-06-18',
                'kategori' => 'Modul',
                'file_materi' => 'PDF',
                'pengguna_id' => $pengguna->id,
            ],
        ];

        foreach ($materis as $materi) {
            Materi::create($materi);
        }
    }
}
