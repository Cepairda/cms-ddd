<?php
namespace App\Domain;

interface Domainable
{
    /**
     * @return mixed
     */
    public function toDomain(): mixed;
}
