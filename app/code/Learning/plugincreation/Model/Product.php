<?php
/**
 * Created by PhpStorm.
 * User: ilogix
 * Date: 9/7/18
 * Time: 4:27 PM
 */

namespace Learning\plugincreation\Model;


class Product extends \Magento\Catalog\Model\Product
{
    public function getPrice()
    {
        return parent::getPrice()+10;

    }
}