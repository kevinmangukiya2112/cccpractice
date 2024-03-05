<?php

class Core_Model_Resource_Collection_Abstract{
    protected $_resource = null;
    protected $_modelClass = null;

    protected $_select = [];
    protected $_data = [];
    protected $_isLoaded = false;

    public function setModel($model){
        $this->_modelClass = $model;
        return $this;
    }
  
    public function setResource(Core_Model_Resource_Abstract $resource)
    {
        // From abstract model's  getCollectiion() function
        $this->_resource = $resource;
        return $this;
    }



    public function load(){
        // from abstract model getcollection() after the select() it jumps on this
        $sql = "SELECT * FROM {$this->_select['from']} ";
        // print_r($this->_select['where']);
        if(isset($this->_select['where']) && count($this->_select['where'])) {
            $sql .= $this->getWhereFilterSql($this->_select['where']);
            }
        if(isset($this->_select['order'])){
            $sql .= $this->getOrderFilterSql($this->_select['order']);
            // echo $sql;die;
        }
        if(isset($this->_select['group'])){
            $sql.= $this->getGroupFilterSql($this->_select['group']);
            // echo $sql;die;
        }
        $result = $this->_resource->getAdapter()->fetchAll($sql);
        //if($result!=null){
        foreach ($result as $row) {
             $this->_data[] = Mage::getModel($this->_modelClass)->setData($row);
        
    }
        $this->_isLoaded = true;
        return $this;
    }


    public function getOrderFilterSql($filter){
        foreach($filter as $col => $val){
            return "ORDER BY `{$col}` {$val} ";
        }
    }

    public function getGroupFilterSql($filter){
        return "GROUP BY `{$filter}`";
    }

    public function getWhereFilterSql($filter){
             $whereCond = [];
                foreach($filter as $_field => $_filters){
                 
                    foreach($_filters as $_value){    

                    if(!is_array($_value)) {
                            $_value = ['eq' => $_value];
                        }

                        foreach($_value as $_k => $_v){

                            switch ($_k) {
                                case 'gt':
                                    $whereCond[] = "`$_field` > '{$_v}' ";
                                    break;
                                case 'lt':
                                    $whereCond[] = "`$_field` < '{$_v}' ";
                                    break;
                                case 'in':
                                    $whereCond[] = "`$_field` IN ( '{$_v}') ";
                                    break;
                                case 'eq':
                                    $whereCond[] = "`$_field` = '{$_v}' ";
                                    break;
                                default:
                                    $whereCond[] = "";
                            }
                        }
                      
                    }  
                }  
            $whereCond = implode(" AND ", $whereCond);
            return "WHERE $whereCond"; 
    }

    public function getData()
    {
        if (!$this->_isLoaded) {
            $this->load();
        }
        return $this->_data;
    }

    public function select()
    {
        // From abstract model's  getCollectiion() function
        $this->_select['from'] = $this->_resource->getTableName();
        return $this;
    }

    public function addFieldToFilter($column, $filter)
    {
        
        $this->_select['where'][$column][] = $filter;
        return $this;
    }

    public function addOrderFilter($column){

        foreach($column as $k=>$v){
        $this->_select['order'][$k] = $v ;
        }
        return $this;
    }

    public function addGroupFilter($column){
        $this->_select['group'] = $column;
        return $this;
    }

    // public function addLimitOffsetFilter($limit){
    //     print_r($limit);

    // }

}