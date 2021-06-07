<?php

namespace App\Domain\Characteristic\Entities;

use App\Domain\Characteristic\ValueObject\Value;

final class CharacteristicValue
{
    /**
     * CharacteristicValue constructor.
     * @param Value $value
     */
    public function __construct(
        private Value $value,
    ) {}

    public function getValue(): Value
    {
        return $this->value;
    }
}
