<?php

class Sales_Model_Resource_Sales{
    protected $_tablename=null;
    protected $_primarykey=null;

    public function __construct(){
        $this->init();
    }

    public function init(){
        $this->_tablename="ccc_practice";
        $this->_primarykey="id";
    }

    public function getPrimarykey(){
        return $this->_primarykey;
    }

    public function getTablename(){
        return $this->_tablename;
    }

    public function getAdaptor(){
        return new Core_Model_DB_Adapter();
    }

    public function load($id,$columns=null){
        $sql= "SELECT * FROM {$this->_tablename} WHERE {$this->_primarykey} = {$id} LIMIT 1";
        return $this->getAdaptor()->fetchrow($sql);
    }
}