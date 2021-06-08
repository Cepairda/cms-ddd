<?php

namespace App\Infrastructure\Eloquents;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Database\Factories\EloquentCharacteristicTranslationFactory;

/**
 * @property int $id
 * @property string $ref
 * @property int $sku
 * @property int $brand_id
 * @property int $category_id
 * @property int $published
 * @property int|float $price
 */
class EloquentCharacteristicTranslation extends AppEloquent
{
    use HasFactory;

    protected $table = 'characteristics_translations';

    protected static function newFactory(): EloquentCharacteristicTranslationFactory
    {
        return EloquentCharacteristicTranslationFactory::new();
    }
}
