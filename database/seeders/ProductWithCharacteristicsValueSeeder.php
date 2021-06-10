<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Infrastructure\Eloquents\EloquentProduct;
use App\Infrastructure\Eloquents\EloquentCharacteristicValue;
use App\Infrastructure\Eloquents\EloquentProductCharacteristicValue;

class ProductWithCharacteristicsValueSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    public function run()
    {
        $products = EloquentProduct::get();
        $characteristicsValue = EloquentCharacteristicValue::get();

        foreach ($products as $product) {
            /**
             * Generate random Characteristics for each Product
             */
            $randomCharacteristicsValue = $characteristicsValue->random(rand(1, $characteristicsValue->count()));

            foreach ($randomCharacteristicsValue as $characteristicValue) {
                EloquentProductCharacteristicValue::create(
                    [
                        'product_id' => $product->id,
                        'characteristic_value_id' => $characteristicValue->id
                    ]
                );
            }
        }
    }
}
