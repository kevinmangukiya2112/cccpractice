<?php

class Banner_Block_Admin_Form extends Core_Block_Template{
    public function getBanner(){
        return Mage::getModel("banner/banner")->load($this->getRequest()->getParams('id',0));
    }
}