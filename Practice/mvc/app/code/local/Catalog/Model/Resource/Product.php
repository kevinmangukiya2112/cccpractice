<?php

class Catalog_Model_Resource_Product{
    protected $_tablename=null;
    protected $_primarykey=null;

    public function __construct(){
        $this->init();
    }

    public function init(){
        $this->_tablename="catalog_product";
        $this->_primarykey="product_id";
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

    public function save(Catalog_Model_Product $product){
        // echo 777;
        $data=$product->getData();
        // print_r($data);
        
        if(isset ($data[$this->getPrimarykey()])){
            unset ($data[$this->getPrimarykey()]);
        }
        $sql= $this->insertSql($this->getTablename(),$data);
        $id= $this->getAdaptor()->insert($sql);
        echo "<pre>";
        print_r($product);
        echo $id;
        $product->setId($id);
        print_r($product);


        
    }

    public function insertSql($tablename,$data){
        $keys=$values=[];
        foreach($data as $key=>$value){
            $keys[]="`{$key}`";
            $values[]="'". addslashes($value)."'";
        }
        $keys=implode(",",$keys);
        $values=implode(",",$values);
        return "INSERT INTO  {$tablename}({$keys})  VALUES({$values});";
    }

}