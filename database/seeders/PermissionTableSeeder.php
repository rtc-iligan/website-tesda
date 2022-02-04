<?php

namespace Database\Seeders;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'create_users']);
        Permission::create(['name' => 'update_users']);
        Permission::create(['name' => 'view_users']);
        Permission::create(['name' => 'delete_users']);
        Permission::create(['name' => 'view_roles']);
        Permission::create(['name' => 'export_users']);
        Permission::create(['name' => 'import_users']);

        $role1 = Role::create(['name' => 'Super Admin']);
        $role1->givePermissionTo('create_users');
        $role1->givePermissionTo('update_users');
        $role1->givePermissionTo('view_users');
        $role1->givePermissionTo('delete_users');
        $role1->givePermissionTo('view_roles');

        $role2 = Role::create(['name' => 'User']);
        $role2->givePermissionTo('view_users');
        $role2->givePermissionTo('view_roles');
        
        $user = \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => \Hash::make('password')
        ]);
        $user->assignRole($role1);

    }
}
