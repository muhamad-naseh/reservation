<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Nuke Dinda Anggraini',
            'username' => 'nuke-dinda',
            'email' => 'nuke@gmail.com',
            'password' => bcrypt('nukeaja')
        ]);

        $role = Role::find(1);

        $user->assignRole($role);
    }
}
