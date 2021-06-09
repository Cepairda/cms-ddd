<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Infrastructure\Eloquents\EloquentCharacteristicValueTranslation;

class EloquentCharacteristicValueTranslationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EloquentCharacteristicValueTranslation::class;


    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'value' => 'TestValue',
            'locale' => 'ru'
        ];
    }
}
