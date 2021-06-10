<?php

namespace App\Infrastructure\Eloquents;

use Database\Factories\EloquentProductFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

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
class EloquentProductCharacteristicValue extends AppEloquent implements Domainable
{
    protected $table = 'product_characteristic_value';

    /**
     * @return Product
     */
    public function toDomain(): Product
    {

    }
}
