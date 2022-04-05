<?php

namespace spec\Cart;

use Cart\Catalog;
use Cart\Product;
use PhpSpec\ObjectBehavior;

class CatalogSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith([
            new Product('1001', 'Forest Tea', 200),
            new Product('1002', 'Floor Plan', 100),
            new Product('1003', 'Gas Certificates', 83.50),
            new Product('1004', 'EICR Certificates', 51.00)
        ]);

    }
    function it_is_initializable()
    {
        $this->shouldHaveType(Catalog::class);
        
    }

    function it_should_find_a_product_by_product_code()
    {
        $this->find('1001')->shouldReturnAnInstanceOf(Product::class);
    }
}
