<?php

namespace Akilesh\Grptsk\Block;

use Akilesh\Grptsk\Model\ResourceModel\Hamburger\Collection;
use Magento\Framework\View\Element\Template;

class Display extends Template
{
    /**
     * @var Collection
     */
    private $collection;

    /**
     * Display constructor.
     * @param Template\Context $context
     * @param Collection $collection
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        Collection $collection,
        array $data = []
    ) {
        $this->collection = $collection;
        parent::__construct($context, $data);
    }

    /**
     * @return Collection
     */
    public function getAllEmployee()
    {
        return $this->collection->getData();
    }

    /**
     * @return string
     */
    public function getPostUrl()
    {
        return $this->getUrl('grptsk/save/save');
    }

    /**
     * @return string
     */
    public function getEditPageUrl()
    {
        return $this->getUrl('grptsk/edit/edit');
    }

    /**
     * @return string
     */
    public function getDeleteUrl()
    {
        return $this->getUrl('grptsk/deletebyid/deletebyid');
    }
}