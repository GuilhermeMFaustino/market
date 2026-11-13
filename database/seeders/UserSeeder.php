<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run(): void
{
    User::create([
        'name' => 'Guilherme',
        'username' => 'mendes',
        'email' => 'guilhermemendes.info@gmail.com',
        'role' => 'admin',
        'status' => 'active',
        'password' => bcrypt('12345678'),
    ]);

    User::create([
        'name' => 'Vendedor vendor',
        'username' => 'vendor',
        'email' => 'vendedor@gmail.com',
        'role' => 'vendor',
        'status' => 'active',
        'password' => bcrypt('12345678'),
    ]);

    User::create([
        'name' => 'Cliente user',
        'username' => 'user',
        'email' => 'cliente@gmail.com',
        'role' => 'user',
        'status' => 'active',
        'password' => bcrypt('12345678'),
    ]);
}
}
