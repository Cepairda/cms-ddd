<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Domain\Product\Repositories\ProductRepository;
use App\Infrastructure\Repositories\Product\EloquentProductRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * @return void
     */
    public function register(): void
    {
        $this->registerProductRepository();
    }

    /**
     * @return void
     */
    private function registerProductRepository(): void
    {
        $this->app->bind(ProductRepository::class, EloquentProductRepository::class);
    }
}
