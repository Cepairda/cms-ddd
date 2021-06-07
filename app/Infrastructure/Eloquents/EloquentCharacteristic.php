<?php

namespace App\Infrastructure\Eloquents;

use Database\Factories\EloquentCharacteristicFactory;
use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

use App\Domain\Domainable;
use App\Domain\Characteristic\Entities\Characteristic;
use App\Domain\Characteristic\Entities\CharacteristicValue;
use App\Domain\Characteristic\ValueObject\{
    Name,
    Value,
    Publish
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
class EloquentCharacteristic extends AppEloquent implements Domainable, TranslatableContract
{
    use HasFactory;
    use Translatable;

    public $timestamps = false;
    protected $table = 'characteristic';
    public array $translatedAttributes = ['name'];

    /**
     * @return Characteristic
     * @throws Exception
     */
    public function toDomain(): Characteristic
    {
        return new Characteristic(
            Name::of($this->translate('ru')->name),
            new CharacteristicValue(Value::of('Test Value')),
            Publish::of($this->published),
        );
    }

    protected static function newFactory(): EloquentCharacteristicFactory
    {
        return EloquentCharacteristic::new();
    }
}
