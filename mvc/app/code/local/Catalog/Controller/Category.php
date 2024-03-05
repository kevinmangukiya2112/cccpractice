<?php

class Catalog_Controller_Category extends Core_Controller_Front_Action{
    public function viewAction(){
        $layout= $this->getLayout();
        $child=$layout->getChild('content');
        $categorylist=$layout->createBlock('catalog/category_view/list')->setTemplate('catalog/category/view.phtml');
        $child->addChild('categorylist',$categorylist);
        $layout->toHtml();
    }

    public function viewproductAction(){
        $layout= $this->getLayout();
        $child=$layout->getChild('content');
        $productlist=$layout->createBlock('catalog/category_view/list')->setTemplate('catalog/category/product.phtml');
        $child->addChild('viewproduct',$productlist);
        $layout->toHtml();
    }
}