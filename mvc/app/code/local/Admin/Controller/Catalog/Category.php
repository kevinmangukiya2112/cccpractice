<?php 

class Admin_Controller_Catalog_Category extends Core_Controller_Admin_Action{
    protected $_allowActions=[
    ];
    public function formAction(){
        $layout=$this->getLayout();
        $child=$layout->getChild("content");
        $layout->removeChild('header');
        $layout->removeChild('footer');
        $categoryform=$layout->createBlock("catalog/admin_category_form/form")->setTemplate("catalog/admin/category/form.phtml");
        $child->addChild("categoryform",$categoryform);
        $layout->toHtml();
    }

    public function saveAction(){
        $data=$this->getRequest()->getParams('cdata');
        $categorymodel=Mage::getModel('catalog/category');
        $categorymodel->setData($data)->save();
        // print_r($categorymodel);
        echo "hee";
    }
    
    public function deleteAction(){
        $id=$this->getRequest()->getParams('id',0);
        $categorymodel=Mage::getModel('catalog/category');
        $categorymodel->load($id)->delete();
    }

    public function listAction(){
        $layout= $this->getLayout();
        $child=$layout->getChild('content');
        $categorylist=$layout->createBlock('catalog/admin_category_list/list')->setTemplate('catalog/admin/category/list.phtml');
        $child->addChild('categorylist',$categorylist);
        $layout->toHtml();
    }
}