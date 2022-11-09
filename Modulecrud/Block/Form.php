<?php
namespace Akilesh\Modulecrud\Block;

use \Magento\Framework\View\Element\Template;
use \Magento\Framework\View\Element\Template\Context;
use Akilesh\Modulecrud\Model\ResourceModel\Model\CollectionFactory as ModelCollectionFactory;
use Akilesh\Modulecrud\Model\ModelFactory;
use Akilesh\Modulecrud\Api\ModelRepositoryInterface;
use Magento\Framework\Api\SearchCriteriaBuilder;
use Magento\Framework\Api\FilterBuilder;

class Form extends \Magento\Framework\View\Element\Template
{
    protected $searchCriteriaBuilder;
    protected $filterBuilder;
    protected $_ModelCollectionFactory = null;
    protected $ModelFactory;
    protected $_ModelRepository;


    public function __construct(
        Context $context,
        ModelCollectionFactory $ModelCollectionFactory,ModelRepositoryInterface $ModelRepository,
        FilterBuilder $filterBuilder,SearchCriteriaBuilder $searchCriteriaBuilder,
        ModelFactory $ModelFactory,
        array $data = []
    ) {
        $this->ModelFactory = $ModelFactory;
        $this->_ModelRepository=$ModelRepository;
        $this->searchCriteriaBuilder = $searchCriteriaBuilder;
        $this->filterBuilder = $filterBuilder;
        $this->_ModelCollectionFactory  = $ModelCollectionFactory;
        parent::__construct($context, $data);
    }

    public function getAddCarPostUrl() {

        return $this->getUrl('modulecrud/index/save');
    }
    public function getDeleteUrl() {

      //  print_r($data);exit;
        return $this->getUrl('modulecrud/index/delete');
    }

    // public function getCollection()
    // {
    //     $ModelCollection = $this->_ModelCollectionFactory ->create();
    //     $ModelCollection->addFieldToSelect('*')->load();
    //     return $ModelCollection->getItems();
    // }
    public function getalldata()
    {
        // $objectManager=\Magento\Framework\App\ObjectManager::getInstance();
        $searchCriteriaBuilder = $this->searchCriteriaBuilder->create();
        // $searchCriteria = $searchCriteriaBuilder->addFilter('Id','%%','like')->create();
        $list = $this->_ModelRepository->getList($searchCriteriaBuilder);
        return $list->getItems();
    }
}
