<?php 
class License_Block_Form extends Core_Block_Template{

    public function getLicenceRate(){
        return Mage::getModel("license/rate_license")->getCollection();
    }
}