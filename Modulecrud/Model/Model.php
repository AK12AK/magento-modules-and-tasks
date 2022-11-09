<?php

namespace Akilesh\Modulecrud\Model;

use Akilesh\Modulecrud\Api\Data\ModelInterface;

class Model extends \Magento\Framework\Model\AbstractModel implements
    \Akilesh\Modulecrud\Api\Data\ModelInterface
{

    protected function _construct()
    {
        $this->_init('Akilesh\Modulecrud\Model\ResourceModel\Model');
    }

    public function getId()
    {
        return $this->_getData('id');
    }

    public function setId($id)
    {
        $this->setData('id', $id);
    }

    public function getTitle()
    {
        return $this->_getData('title');
    }


    public function setTitle($title)
    {
        $this->setData('title', $title);
    }

    public function getContent()
    {
        return $this->_getData('content');
    }

    public function setContent($content)
    {
        $this->setData('content', $content);
    }


    public function getDescription()
    {
        return $this->_getData('description');
    }


    public function setDescription($description)
    {
        $this->setData('description', $description);
    }

}