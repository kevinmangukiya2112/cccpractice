<?php

class Banner_Model_Resource_Banner extends Core_Model_Resource_Abstract{

    protected $_tablename=null;
    protected $_primarykey=null;
    public function __construct(){
        $this->init();
    }

    public function init(){
        $this->_tablename= "banner";
        $this->_primarykey= "banner_id";
    }

    public function getTablename(){
        return $this->_tablename;
    }

    public function getPrimarykey(){   
        return $this->_primarykey;
    }

    public function getAdaptor(){
        return new Core_Model_DB_Adapter();
    }

    public function load($id,$columns=null){
        $sql= "SELECT * FROM {$this->_tablename} WHERE {$this->_primarykey} = {$id} LIMIT 1";
        return $this->getAdaptor()->fetchrow($sql);
    }


}