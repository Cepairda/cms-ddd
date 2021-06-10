<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Infrastructure\Eloquents\EloquentProductTranslation;

class EloquentProductTranslationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EloquentProductTranslation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'locale' => 'ru',
            'meta_title' => $this->faker->sentence,
            'meta_description' => $this->faker->text,
        ];
    }
}
