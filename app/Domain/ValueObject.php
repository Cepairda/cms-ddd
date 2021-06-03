<?php

namespace App\Domain;

interface ValueObject
{
    /**
     * @param mixed $value
     * @return static
     */
    public static function of(mixed $value): static;
}
