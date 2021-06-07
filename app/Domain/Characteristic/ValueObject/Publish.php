<?php

namespace App\Domain\Characteristic\ValueObject;

use Exception;

final class Publish
{
    private array $allowedValues = [0, 1];

    /**
     * Ref constructor.
     * @param int $publish
     * @throws Exception
     */
    public function __construct(private int $publish) {
        if (!in_array($this->publish, $this->allowedValues)) {
            throw new Exception('value must be have type int 0 or int 1');
        }
    }

    /**
     * @return int
     */
    public function value(): int
    {
        return $this->publish;
    }

    /**
     * @throws Exception
     */
    public static function of($value): self
    {
        return new self($value);
    }
}
