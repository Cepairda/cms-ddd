<?php

namespace Database\Seeders;

use App\Infrastructure\Eloquents\EloquentProduct;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        EloquentProduct::factory(10)->create();
    }
}
