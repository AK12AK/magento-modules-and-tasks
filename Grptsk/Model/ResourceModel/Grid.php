<?php

namespace Akilesh\Grptsk\Model\ResourceModel;


use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Grid extends AbstractDb
{

    protected function _construct()
    {
        $this->_init('feedback_data', 'Feedback_No');
    }
}