<?php
include "db.php" ;
$id=$_GET['catid'];
$sql="delete from product where id='$id'";
mysqli_query($con,$sql);
header("location:Products.php");

?>