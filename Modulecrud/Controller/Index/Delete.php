<?php
namespace Akilesh\Modulecrud\Controller\Index;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\Action\Context; 
use Akilesh\Modulecrud\Api\ModelRepositoryInterface;
use Magento\Framework\Api\SearchCriteriaBuilder;
use Magento\Framework\Api\FilterBuilder;
class Delete extends \Magento\Framework\App\Action\Action
{
    protected $_resultPageFactory;
    protected $_ModelRepository;

    protected $searchCriteriaBuilder;
    protected $filterBuilder;
 
    public function __construct(Context $context, ModelRepositoryInterface $ModelRepository,
    FilterBuilder $filterBuilder,SearchCriteriaBuilder $searchCriteriaBuilder,
     \Magento\Framework\View\Result\PageFactory $resultPageFactory)
    {
        $this->_ModelRepository=$ModelRepository;
        $this->_resultPageFactory = $resultPageFactory;
        $this->searchCriteriaBuilder = $searchCriteriaBuilder;
        $this->filterBuilder = $filterBuilder;
        parent::__construct($context);
    }
 
    public function execute()
    {
        $id = $_GET['id'];

        try {
            $this->_ModelRepository->deleteById($id);
            // echo "delete success";
            // echo "Deleted the record with id = $id" . "<br>" . "Go to database and check.";
            // $this->messageManager->addSuccessMessage(__("Data Deleted Successfully."));
        } catch (NoSuchEntityException $e) {
            echo "No such entity exception - " . $e->getMessage();
        } catch (LocalizedException $e) {
            echo "Localized Exception" . $e->getMessage();
        }

        $this->_resultPageFactory->create();
        $resultRedirect = $this->resultRedirectFactory->create();
        $resultRedirect->setPath('modulecrud');
        return $resultRedirect;

      
    }
}
