<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

       // create permissions
       Permission::create(['name' => 'edit-articles']);
       Permission::create(['name' => 'delete-articles']);
       Permission::create(['name' => 'publish-articles']);


        // this can be done as separate statements
        $role1 = Role::create(['name' => 'user']);
        $role1->givePermissionTo('edit-articles','delete-articles','publish-articles');

        $role2 = Role::create(['name' => 'admin']);
        $role2->givePermissionTo(Permission::all());

        
        // create demo user
        $user = \App\Models\User::factory()->create([
            'name' => 'user',
            'email' => 'user@example.com',
            'password' =>bcrypt('password'),
        ]);
        $user->assignRole($role1);


        // create demo admin
        $user = \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' =>bcrypt('password'),
        ]);$user->assignRole($role2);;
    }
}