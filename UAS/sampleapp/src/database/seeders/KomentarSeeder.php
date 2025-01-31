<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Komentar;
use App\Models\Pengguna;
use App\Models\Materi;
use Illuminate\Support\Facades\App;

class KomentarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pengguna = Pengguna::first();
        $materi = Materi::first();
        
        $komentars = [
            [
                'komentar' => 'Materi yang diberikan ini cukup bagus dan menarik',
                'tanggal_komentar' => '2021-06-18',
                'pengguna_id' => $pengguna->id,
                'materi_id' => $materi->id,
            ],
        ];

        foreach ($komentars as $komentar) {
            Komentar::Create($komentar);
        }
    }
}

