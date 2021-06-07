<?php

namespace App\Infrastructure\Eloquents;

use Database\Factories\EloquentProductFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
 * @property int $id
 * @property string $ref
 * @property int $sku
 * @property int $brand_id
 * @property int $category_id
 * @property int $published
 * @property int|float $price
 */
class EloquentProduct extends AppEloquent implements Domainable
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'products';

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

    protected static function newFactory(): EloquentProductFactory
    {
        return EloquentProductFactory::new();
    }
}
