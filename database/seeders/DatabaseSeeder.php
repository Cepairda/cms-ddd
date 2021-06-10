<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

use App\Infrastructure\Eloquents\EloquentCharacteristic;
use App\Infrastructure\Eloquents\EloquentCharacteristicTranslation;
use App\Infrastructure\Eloquents\EloquentProduct;
use App\Infrastructure\Eloquents\EloquentProductCharacteristicValue;
use App\Infrastructure\Eloquents\EloquentProductTranslation;
use App\Infrastructure\Eloquents\EloquentCharacteristicValue;
use App\Infrastructure\Eloquents\EloquentCharacteristicValueTranslation;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Clear Tables
         */
       /* Schema::disableForeignKeyConstraints();

        EloquentProduct::truncate();
        EloquentProductTranslation::truncate();
        EloquentCharacteristic::truncate();
        EloquentCharacteristicTranslation::truncate();
        EloquentCharacteristicValue::truncate();
        EloquentCharacteristicValueTranslation::truncate();
        EloquentProductCharacteristicValue::truncate();

        Schema::enableForeignKeyConstraints();*/

        /**
         * Generate Products
         */
 /*       EloquentProduct::factory(50)
            ->has(
                EloquentProductTranslation::factory(),
                'translations'
            )
            ->create();*/

        /**
         * Generate Characteristics with Value,
         */
        $this->call([
            //CharacteristicsWithValuesSeeder::class,
            ProductWithCharacteristicsValueSeeder::class,
        ]);
    }
}
