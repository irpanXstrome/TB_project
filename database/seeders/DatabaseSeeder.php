<?php

namespace Database\Seeders;

use App\Models\CustomerBillRecording;
use App\Models\CustomerPaymentHistory;
use App\Models\Customers;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\ImageData;
use App\Models\Users;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $customerCount = 100;
        Users::factory()->create([
            'name' => 'Irpan',
            'username' => 'irpan.n',
        ]);
        Users::factory($customerCount)->create();
        Customers::factory($customerCount-1)->create();
        CustomerBillRecording::factory($customerCount-1)->create();
        for ($i = 0;$i < $customerCount;$i++){
            CustomerPaymentHistory::factory(mt_rand(1,3))->create();
            ImageData::factory(mt_rand(3,4))->create();
        }


    }
}
