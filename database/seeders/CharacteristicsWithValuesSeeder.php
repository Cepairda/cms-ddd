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
            $characteristic = new EloquentCharacteristic();
            $characteristic->save();
            $characteristicTranslation = new EloquentCharacteristicTranslation(['locale' => 'ru', 'name' => $characteristicName]);
            $characteristic->translation()->save($characteristicTranslation);

            foreach ($characteristicValues as $characteristicValue) {
                $characteristicValue = new EloquentCharacteristicValue();
                $characteristicValue->characteristic()->associate($characteristic);
                $characteristicValue->save();
                $characteristicValueTranslation = new EloquentCharacteristicValueTranslation(['locale' => 'ru', 'value' => $characteristicValue]);
                $characteristicValue->translation()->save($characteristicValueTranslation);
            }
        }
    }
}
