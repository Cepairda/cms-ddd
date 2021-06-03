<?php

namespace App\Domain\Product\ValueObject;

final class Money
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
}
