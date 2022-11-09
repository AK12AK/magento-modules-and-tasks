<?php
namespace Akilesh\Grptsk\Controller\Adminhtml\Grid;
use Magento\Framework\Controller\ResultFactory;
class Edit extends \Magento\Backend\App\Action
{
    
    public function execute()
    {
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        return $resultPage;
    }
}?>