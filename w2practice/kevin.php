<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#"  method="POST" enctype="multipart/form-data">
        <input type="file" name="myfile">
        <input type="submit" name="upload">
    </form>
</body>
</html>
<?php
print_r($_FILES['myfile']);
$name=$_FILES['myfile']['name'];
$tmpname=$_FILES['myfile']['tmp_name'];
print_r ($destination='folder/'.$name);
// move_uploaded_file($tmpname,$destination);

?>