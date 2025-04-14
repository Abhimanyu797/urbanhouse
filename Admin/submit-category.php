<?php
include "db.php";
$category= $_POST['Category'];
// exit();

if($con){
  
    $sql="insert into category (category) values ('$category')";
    mysqli_query($con,$sql);
?>
   <script type="text/javascript">
    alert("category added");
    window.location="addCategory.php";
   </script> 


<?php
}
?>