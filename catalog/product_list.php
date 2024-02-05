<?php
//include ('connection.php');
include ('functions.php');
include ('object.php');
?>
<html>
    <body>
       
        <table border="0" align="center" style="background-color:lightgrey; border-collapse: separate;
        border-spacing: 2em 1em;">
            <tr>
                <th>Name</th>
                <th>SKU</th>
                <th>Category</th>
            </tr>
            <?php
                
                $obj=new func();
                $sql=$obj->select("ccc_practice","*",['order_by' => ['id DESC'],'where' => [], 'limit' => ['20']]);
                $obj=new query_execute();
                $row=$obj->select($sql);
                $obj1=new Data_Collection_Object();
                foreach($row as $temp){
                    $obj1->addData($temp);
                }           
                foreach($obj1->getData() as $data){
                ?>
                <tr>
                    <td><?php echo $data->getp_name();?></td>
                    <td><?php echo $data->getsku();?></td>
                    <td><?php echo $data->getcategory();?></td>
                    <td><button typr="button"><a href="form.php?id=<?php echo $data->getid();?>">update</a></button></td>
                    <td><button typr="button"><a href="delete.php?id=<?php echo $data->getid();?>">delete</a></button></td>
                </tr>
                <?php
                }
                echo' <tr>
                <td colspan=5 align="center"><button type="button" style="background-color:red"> <a href="form.php">add data</a></button></td></tr>';
                echo "</table>";
                ?>
    </body>
</html>
