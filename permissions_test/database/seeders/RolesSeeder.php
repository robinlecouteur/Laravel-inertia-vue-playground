<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_admin = Role::createOrFirst(['name' => 'admin']);
        $role_standard = Role::createOrFirst(['name' => 'standard']);
        //

        $permission_read = Permission::createOrFirst(['name' => 'read articles']);
        $permission_edit = Permission::createOrFirst(['name' => 'edit articles']);
        $permission_write = Permission::createOrFirst(['name' => 'write articles']);
        $permission_delete = Permission::createOrFirst(['name' => 'delete articles']);

        $permissions_admin = [$permission_read, $permission_edit, $permission_write, $permission_delete];

        $role_admin->syncPermissions($permissions_admin);
        $role_standard->givePermissionTo($permission_read);
    }
}
