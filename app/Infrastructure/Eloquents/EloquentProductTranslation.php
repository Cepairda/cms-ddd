<?php

namespace App\Infrastructure\Eloquents;

use Database\Factories\EloquentCharacteristicFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @property int $id
 * @property string $ref
 * @property int $sku
 * @property int $brand_id
 * @property int $category_id
 * @property int $published
 * @property int|float $price
 */
class EloquentProductTranslation extends AppEloquent
{
    use HasFactory;

    protected $table = 'products_translations';

    protected static function newFactory(): EloquentCharacteristicFactory
    {
        return EloquentCharacteristicFactory::new();
    }
}
