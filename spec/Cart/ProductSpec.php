<?php

namespace spec\Cart;

use Cart\Product;
use PhpSpec\ObjectBehavior;

class ProductSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith(new Product('P001', 'Photography', 200));
    }
    function it_is_initializable()
    {
        $this->beConstructedWith('P001', 'Photography', 200);
        $this->shouldHaveType(Product::class);
    }

    function it_has_a_product_code()
    {
        $this->beConstructedWith('P001', 'Photography', 200);
        $this->productCode()->shouldReturn('P001');        

    }

    function it_has_a_name()
    {
        $this->beConstructedWith('P001', 'Photography', 200);
        $this->name()->shouldReturn('Photography');        

    }

    function it_has_a_price()
    {
        
        $this->beConstructedWith('P001', 'Photography', 200);
        $this->price()->shouldReturn(200);        

    }
}
