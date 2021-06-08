<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductCharacteristicValueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_characteristic_value', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');
            $table->integer('characteristic_value_id');
            $table->unique(['product_id', 'characteristic_value_id'], 'product_characteristic_value_id_unique');
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
        Schema::dropIfExists('product_characteristic_value');
    }
}
