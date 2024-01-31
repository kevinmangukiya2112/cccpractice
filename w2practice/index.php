<?php
include("./connection.php");
include("./sql_functions.php");
$obj=new sqlfunctions();
$sql=$obj->last10record('ccc_practice');
echo "
<ol><li>productname</li>
<li>sku</li>
<li>producttype</li>
<licategory</li>
<li>status</li>
<li>Manufecturer cost</li>
<li>transportation cost</li>
<li>total cost</li>
<li>price</li>
<li>CreatedAt</li>
<li>UpdatedAt</li></ol>
";
echo"<table border=2px>";
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
     </tr>";
    }
}
?>
</table>