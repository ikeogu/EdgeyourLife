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
       $admin->email = 'ikeogu31@gmail.com';
       $admin->phone = '08133627611';
       $admin->city ='Port Harcourt';
       $admin->state = 'Rivers State';
       $admin->address = ' Back of Gensis Choba';
       $admin->password = bcrypt('password');
       $admin->save();
       $admin->roles()->attach($role_admin);

       $provider = new User();
       $provider->name = 'Daniel IKeogu ';
       $provider->email = 'iDanny@gmail.com';
       $provider->phone = '08133627345';
       $provider->city ='Kafanchan';
       $provider->state = 'Kadunatate';
       $provider->address = ' ngwamwgizor';
       $provider->password = bcrypt('password');
       $provider->save();
       $provider->roles()->attach($role_provider);

       $guest = new User();
       $guest->name = 'Ola baby';
       $guest->email = 'oly@gmail.com';
       $guest->phone = '08133627219';
       $guest->city ='Area 1';
       $guest->state = 'Abujas State';
       $guest->address = ' No 12 34street';
       $guest->password = bcrypt('password');
       $guest->save();
       $guest->roles()->attach($role_user);
    }
}
