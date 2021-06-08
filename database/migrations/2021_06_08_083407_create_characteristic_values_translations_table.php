<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharacteristicValueSTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characteristic_values_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('characteristic_values_id');
            $table->string('locale')->index();
            $table->string('value')->nullable();
            $table->unique(['characteristic_values_id', 'locale'], 'characteristic_values_id_locale_unique');
            $table->foreign('characteristic_value_id', 'c_v_id')->references('id')->on('characteristic_values')->onDelete('cascade');
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
        Schema::dropIfExists('characteristics_value_translations');
    }
}
