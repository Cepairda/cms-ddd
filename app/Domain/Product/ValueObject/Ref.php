<?php

namespace App\Domain\Product\ValueObject;

final class Ref
{
    /**
     * Ref constructor.
     * @param string $ref
     */
    public function __construct(private string $ref) {}

    /**
     * @return int
     */
    public function value(): int
    {
        return $this->ref;
    }
}
