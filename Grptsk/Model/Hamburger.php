<?php
namespace Akilesh\Grptsk\Model;

use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\Model\AbstractModel;
use Akilesh\Grptsk\Api\Data\HamburgerInterface;
use Akilesh\Grptsk\Model\ResourceModel\Hamburger as ResourceModel;

/**
 * Class Hamburger
 */
class Hamburger extends AbstractModel implements
    HamburgerInterface,
    IdentityInterface
{
    const CACHE_TAG = 'feedback_data';

    /**
     * Init
     */
    protected function _construct() // phpcs:ignore PSR2.Methods.MethodDeclaration
    {
        $this->_init(ResourceModel::class);
    }

    /**
     * @inheritDoc
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getFeedback_No()];
    }

    public function getFeedback_No()
    {
        return $this->getData('Feedback_No');
    }
    public function getName()
    {
        return $this->getData('Name');
    }
    public function setName($Name)
    {
        return $this->setData('name', $Name);
    }
    public function getEmail()
    {
        return $this->getData('Email');
    }
    public function setEmail($Email)
    {
        return $this->setData('Email', $Email);
    }
    public function getMobile()
    {
        return $this->getData('Mobile');
    }
    public function setMobile($Mobile)
    {
        return $this->setData('Mobile', $Mobile);
    }

    public function getFeedback()
    {
        return $this->getData();
    }
}
