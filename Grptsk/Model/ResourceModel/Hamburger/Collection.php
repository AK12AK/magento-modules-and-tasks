<?php


namespace Akilesh\Grptsk\Model\ResourceModel\Hamburger;


use Akilesh\Grptsk\Model\Hamburger;
use Akilesh\Grptsk\Model\ResourceModel\Hamburger as HamburgerResourceModel;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Hamburger::class, HamburgerResourceModel::class);
    }
}