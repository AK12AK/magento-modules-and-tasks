<?php
namespace Akilesh\Grptsk\Model;

use Akilesh\Grptsk\Api\Data\GridInterface;

class Grid extends \Magento\Framework\Model\AbstractModel implements GridInterface
{
   
    const CACHE_TAG = 'feedback_data';

   
    protected $_cacheTag = 'feedback_data';

 
    protected $_eventPrefix = 'feedback_data';

   
    protected function _construct()
    {
        $this->_init('Akilesh\Grptsk\Model\ResourceModel\Grid');
    }
  
    public function getFeedback_No()
    {
        return $this->getData(self::Feedback_No);
    }

    
    public function getName()
    {
        return $this->getData();
    }

    public function setName($Name)
    {
        return $this->setData(TITLE, $Name);
    }

   
    public function getEmail()
    {
        return $this->getData();
    }

 
    public function setEmail($Email)
    {
        return $this->setData(self::CONTENT, $Email);
    }


    public function getMobile()
    {
        return $this->getData();
    }

    public function setMobile($Mobile)
    {
        return $this->setData(self::PUBLISH_DATE, $Mobile);
    }

    public function getFeedback()
    {
        return $this->getData();
    }

}