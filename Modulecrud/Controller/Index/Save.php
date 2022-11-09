<?php
namespace Akilesh\Modulecrud\Controller\Index;

    use Magento\Framework\App\Action\Action;
    use Magento\Framework\App\Action\Context;
    use Magento\Framework\Exception\CouldNotSaveException;
    use Magento\Framework\Exception\LocalizedException;
    use Magento\Framework\Exception\NoSuchEntityException;
    use Magento\Framework\View\Result\PageFactory;

    use Akilesh\Modulecrud\Api\ModelRepositoryInterface;
    use Akilesh\Modulecrud\Api\Data\ModelInterface;

    class Save extends Action

    {
        protected $_pageFactory;
        protected $_ModelRepository;
        protected $_Model;


        public function __construct(
            Context $context,
            PageFactory $pageFactory,
            ModelRepositoryInterface $ModelRepository,
            ModelInterface $ModelInterface
        ) {
            $this->_pageFactory = $pageFactory;
            $this->_ModelRepository=$ModelRepository;
            $this->_Model = $ModelInterface;
            return parent::__construct($context);
        }

        public function execute()
        {
            $data = $this->getRequest()->getParams();
            // $EmpId =$data['emp_id'];
            $title =$data['title'];
            $content =$data['content'];
            $description =$data['description'];
  
            $Model = $this->_Model;
        // $this->_EmployeeModel->setEmpId($EmpId);
      $val1=   $this->_Model->setTitle($title);
      $val2= $this->_Model->setContent($content);
      $val3=$this->_Model->setDescription($description);



        try {
          
            /* Use the resource model to save the model in the DB */
            $this->_ModelRepository->save($Model);
            $this->messageManager->addSuccessMessage("modulecrud saved successfully!");
        } catch (\Exception $exception) {
            var_dump($exception->getMessage());
            die;
            $this->messageManager->addErrorMessage(__("Error saving data"));
        }
    
        /* Redirect back to cars page */
        // $redirect = $this->resultRedirectFactory->create();
        // $redirect->setPath('modulecrud');
        // return $redirect;
        $resultRedirect = $this->resultRedirectFactory->create();
        return $resultRedirect->setPath('modulecrud');
 

        }}
        ?>