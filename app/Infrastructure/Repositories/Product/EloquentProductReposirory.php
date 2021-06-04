<?php

namespace App\Infrastructure\Repositories\Product;

use App\Domain\Product\Entities\Product;
use App\Domain\Product\Repositories\ProductRepository;
use App\Infrastructure\Eloquents\EloquentProduct;
use App\Domain\Domainable;

final class EloquentProductRepository implements ProductRepository
{
    /** @var  EloquentProduct */
    private EloquentProduct $eloquent;

    /**
     * @param EloquentItem $eloquent
     */
    public function __construct(EloquentProduct $eloquent)
    {
        $this->eloquent = $eloquent;
    }

    /**
     * @param Id $id
     * @return Product
     * @throws NotFoundException
     */
    public function findById(Id $id): Product
    {
        /** @var Domainable $item */

        $item = $this->eloquent->find($id->value());
        if (empty($item)) {
            throw new NotFoundException();
        }

        return $item->toDomain();
    }

    /**
     * @return Collection
     */
    public function findAll(): Collection
    {
        return $this->eloquent->orderBy('id')->get()->map(function (Domainable $eloquent) {
            return $eloquent->toDomain();
        });
    }
}
