<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
class UsersSeederTable extends Seeder
{
    public function run()
    {
        $role_user = Role::where('name', 'user')->first();
        $role_admin = Role::where('name', 'admin')->first();

        $user = new User();
        $user->name = 'User';
        $user->apellido = 'UserOperative';
        $user->dni = '123456';
        $user->telefono = '123456';
        $user->email = 'user@example.com';
        $user->password = bcrypt('secret');
        $user->save();        
        $user->roles()->attach($role_user);

        $user = new User();
        $user->name = 'Admin';
        $user->apellido = 'UserAdmin';
        $user->dni = '1234567';
        $user->telefono = '1234567';
        $user->email = 'admin@example.com';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_admin);
     }
}
