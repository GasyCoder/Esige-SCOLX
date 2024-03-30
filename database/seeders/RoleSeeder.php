<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $admin = Role::create([
            'name' => 'admin',
            'label' => 'Administrateur',
            'description' => 'Administrateur de Système'
        ]);
        $secretaire = Role::create([
            'name' => 'secretaire',
            'label' => 'Sécretaire',
            'description' => 'Sécretaire scolarité'
        ]);

        $admin->givePermissionTo([
            'superadmin',
        ]);

        $secretaire->givePermissionTo([
            'secretaire',
        ]);
    }
}
