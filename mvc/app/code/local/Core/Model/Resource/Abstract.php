<?php

class Core_Model_Resource_Abstract{
    protected $_tablename=null;
    protected $_primarykey=null;


    public function getPrimarykey(){
        return $this->_primarykey;
    }

    public function getTablename(){
        return $this->_tablename;
    }

    public function getAdapter(){
        return new Core_Model_DB_Adapter();
    }

    public function load($id,$columns=null){
        $sql= "SELECT * FROM {$this->getTablename()} WHERE {$this->getPrimarykey()} = {$id} LIMIT 1";
        return $this->getAdapter()->fetchRow($sql);
    }

    public function save(Core_Model_Abstract $model){
        $data=$model->getData();
        if(isset ($data[$this->getPrimarykey()])  && !empty($data[$this->getPrimaryKey()])){
            unset ($data[$this->getPrimarykey()]);
            $sql=$this->updateSql($this->getTablename(),$data, [$this->getPrimarykey()=>$model->getId()]);
            ($this->getAdapter()->update($sql));
        }
        else{
            $sql= $this->insertSql($this->getTablename(),$data);
            $this->getAdapter()->insert($sql);       
        }
    }

    public function delete(Core_Model_Abstract $model){
        $delete=$this->deleteSql($this->getTablename(),[$this->getPrimarykey()=>$model->getId()]);
        ($this->getAdapter()->delete($delete)); 
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

    public function updateSql($tableName,$data,$where){
        $column=[];
        $con=[];
        foreach($data as $_key => $_value){
            $column[]="`{$_key}`".'='."'".addslashes($_value)."'";
        }
        foreach($where as $_key => $_value){
            $con[]="`{$_key}`".'='."'".addslashes($_value)."'";
        }
        $column=implode(",",$column);
        $con=implode(",",$con);
        return "UPDATE {$tableName} SET {$column} WHERE {$con}";
    }

    public function deleteSql($tableName,$where){
        $con=[];
        foreach($where as $_key => $_value){
            $con[]="`{$_key}`".'='."'".addslashes($_value)."'";
        }
        $con=implode("AND",$con);
        return "DELETE FROM {$tableName} WHERE {$con}";
    }

}