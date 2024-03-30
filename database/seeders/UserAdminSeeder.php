<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creating Admin User
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin@gmail.com'),
            'email_verified_at' => now(),
        ]);
        $admin->assignRole('admin');

        // Creating Secretaire User
        $secretaire = User::create([
            'name' => 'Secretaire',
            'email' => 'secretaire@mail.com',
            'password' => bcrypt('secretaire@mail.com'),
            'email_verified_at' => now(),
        ]);
        $secretaire->assignRole('secretaire');

    }
}
