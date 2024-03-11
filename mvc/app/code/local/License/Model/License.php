<?php 
 class License_Model_License extends Core_Model_Abstract{
protected $type='';
    public function init(){
        $this->modelClass = "license/license";
        $this->resourceClass = "License_Model_Resource_License";
        $this->collectionClass = "License_Model_Resource_Collection_License";
    }

    protected function _beforesave(){
        $total=0;
        if(!isset ($this->_data["created_at"])){
            $this->_data["created_at"]=date("Y-m-d H:i:s");
        }
        $this->_data['licence_type']['LL']=isset($this->_data['licence_type']['LL'])?$this->_data['licence_type']['LL']:'';
        $this->_data['licence_type']['DL']=isset($this->_data['licence_type']['DL'])?$this->_data['licence_type']['DL']:'';
        if($this->_data['licence_type']['DL']=='DL'){
            $this->type='DL';
            $total+=$this->getrate()->getRate();
        }
        if($this->_data['licence_type']['LL']=='LL'){
            $this->type='LL';
            $total+=$this->getrate()->getRate();
        }
        $data=implode(',',$this->_data['licence_type']);
        $this->addData('total_rate',$total);
        $this->addData('licence_type',$data);
    }

    public function getrate(){
        return Mage::getModel('license/rate_license')->getcollection()
        ->addFieldToFilter('state',$this->_data['state'])
        ->addFieldToFilter('licence_type',$this->type)->getFirstItem();
    }

 }