<?php

namespace App\Infrastructure\Eloquents;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Database\Factories\EloquentCharacteristicValueTranslationFactory;

/**
 * @property int $id
 * @property string $ref
 * @property int $sku
 * @property int $brand_id
 * @property int $category_id
 * @property int $published
 * @property int|float $price
 */
class EloquentCharacteristicValueTranslation extends AppEloquent
{
    use HasFactory;

    protected $table = 'characteristic_values_translations';

    protected static function newFactory(): EloquentCharacteristicValueTranslationFactory
    {
        return EloquentCharacteristicValueTranslationFactory::new();
    }
}
