<?php

namespace Database\Seeders;

use App\Models\User;
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
        $adminPermissions = Permission::all();
        $adminRole = Role::where('name', 'admin')->first();
        $adminRole->syncPermissions($adminPermissions);

        $managerPermissions = Permission::whereNotIn('name', ['delete users']);
        $managerRole = Role::where('name', 'manager')->first();
        $managerRole->syncPermissions($managerPermissions);
    }
}
