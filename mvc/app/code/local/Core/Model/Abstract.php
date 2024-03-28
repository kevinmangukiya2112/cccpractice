<?php

class Core_Model_Abstract{
    protected $_data = [];
    protected $modelClass='';
    protected $resourceClass = '';
    protected $collectionClass = '';
    protected $resource = null;
    protected $collection = null;

    public function __construct(){
        $this->init();
    }

    public function setResourceClass($resourceClass){

    }

    public function setCollectionClass($collectionClass){

    }

    public function setId($id){
        $this->_data[$this->getResource()->getPrimarykey()] = $id;
        return $this;
    }
    
    public function getId(){
        return $this->_data[$this->getResource()->getPrimarykey()];
    }

    public function getResource(){
        return new $this->resourceClass();
    }
    
    public function getCollection(){
        $collection = new $this->collectionClass();
        $collection->setResource($this->getResource());
        $collection->setModel($this->modelClass);
        $collection->select();
        return $collection;
    }

    public function __set($key, $value){

    }

    public function __get($key){

    }

    public function __unset($key){

    }

    public function __call($name, $args) {
        // $name = strtolower(substr($name, 3));
        $name = $this->camelTodashed(substr($name, 3));
        return (isset($this->_data[$name])
            ? $this->_data[$name]
            : "");
    }
    public function dashesToCamelCase($string, $capitalizeFirstCharacter = false) 
    {
        $str = str_replace(' ', '', ucwords(str_replace('-', ' ', $string)));
        if (!$capitalizeFirstCharacter) {
            $str[0] = strtolower($str[0]);
        }
        return $str;
    }
    public function camelTodashed($className) {
        return strtolower(preg_replace('/([a-zA-Z])(?=[A-Z])/', '$1_', $className));
    }

    public function getData($key=null){
        return $this->_data;
    }

    public function setData($data){
        $this->_data = $data;
        return $this;
    }

    public function addData($key, $value){
        $this->_data[$key] = $value;
        // echo"<pre>";
        // print_r($this->_data);
        return $this;
    }

    public function removeData($key=null){
        unset($this->_data[$key]);
        return $this;
    }

    protected function _beforesave(){
        return $this;
    }

    protected function _aftersave(){
        return $this;
    }

    public function save(){
        // print_r($this);
        // die;
        $this->_beforesave();
        $this->getResource()->save($this);
        $this->_aftersave();
        return $this;
    }

    public function delete(){
        $this->getResource()->delete($this);
        return $this;
    }

    public function load($id, $column=null){
        $this->_data=$this->getResource()->load($id, $column);
        return $this;
    }


}