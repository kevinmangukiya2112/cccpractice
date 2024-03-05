<?php

class Catalog_Controller_Product extends Core_Controller_Front_Action{

    public function viewAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')->addJs('js/page.js');
        $layout->getChild('head')->addJs('js/head.js');
        $layout->getChild('head')->addCss('css/page.css');
        $layout->getChild('head')->addCss('css/head.css');
        $child = $layout->getChild('content');
        $productlist = $layout->createBlock('catalog/product_view/list')
            ->setTemplate('catalog/product/view.phtml');
        $child->addChild('list', $productlist);
        $layout->toHtml();
    }
}