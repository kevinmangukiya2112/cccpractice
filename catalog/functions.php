<?php
include ('connection.php');
class conne{
    public $conn;
    public function __construct(){
        $this->conn=conn();     
    } 
}
class func{
    

function select($table,$column,$array){        
    
        if($array['where']==null & $array['order_by']==null & $array['limit']==null){
            return "SELECT $column FROM {$table}";
        }

        elseif($array['order_by']==null & $array['order_by']==null){
            $cond=[];
            foreach($array['where'] as $key=>$value){
                $cond[]="`{$key}`='".addslashes($value)."'";
             }
            $con=implode(" ",$cond);
            return "SELECT $column FROM {$table} WHERE {$con}";
        }

        else{
            $cond=[];
            foreach($array['order_by'] as $key=>$value){
                $cond[]=addslashes($value);
             }
            $con=implode(" ",$cond);
            $cond1=[];
            foreach($array['limit'] as $key=>$value){
                $cond1[]=addslashes($value);
             }
            $con1=implode(" ",$cond1);
            return "SELECT $column FROM {$table} ORDER BY {$con} LIMIT {$con1}" ;
        }    
    }

function insert($table,$data){
        $column=$value=[];
        foreach($data as $_key => $_value){
            $column[]="`{$_key}`";
            $value[]="'".addslashes($_value)."'";
        }
        $column=implode(",",$column);
        $value=implode(",",$value);
        return "INSERT INTO {$table} ({$column}) values ({$value})";
    
    }
function update($table,$data,$where){
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
        return "UPDATE {$table} SET {$column} WHERE {$con}";
    }
    
function delete($table,$array){
     
        foreach($array as $_key => $_value){
            $column[]="`{$_key}`".'='."'".addslashes($_value)."'";
        }
        $column=implode("AND",$column);
        return "DELETE FROM {$table} WHERE {$column}";
    }
}
class query_execute extends conne{
    function query($sql){
        if ($this->conn->query($sql) === TRUE) {
            return true;                                                                               
          } else {
            return false;
          }
    }
    function select($sql){
        $data1=[];
        $data= mysqli_query($this->conn, $sql);
        if($data->num_rows>0){
            while($rows=$data->fetch_assoc()){
                $data1[]=$rows;
            }
        }
        return $data1;
       
    }
}
?>