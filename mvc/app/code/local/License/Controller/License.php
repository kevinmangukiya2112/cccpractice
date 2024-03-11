<?php

class License_Controller_License extends Core_Controller_Admin_Action{

    public function formAction(){
        $layout=$this->getLayout();
        $child=$layout->getChild("content");
        $form=$layout->createBlock("license/form")->setTemplate("license/form.phtml");
        $child->addChild("form",$form);
        $layout->toHtml();
    }


    public function addAction(){
        $session_id=Mage::getSingleton("core/session")->getId();
        $data= $this->getRequest()->getParams("cdata");
        $username=$data['user_name'];
        $data['session_id']=$session_id;
        Mage::getSingleton('core/session')->set('user_name', $username);
        Mage::getModel("license/license")->setData($data)->save();
        $this->setRedirect('license/license/list');
    }

    public function listAction(){
        $layout=$this->getLayout();
        $child=$layout->getChild('content');
        $list=$layout->createBlock('license/list')->setTemplate('license/list.phtml');
        $child->addChild("list", $list);
        $layout->toHtml();
    }

    public function adminlistAction(){
        $layout=$this->getLayout();
        $child=$layout->getChild('content');
        $list=$layout->createBlock('license/admin_list')->setTemplate('license/admin/list.phtml');
        $child->addChild("list", $list);
        $layout->toHtml();
    }

    public function deleteAction(){
        $id=$this->getRequest()->getParams('id',0);
        $licensemodel=Mage::getModel('license/license');
        $licensemodel->load($id)->delete();
        $this->setRedirect('license/license/adminlist');
    }
}