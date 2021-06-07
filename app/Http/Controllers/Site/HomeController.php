<?php

namespace App\Http\Controllers\Site;

use App\Domain\Product\Repositories\ProductRepository;
use App\Http\Controllers\Controller;


class HomeController extends Controller
{
    public function index(ProductRepository $products)
    {
        foreach ($products->findAll() as $product) {
            echo $product->getPrice()->value();
        }
    }
}
