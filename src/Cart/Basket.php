<?php

namespace Cart;

class Basket
{
    private $hasYearlyContract;
    private $total = 0.00;
    private $catalog;
    private $products = [];
    

    function __construct(bool $hasYearlyContract = false)
    {
        $this->hasYearlyContract = $hasYearlyContract;        
    }
    public function beConstructWith(Catalog $catalog)
    {
        $this->catalog = $catalog;

    }

    public function scan($productCode)
    {
        $product = $this->catalog->find($productCode);

        if(array_key_exists($product->productCode, $this->products))
        {
            //throw new InvalidArgumentException("Product has been added already");
            $this->products[$product->productCode] = 1;
        }
        else{
           $this->products[$product->productCode] = 1;
        }
    }

    public function total($isContract)
    {
        foreach ($this->products as $productCode => $volume)
        {
            
            $product = $this->catalog->find($productCode);
            $this->total += $product->price;       
           
        }

        return $this->calDiscount($isContract);
    }

    public function calDiscount($isContract)
    {
        $this->hasYearlyContract = $isContract;
        if ($this->hasYearlyContract)
        {
            $this->total = $this->total * (1 - (10/100));
        }
        else
        {
            $this->total = $this->total * 1.00;
        }
        
        return  $this->total;
    }    

}
