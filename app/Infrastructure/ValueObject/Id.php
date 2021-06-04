<?php

namespace App\Infrastructure\ValueObject;

abstract class Id
{
    /**
     * @param int $value
     */
    private function __construct(protected int $value) {}

    /**
     * @return int
     */
    public function value(): int
    {
        return $this->value;
    }

    /**
     * @param Id $id
     * @return bool
     */
    public function equals(self $id): bool
    {
        return $this->value === $id->value;
    }

    /**
     * @param int $value
     * @return static
     */
    public static function of(int $value): static
    {
        return new static($value);
    }
}
