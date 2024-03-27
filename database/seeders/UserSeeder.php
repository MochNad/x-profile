<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $userRole = Role::firstOrCreate(['name' => 'user']);

        $manageUsersPermission = Permission::firstOrCreate(['name' => 'manage users']);
        $manageRolesPermission = Permission::firstOrCreate(['name' => 'manage roles']);

        $admin = User::updateOrCreate(
            ['email' => 'admin@x-profile.test'],
            [
                'name' => 'Admin',
                'password' => Hash::make('password')
            ]
        );

        $admin->syncRoles([$adminRole->id]);
        $admin->syncPermissions([$manageUsersPermission->id, $manageRolesPermission->id]);

        $user = User::updateOrCreate(
            ['email' => 'user@x-profile.test'],
            [
                'name' => 'User',
                'password' => Hash::make('password')
            ]
        );

        $user->syncRoles([$userRole->id]);
    }
}
