<?php

namespace Akilesh\Grptsk\Api\Data;

use Magento\Framework\Api\ExtensibleDataInterface;

interface HamburgerInterface extends ExtensibleDataInterface
{
    
    public function getFeedback_No();
    
    public function getName();

    
    public function setName($Name);

    
    public function getEmail();

    
    public function setEmail($Email);

    
    public function getMobile();

    public function setMobile($Mobile);

    public function getFeedback();
}