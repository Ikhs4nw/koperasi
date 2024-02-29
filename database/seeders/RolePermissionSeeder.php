<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'create-data']);
        Permission::create(['name' => 'update-data']);
        Permission::create(['name' => 'deleted-data']);
        Permission::create(['name' => 'export-data']);
        Permission::create(['name' => 'logout']);
        Permission::create(['name' => 'register']);
        Permission::create(['name' => 'verification.send']);

        Role::create(['name' => 'Admin']);
        Role::create(['name' => 'Anggota']);

        $roleAdmin = Role::findByName('Admin');
        $roleAdmin->givePermissionTo('create-data');
        $roleAdmin->givePermissionTo('update-data');
        $roleAdmin->givePermissionTo('deleted-data');
        $roleAdmin->givePermissionTo('export-data');
        $roleAdmin->givePermissionTo('logout');

        $roleAnggota = Role::findByName('Anggota');
        $roleAnggota->givePermissionTo('export-data');
        $roleAnggota->givePermissionTo('logout');
        $roleAnggota->givePermissionTo('register');
        $roleAnggota->givePermissionTo('verification.send'); 
    }
}
