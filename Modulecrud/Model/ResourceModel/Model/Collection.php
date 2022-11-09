<?php
namespace Akilesh\Modulecrud\Model\ResourceModel\Model;

use Akilesh\Modulecrud\Model\Model as Model;
use Akilesh\Modulecrud\Model\ResourceModel\Model as ResourceModel;


class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct() // phpcs:ignore PSR2.Methods.MethodDeclaration
     {
        $this->_init(Model::class, ResourceModel::class);
    }
}