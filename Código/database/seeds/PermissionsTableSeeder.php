<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
            'name'          => 'Visualizar fotografías',
            'slug'          => 'fotos.index',
            'description'   => 'Visualizar lista de fotografías'
        ]);
    }
}
