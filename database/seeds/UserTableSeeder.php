<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::where('name', 'Admin')->first();
        $role_provider = Role::where('name', 'Provider')->first();
        $role_user = Role::where('name', 'User')->first();

       $admin = new User();
       $admin->name = 'Ikeogu Emmanuel ';
       $admin->email = 'ikeogu322@gmail.com';
       $admin->phone = '08133627611';
       
       $admin->username = ' Lucky Dera';
       $admin->password = bcrypt('password');
       $admin->save();
       $admin->roles()->attach($role_admin);

       $admin = new User();
       $admin->name = 'Eddy ';
       $admin->email = 'ed.eddie@gmail.com';
       $admin->phone = '08050957347';
       
       $admin->username = ' Eddy';
       $admin->password = bcrypt('password');
       $admin->save();
       $admin->roles()->attach($role_admin);

       $provider = new User();
       $provider->name = 'Daniel IKeogu ';
       $provider->email = 'iDanny@gmail.com';
       $provider->phone = '08133627345';
      
       $provider->address = ' ngwamwgizor';
       $provider->password = bcrypt('password');
       $provider->save();
       $provider->roles()->attach($role_provider);

    }
}
