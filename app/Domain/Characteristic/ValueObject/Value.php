<?php

namespace App\Domain\Characteristic\ValueObject;

final class Value
{
    /**
     * Ref constructor.
     * @param string $value
     */
    public function __construct(private string $value) {}

    /**
     * @return string
     */
    public function value(): string
    {
        return $this->value;
    }

    public static function of($value): self
    {
        return new self($value);
    }
}
