<?php

class Catalog_Controller_Product extends Core_Controller_Front_Action{
    public function saveAction(){
       $data= $this->getRequest()->getParams('pdata');
    //    print_r($data);
       $productmodel=Mage::getmodel("catalog/product");
       $productmodel->setData($data)->save();
       echo "<pre>";
    //    print_r($productmodel);
    //    die;
    }

    public function formAction(){
      $layout=$this->getLayout();
      $child=$layout->getChild("content");
      $productform=$layout->createBlock("catalog/admin/product/form/form")
            ->setTemplate("product/form.phtml");
      $child->addChild("form",$productform);
      $layout->toHtml();
     }
}