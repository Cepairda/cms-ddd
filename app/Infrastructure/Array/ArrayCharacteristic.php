<?php

namespace App\Infrastructure\Array;

use App\Domain\Characteristic\Entities\Characteristic;
use App\Domain\Domainable;
use App\Domain\Product\Entities\Product;
use App\Domain\Product\ValueObject\{
    Ref,
    Sku,
    BrandId,
    CategoryId,
    Publish,
    Price,
};

/**
 * @property Characteristic $product
 * @property int $name
 * @property int $published
 */
class ArrayCharacteristic implements Domainable
{
    /**
     *
     */
    public function __construct(protected Characteristic $characteristic) {}

    /**
     * @return Product
     */
    public function toDomain(): Product
    {
//        return new Product(
//            Ref::of($this->ref),
//            Sku::of($this->sku),
//            BrandId::of($this->brand_id),
//            CategoryId::of($this->category_id),
//            Publish::of($this->published),
//            Price::of($this->price)
//        );
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'published' => $this->product->getPublished()->value(),
        ];
    }
}
