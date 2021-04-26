<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        $supp = range(0, 20);

        foreach ($supp as $valor) { 
            Product::insert([
                'name' => 'Producto'. $valor,
            ]); 
        }
    }
}
