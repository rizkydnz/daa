<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Motivasi;
use Illuminate\Support\Facades\App;

class MotivasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $motivasis = [
            [
                'motivasi' => 'Motivasi saya ingin belajar cyber security karena saya tertarik pada dunia cyber',
                'tanggal' => 2021-06-18,
            ]
        ];
        
        foreach ($motivasis as $motivasi) {
            Motivasi::Create($motivasi);
        }
    }
}
