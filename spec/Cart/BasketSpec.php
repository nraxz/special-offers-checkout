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

    function it_calculates_the_total_of_a_scanned_product()
    {
        $this->scan('1001');                
        $this->total(false)->shouldReturn(200.00);
    }
    
    function it_calculates_the_total_of_a_scanned_product_with_discount()
    {
        $this->scan('1001');                
        $this->total(true)->shouldReturn(180.00);
    }

    function it_calculates_the_total_of_two_scanned_products()
    {
        $this->scan('1001');
        $this->scan('1002');                
        $this->total(false)->shouldReturn(300.00);
    }

    function it_calculates_the_total_of_two_scanned_products_with_discount()
    {
        $this->scan('1001');
        $this->scan('1002');                
        $this->total(true)->shouldReturn(270.00);
    }

    
    function it_calculates_the_total_of_three_scanned_products_with_discount()
    {
        $this->scan('1001');
        $this->scan('1002');
        $this->scan('1003');
        $this->total(false)->shouldReturn(383.50);
    }
    
    function it_calculates_the_total_of_four_scanned_products()
    {
        $this->scan('1001');
        $this->scan('1002');
        $this->scan('1003');
        $this->scan('1004');
        $this->total(false)->shouldReturn(434.5);
    }
    function it_calculates_the_total_of_four_scanned_products_with_discount()
    {
        $this->scan('1001');
        $this->scan('1002');
        $this->scan('1003');
        $this->scan('1004');
        $this->total(true)->shouldReturn(391.05);
    }
}
