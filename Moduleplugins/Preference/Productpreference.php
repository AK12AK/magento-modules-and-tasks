<?php
 
namespace Akilesh\Moduleplugins\Preference;
 
class Productpreference extends \Magento\Catalog\Model\Product
{    
    public function getName()
    {        
        return "Akilesh"." ".$this->_getData(self::NAME);
    }
}
?>