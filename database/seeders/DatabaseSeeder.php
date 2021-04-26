<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Suppliers;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {

        $this->truncateTables([
            'Suppliers',
            'products',
            'product__orders',
            'inventary'
        ]);

        $this->call([
            SuppliersTableSeeder::class,
            ProductSeeder::class,
            ProductOrderSeeder::class,
            InventarySeeder::class
        ]);
    }

    protected function truncateTables(array $tables) {
        DB::statement('SET FOREIGN_KEY_CHECKS =0;');
        foreach ($tables as $table) :
        DB::table($table)->truncate();
        endforeach;
        DB::statement('SET FOREIGN_KEY_CHECKS =1;');
    }
}
