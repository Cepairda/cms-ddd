<?php

namespace App\Domain;

interface ValueObjectable
{
    /**
     * @param $value
     * @return self
     */
    public static function of($value): self;
}
