<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Petugas',
            'username' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('Administrator'),
            'alamat' => '-',
            'no_telp' => '-',
            'email_verified_at' => Carbon::now('Asia/Jakarta')
        ]);

        $admin->assignRole('Admin');
        $admin->givePermissionTo('create-data');
        $admin->givePermissionTo('update-data');
        $admin->givePermissionTo('deleted-data');
        $admin->givePermissionTo('export-data');
        $admin->givePermissionTo('logout');
    }
}
