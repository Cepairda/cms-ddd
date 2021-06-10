<?php

namespace App\Infrastructure\Eloquents;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Database\Factories\EloquentProductTranslationFactory;

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
    public $timestamps = false;

    protected static function newFactory(): EloquentProductTranslationFactory
    {
        return EloquentProductTranslationFactory::new();
    }
}
