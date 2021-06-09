<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Infrastructure\Eloquents\EloquentCharacteristicTranslation;

class EloquentCharacteristicTranslationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EloquentCharacteristicTranslation::class;
    protected array $characteristicsName = [
        'Color',
        'Guarantee',
    ];
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'locale' => 'ru'
        ];
    }
}
