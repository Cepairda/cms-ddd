<?php

namespace App\Infrastructure\Repositories\Product;

use Illuminate\Support\Collection;

use App\Domain\Product\Entities\Product;
use App\Domain\Product\Repositories\ProductRepository;
use App\Domain\Domainable;
use App\Infrastructure\Eloquents\EloquentProductCharacteristicValue;
use App\Infrastructure\ValueObject\Id;

use Exception;

final class EloquentProductRepository implements ProductRepository
{
    /** @var  EloquentProductCharacteristicValue */
    private EloquentProductCharacteristicValue $eloquent;

    /**
     * @param EloquentProductCharacteristicValue $eloquent
     */
    public function __construct(EloquentProductCharacteristicValue $eloquent)
    {
        $this->eloquent = $eloquent;
    }

    /**
     * @param Id $id
     * @return Product
     * @throws Exception
     */
    public function findById(Id $id): Product
    {
        /** @var Domainable $item */

        $item = $this->eloquent->find($id->value());
        if (empty($item)) {
            throw new Exception('Not Found');
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

    public function create(Product $product)
    {
        $this->eloquent->toEloquent();
    }
}
