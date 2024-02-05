<?php
include ('functions.php');
include ('object.php');
?>
<html>
    <body>
        <a href="c_form.php" >add data</a>
        <table border="0" align="center" style="background-color:lightgrey; border-collapse: separate;
        border-spacing: 2em 1em;">
            <tr>
                <th>Id</th>
                <th>Name</th>
             
            </tr>
            <?php
               
                $obj=new func();
                $sql=$obj->select("ccc_category","*",['order_by' => [],'where' => [], 'limit' => []]);
                $obj=new query_execute();
                $result = $obj->select($sql);
                $obj1=new Data_Collection_Object();
                   foreach($result as $temp){
                    $obj1->addData($temp);
                   }
                   foreach($obj1->getData() as $data){
                ?>
                <tr>
                    <td><?php echo $data->getcat_id();?></td>
                    <td><?php echo $data->getname();?></td>
                     </tr>
                <?php
                    }
                    echo "</table>";
            
               
                ?>
    </body>
</html>
