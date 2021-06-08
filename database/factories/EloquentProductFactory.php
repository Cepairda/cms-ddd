<?php

namespace Database\Factories;

use App\Domain\Product\Entities\Product;
use App\Infrastructure\Eloquents\EloquentProduct;
use App\Infrastructure\Array\ArrayCharacteristic;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Domain\Product\ValueObject\{
    Ref,
    Sku,
    BrandId,
    CategoryId,
    Publish,
    Price,
};

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
        $product = new Product(
            Ref::of($this->faker->uuid),
            Sku::of($this->faker->randomNumber(5)),
            BrandId::of($this->faker->randomNumber(1)),
            CategoryId::of($this->faker->randomNumber(1)),
            Publish::of($this->faker->randomElement([0, 1])),
            Price::of($this->faker->randomNumber(3))
        );

        return (new ArrayCharacteristic($product))->toArray();
    }
}
