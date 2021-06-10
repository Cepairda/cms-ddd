<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;

use App\Infrastructure\Eloquents\EloquentProduct;

class EloquentProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EloquentProduct::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
//        $product = new Product(
//            Ref::of($this->faker->uuid),
//            Sku::of($this->faker->randomNumber(5)),
//            BrandId::of($this->faker->randomNumber(1)),
//            CategoryId::of($this->faker->randomNumber(1)),
//            Publish::of($this->faker->randomElement([0, 1])),
//            Price::of($this->faker->randomNumber(3))
//        );
//
//        return (new ArrayProduct($product))->toArray();

        return [
            'ref' => $this->faker->uuid,
            'sku' => $this->faker->randomNumber(5),
            'brand_id' => $this->faker->randomNumber(1),
            'category_id' => $this->faker->randomNumber(1),
            'published' => $this->faker->randomElement([0, 1]),
            'price' => $this->faker->randomNumber(3),
        ];
    }
}
