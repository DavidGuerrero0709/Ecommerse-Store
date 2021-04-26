<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product__orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_number');
            $table->integer('amount');
            $table->date('order_date');
            $table->text('description_order');
            $table->enum('priority', ['Hight', 'Normal']);
            $table->string('client_name', 100);
            $table->string('client_address', 100);
            $table->string('client_email', 80);
            $table->integer('client_phone');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product__orders');
    }
}
