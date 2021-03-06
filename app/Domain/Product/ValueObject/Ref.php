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
     * @return string
     */
    public function value(): string
    {
        return $this->ref;
    }

    public static function of($value): self
    {
        return new self($value);
    }
}
