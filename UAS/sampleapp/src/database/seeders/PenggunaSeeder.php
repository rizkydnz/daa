<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pengguna;
use Illuminate\Support\Facades\App;

class PenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $penggunas = [
            [
                'nama' => 'Rizky Dwi',
                'email' => 'rizkydwi@gmail.com',
                'password' => 'rizky12345',
            ],
            [
                'nama' => 'Arifin Sulistiono',
                'email' => 'arifinsulistiono@gmail.com',
                'password' => 'arifin12345',
            ],
            [
                'nama' => 'Alfin Khalaj',
                'email' => 'alfinkhalaj@gmail.com',
                'password' => 'alfin12345'
            ]
        ];
        
        foreach ($penggunas as $pengguna) {
            Pengguna::Create($pengguna);
        }
    }
}
