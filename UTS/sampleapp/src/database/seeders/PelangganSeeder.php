<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pelanggan;
use Illuminate\Support\Facades\App;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pelanggans = [
            [
                'nama' => 'Alfin Khalaj',
                'email' => 'alfinkhalaj@example.com',
                'kontak' => '081234567890',
                'alamat' => 'Jl. Merdeka No. 1',
                'status' => 'active',
            ],
            [
                'nama' => 'Muhammad Arifin',
                'email' => 'muhammadarifin@example.com',
                'kontak' => '081298765432',
                'alamat' => 'Jl. Raya No. 2',
                'status' => 'inactive',
            ],
            [
                'nama' => 'Putra Daffa',
                'email' => 'putradaffa@example.com',
                'kontak' => '081345678901',
                'alamat' => 'Jl. Pahlawan No. 3',
                'status' => 'active',
            ],
            [
                'nama' => 'Rizky Dwi',
                'email' => 'rizkydwi@example.com',
                'kontak' => '081456789012',
                'alamat' => 'Jl. Kartini No. 4',
                'status' => 'active',
            ],
        ];

        foreach ($pelanggans as $pelanggan) {
            Pelanggan::Create($pelanggan);
        }
    }
}
