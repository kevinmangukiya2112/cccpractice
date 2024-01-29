<?php
include("./connection.php");
include("./sqlfunctions.php");
$sql=last20record('ccc_practice');
echo "<table border=2px>
<tr><th>productname</th>
<th>sku</th>
<th>category</th>
<th>update</th>
<th>delete</th></tr>
";
$scl=$conn->query($sql);
if($scl->num_rows >0){
    while($raws=$scl->fetch_assoc()){
     echo "<tr>
     <td>".$raws['Product_name:']."</td>
     <td>".$raws['SKU:']."</td>
     <td>".$raws['Category']."</td>
     <td><a href='./product.php?id=".$raws['id']."'>update</a></td>
     <td><a href='./delete.php?id=".$raws['id']."'>delete</a></td>
     </tr>";
    }
}
?>
</table>
<button><a href="product.php?id=">Add data</a></button>
