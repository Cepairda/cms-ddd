<?php

namespace App\Domain\Product\ValueObject;

use App\Domain\ValueObjectable;

final class Sku implements ValueObjectable
{
    /**
     * Ref constructor.
     * @param int $sku
     */
    public function __construct(private int $sku) {}

    /**
     * @return int
     */
    public function value(): int
    {
        return $this->sku;
    }

    public static function of($value): self
    {
        return new self($value);
    }
}
