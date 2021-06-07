<?php

namespace App\Domain\Characteristic\Entities;

use App\Domain\Characteristic\ValueObject\{
    Name,
    Value,
    Publish,
};

final class Characteristic
{
    /**
     * Characteristic constructor.
     * @param Name $name
     * @param CharacteristicValue $value
     * @param Publish $published
     */
    public function __construct(
        private Name $name,
        private CharacteristicValue $value,
        private Publish $published,
    ) {}

    public function getName(): Name
    {
        return $this->name;
    }

    public function getValue(): Value
    {
        return $this->value->getValue();
    }

    public function getPublished(): Publish
    {
        return $this->published;
    }
}
