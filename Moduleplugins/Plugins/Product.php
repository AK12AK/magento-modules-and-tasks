<?php
namespace Akilesh\Moduleplugins\Plugins;

class Product
{
    public function aftergetName(\Magento\Catalog\Model\Product $product ,$name)
    {
        return  "Akilesh"." ".$name;
        // $price=$product->getData('price');
        // if($price<30)
        // return "cheap"." ".$name;
        // else
        // return "good"." ".$name; 
    }
}