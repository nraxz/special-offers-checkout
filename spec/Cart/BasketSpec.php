<?php

namespace spec\Cart;

use Cart\Basket;
use PhpSpec\ObjectBehavior;

class BasketSpec extends ObjectBehavior
{
    private $products = [];

    public function __construct(array $products)
    {
        $this->products = array_reduce($products, function($array, $product)
        {
            $array[$product->productCode()] = $product;
            return $array;
        }, []);
    }

    public function find($productCode)
    {
        if(! isset($this->products[$productCode]))
        {
            throw new ProductNotFoundInCatalogException;

        }

        return $this->products[$productCode];
    }
}
