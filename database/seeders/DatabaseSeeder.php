<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'super@admin.com',
            'password' => bcrypt('12345678'),
            'role' => 'superadmin',
        ]);

        User::factory()->create([
            'name' => 'Dahlia Batik',
            'email' => 'dahliabatik@mitra.com',
            'password' => bcrypt('12345678'),
            'role' => 'dahlia',
        ]);

        User::factory()->create([
            'name' => 'Viena Crafts',
            'email' => 'vienacrafts@mitra.com',
            'password' => bcrypt('12345678'),
            'role' => 'viena',
        ]);

        User::factory()->create([
            'name' => 'Rajava Creations',
            'email' => 'rajavacreations@mitra.com',
            'password' => bcrypt('12345678'),
            'role' => 'rajava',
        ]);
    }
}
