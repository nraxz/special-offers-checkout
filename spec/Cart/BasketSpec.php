<?php

namespace spec\Cart;

use Cart\Basket;
use Cart\Product;
use Cart\Catalog;
use PhpSpec\ObjectBehavior;

class BasketSpec extends ObjectBehavior
{
    function let()
    {

        $this->beConstructWith(
            new Catalog([
                new Product('1001', 'Photography', 200),
                new Product('1002', 'Floorpaln', 100),
                new Product('1003', 'Gas Cirtificates', 83.50),
                new Product('1004', 'EICR Certificates', 51.00)
            ])
        );      
    }
    
    function it_is_initializable()
    {
        $this->shouldHaveType(Basket::class);
    }   
}
