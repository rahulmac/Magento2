<?php
/**
 * Created by PhpStorm.
 * User: ilogix
 * Date: 9/7/18
 * Time: 3:04 PM
 */

namespace Learning\plugincreation\Plugins;


class Product
{
    public function aftergetName(\Magento\Catalog\Model\Product $product , $name){

            $price = $product->getData('price');

                if($price<60){
                    $name .="So cheap..";
                }else{
                    $name .="So expensive..";
                }
                return $name;
    }
}