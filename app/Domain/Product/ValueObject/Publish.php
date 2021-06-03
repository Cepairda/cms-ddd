<?php

namespace App\Domain\Product\ValueObject;

final class Publish
{
    private array $allowedValues = [0, 1];

    /**
     * Ref constructor.
     * @param int $publish
     */
    public function __construct(private int $publish) {
        if (!in_array($this->publish, $this->allowedValues)) {
            throw new \Exception('value must be have type int 0 or int 1');
        }
    }

    /**
     * @return int
     */
    public function value(): int
    {
        return $this->publish;
    }
}
