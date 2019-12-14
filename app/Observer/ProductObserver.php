<?php
 
namespace App\Observer;
 
use App\Product;
 
class ProductObserver
{
    public function creating(Product $product)
    {	

		$product->name = strtoupper($product->name);

        $tax = .20;
 
        if ($product->quantity < 10) {
            $product->price += $product->price * $tax;
        } else if ($product->quantity >= 10) {
            $product->price += $product->price * ($tax / 2);
        }
    }

    public function updating(Product $product)
    {	
    	$product->name = strtoupper($product->name);
    	 
        $tax = .20;
 
        if ($product->quantity < 10) {
            $product->price += $product->price * $tax;
        } else if ($product->quantity >= 10) {
            $product->price += $product->price * ($tax / 2);
        }
    }
}