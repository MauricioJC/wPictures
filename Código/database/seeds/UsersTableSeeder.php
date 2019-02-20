<?php

use Illuminate\Database\Seeder;
use App\User;
use Caffeinated\Shinobi\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name'  => 'admin',
            'email' => 'admin@site.com',
            'password' => Hash::make('secret')
        ]);
        
        $role = Role::create([
            'name'        => 'Admin',
            'slug'        => 'Admin',
            'description' => 'Administrador',
            'special'     => 'all-access'
        ]);
    }
}
