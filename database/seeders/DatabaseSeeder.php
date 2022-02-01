<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\MethodsPaymentSeeder;
use Database\Seeders\CreateAdminUserSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $seedersArray = [
            RoleSeeder::class,
            MethodsPaymentSeeder::class,
            CreateAdminUserSeeder::class,
        ];

        //call seeders
        foreach ($seedersArray as $seeder) $this->call($seeder);
    }
}
