<?php

namespace App\Domain\Characteristic\ValueObject;

final class Name
{
    /**
     * Ref constructor.
     * @param string $name
     */
    public function __construct(private string $name) {}

    /**
     * @return string
     */
    public function value(): string
    {
        return $this->name;
    }

    public static function of($value): self
    {
        return new self($value);
    }
}
