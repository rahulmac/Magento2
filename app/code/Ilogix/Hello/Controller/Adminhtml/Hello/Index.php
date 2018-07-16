<?php
namespace Ilogix\Hello\Controller\Adminhtml\Hello;


use Magento\Backend\App\Action;

class Index extends \Magento\Backend\App\Action
{
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $resultPageFactory;
    public function __construct(Action\Context $context,\Magento\Framework\View\Result\PageFactory $resultPageFactory)
    {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }
    public function execute()
    {
        // TODO: Implement execute() method.
        return $resultPage = $this->resultPageFactory->create();
    }
}