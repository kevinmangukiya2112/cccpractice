<?php 
class Customer_Controller_List extends Core_Controller_Front_Action{
    public function  listAction(){
        $layout=$this->getLayout();
        $child= $layout->getChild('content');
  
        $categoryform= $layout->createBlock('customer/list')
        ->setTemplate('customer/list.phtml');
        $child->addChild('list', $categoryform);
        $layout->toHtml();
      }

      public function  formAction(){
        $layout=$this->getLayout();
        $child= $layout->getChild('content');

        $categoryform= $layout->createBlock('customer/form')
        ->setTemplate('customer/form.phtml');
        $child->addChild('form', $categoryform);
        $layout->toHtml();
      }
}