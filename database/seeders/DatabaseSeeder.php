<?php

namespace Database\Seeders;

use App\Infrastructure\Eloquents\EloquentCharacteristic;
use App\Infrastructure\Eloquents\EloquentCharacteristicTranslation;
use App\Infrastructure\Eloquents\EloquentCharacteristicValue;
use App\Infrastructure\Eloquents\EloquentCharacteristicValueTranslation;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //EloquentProduct::factory(10)->create();

        EloquentCharacteristicValue::factory()
            ->count(3)
            ->has(
                EloquentCharacteristicValueTranslation::factory(),
                'translations'
            )
            ->for(
                EloquentCharacteristic::factory()->has(
                    EloquentCharacteristicTranslation::factory(),
                    'translations'
                ),
                'characteristic'
            )
            ->create();

//        EloquentCharacteristicValue::factory()
//            ->count(3)
//            ->for(
//                EloquentCharacteristic::factory(),
//                'characteristic'
//            )
//            ->create();

//        EloquentCharacteristicValue::factory()
//            ->count(3)->create();
    }
}
