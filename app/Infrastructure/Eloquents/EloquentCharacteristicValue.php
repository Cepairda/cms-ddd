<?php

namespace App\Infrastructure\Eloquents;

use Database\Factories\EloquentCharacteristicValueFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

use App\Domain\Characteristic\Entities\CharacteristicValue;
use App\Domain\Characteristic\ValueObject\Value;
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
class EloquentCharacteristicValue extends AppEloquent implements Domainable, TranslatableContract
{
    use HasFactory;
    use Translatable;

    protected $table = 'characteristic_values';
    protected $translationForeignKey = 'characteristic_value_id';
    public array $translatedAttributes = ['value'];

    /**
     * @return CharacteristicValue
     */
    public function toDomain(): CharacteristicValue
    {
        return new CharacteristicValue(
            Value::of('TestVal')
        );
    }

    protected static function newFactory(): EloquentCharacteristicValueFactory
    {
        return EloquentCharacteristicValueFactory::new();
    }

    public function characteristic()
    {
        return $this->belongsTo(EloquentCharacteristic::class);
    }
}
