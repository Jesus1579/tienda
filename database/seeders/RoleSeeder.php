<?php

namespace Database\Seeders;
use Spatie\Permission\Models\Role;

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $rolesArray=[
            ['name' => 'admin'],
            ['name' => 'employees'],
            ['name' => 'buyers'],
            ['name' => 'sellers'],
        ];
        foreach ($rolesArray as $role) {
            Role::firstOrCreate(['name' => $role['name']]);
        }
        //rolesArray
    }
}
