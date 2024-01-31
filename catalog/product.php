<?php
include("./sqlfunctions.php");
include("./connection.php");
$obj1=new queryexecution();
// echo "hello guys";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form handling</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <div>
    <?php

   $id=$_GET['id'];
   if($id==NULL){
    echo '<form action="datasent.php" method="post">
        <fieldset>
            <legend>Basic details</legend>
            <label for="name">Product_Name:</label>
            <input type="text" id="name" name="nam[Product_name:]">&nbsp;&nbsp;&nbsp;&nbsp;
            <label for="psku">SKU:</label>
            <input type="text" id="psku" name="nam[SKU:]"><br><br>
            <label for="btype">Bundle</label><br><br>
            <label for="category">Category</label>
            <select id="category" name="nam[Category]" >
                <option value="Bar&Game Room">Bar&Game Room
                </option>
                <option value="Bedroom">Bedroom
                </option>
                <option value="Decor"> Decor
                </option>
                <option value="Dining&Kitchen">Dining&Kitchen
                </option>
                <option value="Lighting">Lighting
                </option>
                <option value="LivingRoom">LivingRoom
                </option>
                <option value="Mattresses">Mattresses
                </option>
                <option value="Office">Office
                </option>
                <option value="Outdoor">Outdoor
                </option>
            </select> &nbsp; &nbsp;
        </fieldset>
        <button type="submit">Submit </button>
    </form>';}
    else{
        $sql="SELECT * FROM ccc_practice WHERE id=$id";
        print_r($sql);
        $scl=$obj1->query($conn,$sql);
        $raws=$scl->fetch_assoc();
        echo '<form action="./updateform.php?id='.$id.'" method="post">
        <fieldset>
            <legend>Basic details</legend>
            <label for="name">Product_Name:</label>
            <input type="text" id="name" name="nam[Product_name:]" value='.$raws["Product_name:"].'>&nbsp;&nbsp;&nbsp;&nbsp;
            <label for="psku">SKU:</label>
            <input type="text" id="psku" name="nam[SKU:]" value='.$raws["SKU:"].'><br><br>
            <label for="category">Category</label>
            <select id="category" name="nam[Category]" >
                <option value="Bar&Game Room">Bar&Game Room
                </option>
                <option value="Bedroom">Bedroom
                </option>
                <option value="Decor"> Decor
                </option>
                <option value="Dining&Kitchen">Dining&Kitchen
                </option>
                <option value="Lighting">Lighting
                </option>
                <option value="LivingRoom">LivingRoom
                </option>
                <option value="Mattresses">Mattresses
                </option>
                <option value="Office">Office
                </option>
                <option value="Outdoor">Outdoor
                </option>
            </select> &nbsp; &nbsp;
            </fieldset>
        <button type="submit">Update </button>
    </form>';}
    ?>
    </div>
</body>

</html>