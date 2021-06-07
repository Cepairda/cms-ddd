<?php

namespace App\Infrastructure\Eloquents;

use App\Domain\Characteristic\Entities\CharacteristicValue;
use App\Domain\Characteristic\ValueObject\Value;
use Database\Factories\EloquentCharacteristicFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use App\Domain\Domainable;

/**
 * @property int $id
 * @property string $ref
 * @property int $sku
 * @property int $brand_id
 * @property int $category_id
 * @property int $published
 * @property int|float $price
 */
class EloquentCharacteristicValue extends AppEloquent implements Domainable
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'characteristics_value';

    /**
     * @return CharacteristicValue
     */
    public function toDomain(): CharacteristicValue
    {
        return new CharacteristicValue(
            Value::of('TestVal')
        );
    }

    protected static function newFactory(): EloquentCharacteristicFactory
    {
        return EloquentCharacteristicFactory::new();
    }
}
