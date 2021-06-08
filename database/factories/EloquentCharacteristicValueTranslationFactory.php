<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Infrastructure\Eloquents\EloquentCharacteristicValue;

class EloquentCharacteristicValueTranslationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EloquentCharacteristicValue::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'value' => 'TestValue'
        ];
    }
}
