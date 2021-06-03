<?php
namespace App\Infrastructure\Eloquents;

use App\Domain\Domainable;
use App\Domain\Product\Entities\Product;
use App\Domain\Product\ValueObject\{
    Ref,
    Sku,
    BrandId,
    CategoryId,
    Publish,
    Money,
};

/**
 * @property int $id
 * @property string $name
 * @property int $price
 * @property int $stock
 */
class EloquentItem extends AppEloquent implements Domainable
{
    protected $table = 'items';

    /**
     * @return Product
     */
    public function toDomain(): Product
    {
        return new Product(
            Ref::of($this->ref),
             Sku $sku,
             BrandId $brandId,
             CategoryId $categoryId,
             Publish $published,
             Money $price
        );
    }
}
