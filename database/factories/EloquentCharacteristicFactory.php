<?php

namespace Database\Factories;

use App\Domain\Characteristic\Entities\Characteristic;
use App\Domain\Characteristic\Entities\CharacteristicValue;
use App\Infrastructure\Eloquents\EloquentCharacteristic;
use App\Domain\Characteristic\ValueObject\{
    Name,
    Value,
    Publish,
};
use Illuminate\Database\Eloquent\Factories\Factory;

class EloquentCharacteristicFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EloquentCharacteristic::class;

    /**
     * Define the model's default state.
     *
     * @return array
     * @throws \Exception
     */
    public function definition(): array
    {
        return [
            'published' => $this->faker->randomElement([0, 1])
        ];
    }
}
