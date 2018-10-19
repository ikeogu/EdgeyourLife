<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role_user = new Role();
        $role_user->name = 'Admin';
        $role_user->description = 'I am in charge of others.';
        $role_user->save();

        $role_user = new Role();
        $role_user->name = 'Service Provider';
        $role_user->description = 'I Provide services the guest or customer needs.';
        $role_user->save();

        $role_user = new Role();
        $role_user->name = 'User';
        $role_user->description = 'I search for service people needs.';
        $role_user->save();
        
        
    }
}
