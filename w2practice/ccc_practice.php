
<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php
		$servername = "localhost";
        $username = "root";
        $password = "";
        
        $conn = mysqli_connect("localhost", "root", "", "ccc_practice");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
		
		// Taking all 5 values from the form data(input)
		$Product_Name= $_POST['name'];
		$SKU= $_POST['psku'];
		$Product_type= $_POST['ptype'];
		$category= $_POST['select'];
		$Status= $_POST['status'];
        $Manufacturer_cost=$_REQUEST['mcost'];
        $Shipping_cost=$_POST['scost'];
        $Total_cost=$_POST['tcost'];
        $Price=$_POST['pcost'];
        $created_at=$_POST['cdate'];
        $Updated_at=$_POST['udate'];

		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO ccc_practice VALUES ('$Product_Name', 
			'$SKU','$Product_type','$category','$Status','$Manufacturer_cost','$Shipping_cost','$Total_cost',
            '$Price','$created_at','$Updated_at');";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>"; 

			echo nl2br("$Product_Name, 
			$SKU,$Product_type,$Manufacturer_cost,$Shipping_cost,$Total_cost,
        $Price,$created_at,$Updated_at");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
