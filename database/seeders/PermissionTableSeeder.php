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
        
        Permission::create(['name' => 'view_accounts']);
        Permission::create(['name' => 'view_qualification']);
        Permission::create(['name' => 'view_reservation']);
        Permission::create(['name' => 'view_announcement']);
        Permission::create(['name' => 'view_transparency']);
        Permission::create(['name' => 'view_media']);
        Permission::create(['name' => 'view_assessment']);

        $role1 = Role::create(['name' => 'Admin']);
        $role1->givePermissionTo('create_users');
        $role1->givePermissionTo('update_users');
        $role1->givePermissionTo('view_users');
        $role1->givePermissionTo('delete_users');
        $role1->givePermissionTo('view_roles');
        $role1->givePermissionTo('export_users');
        $role1->givePermissionTo('import_users');

        $role1->givePermissionTo('view_accounts');
        $role1->givePermissionTo('view_qualification');
        $role1->givePermissionTo('view_reservation');
        $role1->givePermissionTo('view_announcement');
        $role1->givePermissionTo('view_transparency');
        $role1->givePermissionTo('view_media');
        $role1->givePermissionTo('view_assessment');
        
        $role2 = Role::create(['name' => 'Registrar Assistant']);
        $role1->givePermissionTo('view_reservation');

        $user = \App\Models\User::factory()->create([
            'name' => 'Super Administrator',
            'email' => 'admininstrator@rtciligan.com',
            'password' => \Hash::make('password')
        ]);
        $user->assignRole($role1);

        $user = \App\Models\User::factory()->create([
            'name' => 'Normalah Mamutok',
            'email' => 'mamutok@rtciligan.com',
            'password' => \Hash::make('mamutokpassword')
        ]);
        $user->assignRole($role2);

    }
}
