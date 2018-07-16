<?php
/**
 * Created by PhpStorm.
 * User: ilogix
 * Date: 5/7/18
 * Time: 2:55 PM
 */

namespace Rahul\Customize\Controller\Rewrite\Product;


class View extends \Magento\Catalog\Controller\Product\View
{
    /**
     * @return \Magento\Framework\Controller\Result\Redirect|\Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        //we can add custom code here to override controller
        return parent::execute();
    }
}