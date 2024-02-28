<?php

class Admin_Controller_Catalog_Product extends Core_Controller_Front_Action{
    public function saveAction(){
        $data= $this->getRequest()->getParams('pdata');
     //    print_r($data);
        $productmodel=Mage::getModel("catalog/product");
        $productmodel->setData($data)->save();
        $this->setRedirect("admin/catalog_product/list". "?id=".$productmodel->getId());
     }

     public function deleteAction(){
        $id = $this->getRequest()->getParams('id',0);
        Mage::getModel('catalog/product')->load($id)
            ->delete();
     }
 
     public function formAction()
     {
        $layout = $this->getLayout();
        $child = $layout->getChild('content');
        $layout->getChild('head')->addCss('/skin/css/product/form.css');
        $productForm = $layout->createBlock('catalog/admin_product_form/form')   
            ->setTemplate('catalog/admin/product/form.phtml');
        $child->addChild('form', $productForm);
        $layout->toHtml();
     }
 
 
 
     public function listAction()
     {
         $layout = $this->getLayout();
         $child = $layout->getChild('content');
 
         $productlist = $layout->createBlock('catalog/admin_product/list')
             ->setTemplate('catalog/admin/product/list.phtml');
         $child->addChild('list', $productlist);
         
         $layout->toHtml();
     }
}