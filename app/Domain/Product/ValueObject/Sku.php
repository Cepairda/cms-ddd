<?php

namespace App\Domain\Product\ValueObject;

final class Sku
{
    /**
     * Ref constructor.
     * @param string $sku
     */
    public function __construct(private string $sku) {}

    /**
     * @return int
     */
    public function value(): int
    {
        return $this->sku;
    }
}
