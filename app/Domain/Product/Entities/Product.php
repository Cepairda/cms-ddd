<?php

namespace App\Domain\Product\Entities;

use App\Domain\Product\ValueObject\{
    Ref,
    Sku,
    BrandId,
    CategoryId,
    Publish,
    Price,
};

final class Product
{
    /**
     * Product constructor.
     * @param Ref $ref
     * @param Sku $sku
     * @param BrandId $brandId
     * @param CategoryId $categoryId
     * @param Publish $published
     * @param Price $price
     */
    public function __construct(
        private Ref $ref,
        private Sku $sku,
        private BrandId $brandId,
        private CategoryId $categoryId,
        private Publish $published,
        private Price $price
    ) {}

    public function getRef(): Ref
    {
        return $this->ref;
    }

    public function getSku(): Sku
    {
        return $this->sku;
    }

    public function getBrandId(): BrandId
    {
        return $this->brandId;
    }

    public function getCategoryId(): CategoryId
    {
        return $this->categoryId;
    }

    public function getPublished(): Publish
    {
        return $this->published;
    }

    public function getPrice(): Price
    {
        return $this->price;
    }
}
