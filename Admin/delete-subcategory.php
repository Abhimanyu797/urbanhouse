<?php
include "db.php" ;
$id=$_GET['catid'];
$sql="delete from subcategory where id='$id'";
mysqli_query($con,$sql);
header("location:viewSubcategory.php");

?>