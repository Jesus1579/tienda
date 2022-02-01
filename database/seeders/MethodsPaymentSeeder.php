<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MethodPayment;

class MethodsPaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $methodArray=[
            ['name' => 'cash'],
            ['name' => 'creditcard'],
            ['name' => 'transfer'],
            ['name' => 'paypal'],
        ];
        foreach ($methodArray as $method) {
            MethodPayment::firstOrCreate(['name' => $method['name']]);
        }
    }
}
