<?php

namespace App\Domain\Product\ValueObject;

final class Price
{
    /**
     * Ref constructor.
     * @param int|float $price
     */
    public function __construct(private int|float $price) {}

    /**
     * @return int|float
     */
    public function value(): int|float
    {
        return $this->price;
    }

    public static function of(int|float $value): self
    {
        return new self($value);
    }
}
