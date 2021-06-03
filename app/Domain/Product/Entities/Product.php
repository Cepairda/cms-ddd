<?php

namespace App\Domain\Product\Entities;

use App\Domain\Product\ValueObject\{
    Ref,
    Sku,
    BrandId,
    CategoryId,
    Publish,
    Money,
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
     * @param Money $price
     */
    public function __construct(
        private Ref $ref,
        private Sku $sku,
        private BrandId $brandId,
        private CategoryId $categoryId,
        private Publish $published,
        private Money $price
    ) {}
}
