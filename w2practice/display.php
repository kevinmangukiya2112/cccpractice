<?php
include("./connection.php");
include("./sql_functions.php");
$obj=new queryfunctions();
$sql=$obj->select('ccc_practice');
echo "
<table border=2px>
<tr>
<td>productname</td>
<td>sku</td>
<td>producttype</td>
<td>category</td>
<td>status</td>
<td>Manufecturer cost</td>
<td>transportation cost</td>
<td>total cost</td>
<td>price</td>
<td>CreatedAt</td>
<td>UpdatedAt</td>
<td>update</td>
<td>delete</td>
</tr>";
$scl=$conn->query($sql);
if($scl->num_rows >0){
    while($raws=$scl->fetch_assoc()){
     echo "<tr>
     <td>".$raws['Product_name:']."</td>
     <td>".$raws['SKU:']."</td>
     <td>".$raws['Product_type:']."</td>
     <td>".$raws['Category']."</td>
     <td>".$raws['Status']."</td>
     <td>".$raws['Manufacturer_Cost:']."</td>
     <td>".$raws['Shipping_Cost:']."</td>
     <td>".$raws['Total_Cost(item):']."</td>
     <td>".$raws['Price']."</td>
     <td>".$raws['Created_At']."</td>
     <td>".$raws['Updated_At']."</td>
     <td><a href='./update.php?id=".$raws['id']."'>update</a></td>
     <td><a href='./delete.php?id=".$raws['id']."'>delete</a></td>
     </tr>";
    }
}
?>
</table>
<a href='./index.php'>last 10 records</a>