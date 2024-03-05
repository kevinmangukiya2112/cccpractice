<?php

class Catalog_Block_Admin_Category_List extends Core_Block_Template
{
    public function getCategory()
    {
        return(Mage::getModel("catalog/category")
            ->load($this->getRequest()->getParams('id',1)));
    }

    public function getProduct()
    {
        $id = $this->getCategory()->getCategoryId();
        if ($id) {
            $product = Mage::getModel('catalog/product')->getCollection()->addFieldToFilter('category_id', ['eq' => $id]);
                return $product;
        }
        elseif($id===''){
            $product = Mage::getModel('catalog/product')->getCollection();
                return $product;
        }
    }
}