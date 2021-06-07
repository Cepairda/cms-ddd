<?php

namespace App\Infrastructure\Array;

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
 * @property Product $product
 * @property int $id
 * @property string $ref
 * @property int $sku
 * @property int $brand_id
 * @property int $category_id
 * @property int $published
 * @property int|float $price
 */
class ArrayProduct implements Domainable
{
    /**
     *
     */
    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    /**
     * @return Product
     */
    public function toDomain(): Product
    {
        return new Product(
            Ref::of($this->ref),
            Sku::of($this->sku),
            BrandId::of($this->brand_id),
            CategoryId::of($this->category_id),
            Publish::of($this->published),
            Price::of($this->price)
        );
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'ref' => $this->product->getRef()->value(),
            'sku' => $this->product->getSku()->value(),
            'brand_id' => $this->product->getBrandId()->value(),
            'category_id' => $this->product->getCategoryId()->value(),
            'published' => $this->product->getPublished()->value(),
            'price' => $this->product->getPrice()->value(),
        ];
    }
}
