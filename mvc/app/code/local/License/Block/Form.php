<?php 
class License_Block_Form extends Core_Block_Template{

    public function getLicenceRate(){
        return Mage::getModel("license/rate_license")->getCollection()->addGroupFilter('state');
    }

    public function getUsername(){
        $id=Mage::getSingleton('core/session')->get('session_id');
        if(Mage::getSingleton('core/session')->get('session_id')){
        return Mage::getModel('license/license')->getcollection()->addFieldToFilter('session_id',$id);
        }
    }
}