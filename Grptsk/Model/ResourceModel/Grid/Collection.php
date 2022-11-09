<?php
namespace Akilesh\Grptsk\Model\ResourceModel\Grid;

use Akilesh\Grptsk\Model\Grid;
use Akilesh\Grptsk\Model\ResourceModel\Grid as GridResourceModel;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
       
       $this->_init(Grid::class, GridResourceModel::class);
    }
}