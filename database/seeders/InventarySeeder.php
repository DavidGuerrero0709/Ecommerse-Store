<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Inventaries;
use Illuminate\Support\Str;

class InventarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $supp = range(0, 20);

        foreach ($supp as $valor) { 
            Inventaries::insert([
                'available_amount' => rand(1, 9),
            ]); 
        }
    }
}
