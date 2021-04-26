<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductOrders;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ProductOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $supp = range(0, 15);

        foreach ($supp as $valor) { 
            ProductOrders::insert([
                'order_number' => 'AC-'.Str::random(10). $valor,
                'amount' => rand(1,9),
                'order_date' => Carbon::now()->addDays(random_int(1,20)),
                'description_order' => Str::random(10),
                'client_name' => Str::random(10),
                'client_address' => Str::random(10),
                'client_email' => Str::random(10),
                'client_phone' => rand(1, 200),
            ]); 
        }
    }
}
