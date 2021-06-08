<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Infrastructure\Eloquents\EloquentCharacteristicValue;

class EloquentCharacteristicValueFactory extends Factory
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
        //return [
        //    'characteristic_id' => $this->faker->randomElement([0, 1])
        //];
        return [
            //'characteristic_id' => $this->faker->randomElement([0, 1])
        ];
    }
}
