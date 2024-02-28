<?php
    class Core_Model_Resource_Collection_Abstract
    {
        protected $_resource = null;
        protected $_select = [];
        protected $_isLoaded = false;
        protected $_data = [];
        protected $_model=null;
        public function setResource(Core_Model_Resource_Abstract $resource) {
            $this->_resource = $resource;
            return $this;
        }

        public function setModel($model) {
            $this->_model = $model;
            return $this;
        }

        public function getData()
        {
            if (!$this->_isLoaded) {
                $this->load();
            }
            return $this->_data;
        }

        public function select() {
            $this->_select['from'] = $this->_resource->getTableName();
            return $this;
        }

        public function addFieldToFilter($column, $filter) {
            if($column=='groupby') {
            $this->_select['groupby']= $filter;
            return $this;
            }
            elseif($column=='orderbydsc'){
            $this->_select['orderbydsc']= $filter;
            return $this;
            }
            elseif($column=='orderbyasc'){
            $this->_select['orderbyasc']= $filter;
            return $this;
            }
            else{
            $this->_select['where'][$column][] = $filter;
            return $this;
        }
        }

        public function load()
        {
            $sql = "SELECT * FROM {$this->_select['from']} ";
            if(isset($this->_select['where']) && count($this->_select['where'])) {
                $whereCond = [];
                foreach($this->_select['where'] as $_field => $_filters){
                    
                    foreach($_filters as $_value){    
                        if(!is_array($_value)) {
                            $_value = ['eq' => $_value];
                        }
                        foreach($_value as $_k => $_v){
                            switch ($_k) {
                                case 'gt':
                                    $whereCond[] = "`$_field` > '{$_v}' ";
                                    break;
                                case 'in':
                                    $whereCond[] = "`$_field` IN ( '{$_v}') ";
                                    break;
                                case 'eq':
                                    $whereCond[] = "`{$_field}` = '{$_v}' ";
                                    break;
                                default:
                                    $whereCond[] = "`$_field` = '{$_v}' ";
                            }
                        }
                    }
                  
                }
                $whereCond = implode(" AND ", $whereCond);
                $sql .= "WHERE $whereCond";
            }
            if(isset($this->_select['groupby'])){
                $sql.="GROUP BY ".$this->_select['groupby']." ";
                // echo $sql;
                // die;
            }
            if(isset($this->_select['orderbydsc'])){
                $sql.="ORDER BY ".$this->_select['orderbydsc']." DESC " ;
                // echo $sql;
                // die;
            }
            if(isset($this->_select['orderbyasc'])){
                $sql.="ORDER BY ".$this->_select['orderbyasc']." ASC " ;
                // echo $sql;
                // die;
            }
            // print_r($this->_resource->getAdapter());
            $result = $this->_resource->getAdapter()->fetchAll($sql);
            //print_r($result);
            foreach($result as $row) 
            {
                $this->_data[] = Mage::getModel($this->_model)->setData($row);
            }
            $this->_isLoaded = true;
            return $this;
        }
    }
?>