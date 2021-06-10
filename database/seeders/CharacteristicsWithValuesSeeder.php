<?php

namespace Database\Seeders;

use App\Infrastructure\Eloquents\EloquentCharacteristic;
use App\Infrastructure\Eloquents\EloquentCharacteristicTranslation;
use App\Infrastructure\Eloquents\EloquentCharacteristicValue;
use App\Infrastructure\Eloquents\EloquentCharacteristicValueTranslation;
use Illuminate\Database\Seeder;

class CharacteristicsWithValuesSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    protected array $characteristicsWithValue = [
        'Цвет' => [
            'Белый',
            'Черный',
            'Зеленый',
            'Синий',
            'Фиолетовый',
            'Красный',
            'Оранжевый',
            'Желтый'
        ],
        'Гарантия' => [
            '12 месяцев',
            '24 месяца',
            '36 месяцев',
        ],
        'Материал' => [
            'Латунь',
            'Нержавеющая сталь',
            'Аллюминий',
            'Чугун',
        ],
        'Диаметр' => [
            '30мм',
            '45мм',
            '60мм',
            '80мм',
        ],
    ];

    public function run()
    {
        foreach ($this->characteristicsWithValue as $characteristicName => $characteristicValues) {
            $characteristic = EloquentCharacteristic::create();
            $characteristicTranslation = new EloquentCharacteristicTranslation(['locale' => 'ru', 'name' => $characteristicName]);
            $characteristic->translation()->save($characteristicTranslation);

            foreach ($characteristicValues as $characteristicValue) {
                $value = new EloquentCharacteristicValue();
                $value->characteristic()->associate($characteristic)->save();
                $characteristicValueTranslation = new EloquentCharacteristicValueTranslation(['locale' => 'ru', 'value' => $characteristicValue]);
                $value->translation()->save($characteristicValueTranslation);
            }
        }
    }
}
