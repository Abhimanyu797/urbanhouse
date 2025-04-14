<?php
include "db.php" ;
$id=$_POST['id'];
$category=$_POST['product'];
$sql="UPDATE product set Product='$category' where id='$id'";
mysqli_query($con,$sql);
header("location:Products.php");

?>