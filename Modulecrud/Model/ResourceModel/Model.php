<?php

namespace Akilesh\Modulecrud\Model\ResourceModel;

class Model extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected $_idFieldName = 'id';

    protected function _construct()
    {
        $this->_init('Schemadb','id');
    }
}