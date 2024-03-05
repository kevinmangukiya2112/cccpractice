<?php 

class Admin_Controller_Banner extends Core_Controller_Admin_Action{
    protected $_allowActions=[];

    public function formAction(){
        $layout=$this->getLayout();
        $child=$layout->getChild("content");
        $bannerform=$layout->createBlock("banner/admin_form/form")->setTemplate("banner/admin/form.phtml");
        $child->addChild("bannerform",$bannerform);
        $layout->toHtml();
    }

    public function listAction(){
        $layout=$this->getLayout();
        $child=$layout->getChild("content");
        $head=$layout->getChild("head");
        $head->addCss("/skin/css/banner/table.css");
        $bannerlist=$layout->createBlock("banner/admin_list/list")->setTemplate("banner/admin/list.phtml");
        $child->addChild("bannerlist",$bannerlist);
        $layout->toHtml();
    }

    public function saveAction(){
        $data= $this->getRequest()->getParams('bdata');
        $image=$_FILES['bdata'];
        $filename= $image['name']['image'];
        $tmpname= $image['tmp_name']['image'];
        $dirname='media/banner/'.$filename;
        $data['image']=$filename;
        if(move_uploaded_file($tmpname, $dirname)){
            $bannermodel=Mage::getModel('banner/banner');
            $bannermodel->setData($data)->save();
            $this->setRedirect("admin/banner/list");
        }
    }

    public function deleteAction(){
        $id= $this->getRequest()->getParams('id',0);
        $bannermodel=Mage::getModel('banner/banner')->load($id);
        $bannermodel->delete();
        $this->setRedirect('admin/banner/list');
    }

}