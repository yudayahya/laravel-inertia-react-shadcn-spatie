<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'create user',
            'read user',
            'update user',
            'delete user',
            'create admin',
            'read admin',
            'update admin',
            'delete admin',
            'create role',
            'read role',
            'update role',
            'delete role',
            'create permission',
            'read permission',
            'update permission',
            'delete permission',
        ];

        foreach ($permissions as $permission) {
            $createdPermission = Permission::findOrCreate($permission);
            $createdPermission->assignRole('super-admin');
        }
    }
}
