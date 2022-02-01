<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'jesus',
            'email' => 'admin@example.com',
            'password' => bcrypt('12345678')
        ]);

        $user->assignRole('admin');
    }
}
