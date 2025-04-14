<?php
include "db.php" ;
$id=$_POST['id'];
$category=$_POST['category'];
$sql="UPDATE category set category='$category' where id='$id'";
mysqli_query($con,$sql);
header("location:viewCategory.php");

?>