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
        $data= $this->getRequest()->getParams("cdata");
        $ltype=$this->getRequest()->getParams("type");
        if($ltype['ll']=='on' && $ltype['dl']=='on'){
            $data['license_type']='ll';
            $data['license_type']='dl';
        }
        elseif($ltype['dl']== 'on' && $ltype['ll']!=='on'){
            $data['type']= 'dl';
        }
        else{
            $data['type']= 'll';
        }
        print_r($data);
        $data=Mage::getModel("license/license")->setData($data)->save ();
        Mage::getSingleton("core/session")->set('session_id',$data->getId());
        Mage::getSingleton('core/session')->set('username',$data->getUserName());
    }
}