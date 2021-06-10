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
class EloquentProduct extends AppEloquent implements Domainable, TranslatableContract
{
    use HasFactory;
    use Translatable;

    protected $table = 'products';
    protected $translationForeignKey = 'product_id';
    public array $translatedAttributes = ['name', 'meta_title', 'meta_description'];

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

    public function characteristics(): BelongsToMany
    {
        return $this->belongsToMany(
            EloquentCharacteristicValue::class,
            'product_characteristic_value',
            'product_id',
            'characteristic_value_id',
        );
    }
}
