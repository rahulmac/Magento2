<?php
/**
 * Created by PhpStorm.
 * User: ilogix
 * Date: 9/7/18
 * Time: 3:57 PM
 */

namespace Learning\plugincreation\Observer;


use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class Product implements ObserverInterface
{
    public function execute(Observer $observer)
    {
        $collection = $observer->getEvent()->getData('collection');

        foreach ($collection as $product){
            $price = $product->getData('price');
            $name = $product->getData('name');
            if($price<60){
                $name .=" Observer";
            }else{
                $name .=" Observer";
            }
            $product->setData('name',$name);
        }
    }
}