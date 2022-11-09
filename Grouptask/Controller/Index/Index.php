<?php
 
namespace Akilesh\Grouptask\Controller\Index;
 
use Magento\Framework\App\Action\Context;
 
class Index extends \Magento\Framework\App\Action\Action
{
    protected $_resultPageFactory;
 
    public function __construct(Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory)
    {
        $this->_resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }
 
    public function execute()
    {
        // print_r('sdfsdf');
        // exit;
        $resultPage = $this->_resultPageFactory->create();
        return $resultPage;
    }
}

