<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TokoHandphone;
use Illuminate\Support\Facades\App;

class TokoHandphoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $handphones = [
            [
                'Tipe' => 'Samsung',
                'Merk' => 'J7 Prime',
                'Harga' => 1500000,
                'Warna' => 'Gold',
            ],
            [
                'Tipe' => 'Oppo',
                'Merk' => 'Reno 7',
                'Harga' => 4500000,
                'Warna' => 'Black',
            ],
            [
                'Tipe' => 'Infinix',
                'Merk' => 'Note 30 Pro',
                'Harga' => 2500000,
                'Warna' => 'Black',
            ],
            [
                'Tipe' => 'Iphone',
                'Merk' => '10 Pro Max',
                'Harga' => 5500000,
                'Warna' => 'Gold',
            ],
        ];

        foreach ($handphones as $handphone) {
            TokoHandphone::Create($handphone);
        }
    }
}
