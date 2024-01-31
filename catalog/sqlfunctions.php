<?php
include("./connection.php");
// insert query function
class queryfunctions{
// insert query function
public function insert($tablename,$data){
    $colums=$values=[];
     foreach($data as $_field =>$_values){
        $colums[]="`{$_field}`";
        $values[]="'". addslashes($_values)."'";
     }
     $colums=implode(",",$colums);
     $values=implode(",",$values);
     return "INSERT INTO  {$tablename}({$colums})  VALUES({$values});";
}

// update query function
public function update($tablename,$data,$where){
    $colums=$con=[];
    foreach($data as $key=>$values){
        $colums[]="`{$key}`="."'". addslashes($values) . "'";
    } $colums=implode(",",$colums);
    foreach($where as $key1=>$values1){
        $con[]="`{$key1}`="."'". addslashes($values1) . "'";
    } $con=implode(" AND ",$con);
    return "UPDATE {$tablename} SET {$colums} WHERE {$con} ";
}
// select query function
public function select($tablename){
    return "SELECT * FROM {$tablename};";
}
public function delete($tablename,$where){
    $con=[];
    foreach($where as $key=>$values){
        $con[]="`{$key}`=". "'". addslashes($values) . "'"; 
    }$con=implode("AND",$con);
    return "DELETE FROM {$tablename} WHERE {$con};";
}
public function last20record($tablename){
    return "SELECT * FROM {$tablename} ORDER BY id DESC LIMIT 20;";

}
}

class queryexecution{
    public function query($conn,$query){
         return $conn->query($query);
    }
}
?>