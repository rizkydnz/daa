<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Transaksi;
use App\Models\Pelanggan;
use App\Models\TokoHandphone;
use Illuminate\Support\Facades\App;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pelanggan = Pelanggan::first();
        $handphone = TokoHandphone::first();

        if ($pelanggan && $handphone) {
            Transaksi::create([
                'pelanggan_id' => $pelanggan->id,
                'handphone_id' => $handphone->id,
                'Jumlah' => 2,
                'Total_Harga' => $handphone->Harga * 2,
            ]);
        }
    }
}
