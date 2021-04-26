<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Suppliers; 

class SuppliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        $supp = range(0, 10);

        foreach ($supp as $valor) { 
            Suppliers::insert([
                'name' => Str::random(10),
                'address' => Str::random(10),
                'email' => Str::random(10). '@gmail.com',
                'phone' => rand(1, 99),
            ]); 
        }
    }
}
