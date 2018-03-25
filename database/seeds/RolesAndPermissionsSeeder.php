<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');

        // create permissions
        Permission::create(['name' => 'add city']);
        Permission::create(['name' => 'modify city']);
        Permission::create(['name' => 'delete city']);
        Permission::create(['name' => 'manage cities']);

        Permission::create(['name' => 'add space']);
        Permission::create(['name' => 'modify space']);
        Permission::create(['name' => 'delete space']);
        Permission::create(['name' => 'manage spaces']);

        Permission::create(['name' => 'add room']);
        Permission::create(['name' => 'modify room']);
        Permission::create(['name' => 'delete room']);

        Permission::create(['name' => 'add hardware']);
        Permission::create(['name' => 'modify hardware']);
        Permission::create(['name' => 'delete hardware']);
        Permission::create(['name' => 'affect hardware']);
        Permission::create(['name' => 'manage hardware']);
        
        // create roles and assign created permissions

        $role = Role::create(['name' => 'user']);
        // $role->givePermissionTo('edit articles');

        $role = Role::create(['name' => 'anim']);
        $role->givePermissionTo(['add city', 'manage cities', 'manage spaces', 'add hardware', 'modify hardware', 'delete hardware']);

        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo(Permission::all());

        $user = User::find('1');
        $user->assignRole('admin');
        $user = User::find('2');
        $user->assignRole('anim');
        $user = User::find('3');
        $user->assignRole('user');
    }
}
