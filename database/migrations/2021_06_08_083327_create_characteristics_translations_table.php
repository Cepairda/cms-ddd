<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharacteristicsTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characteristics_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('characteristic_id');
            $table->string('locale')->index();
            $table->string('name')->nullable();
            $table->unique(['characteristic_id', 'locale']);
            $table->foreign('characteristic_id')->references('id')->on('characteristics')->onDelete('cascade');

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
        Schema::dropIfExists('characteristics_translations');
    }
}
