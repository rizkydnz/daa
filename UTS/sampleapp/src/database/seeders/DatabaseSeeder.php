<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Pelanggan;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->seedUsers();
        $this->callSeeders();
        // User::factory(10)->create();
    }

    private function seedUsers(): void{
        if(!User::where('email', 'admin@admin.com')->exists()){
        $users = User::factory()->createMany([
            [
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Pelanggan',
                'email' => 'pelanggan@pelanggan.com',
                'password' => bcrypt('password'),
            ],
        ]
    );
    foreach ($users as $user) {
        if($user->email=='admin@admin.com'){
            $user->assignRole('super_admin');
            }
        }
    }
}

    private function callSeeders(): void{
        $this->call([
            PelangganSeeder::class,
            TokoHandphoneSeeder::class,
            TransaksiSeeder::class,
            RoleSeeder::class,
        ]);
    }
}
