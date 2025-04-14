<?php
include "db.php" ;
$id=$_POST['id'];
$category=$_POST['subcategory'];
$sql="UPDATE subcategory set Subcategory='$category' where id='$id'";
mysqli_query($con,$sql);
header("location:viewSubcategory.php");

?>