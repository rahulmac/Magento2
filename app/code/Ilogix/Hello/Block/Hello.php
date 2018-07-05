<?php
namespace Ilogix\Hello\Block;
class Hello extends \Magento\Framework\View\Element\Template
{
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        array $data = []
    )
    {
        parent::__construct($context, $data);
    }

    /**
     * @return string
     * for user side
     */
    public function getMymodule()
    {
        return 'Module Created Successfully';
    }

    public function getModuleAdmin(){
        return 'This is Admin Side Module View';
    }
}
?>