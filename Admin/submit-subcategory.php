<?php
include "db.php";
$category= $_POST['category'];
$subcategory= $_POST['subcategory'];
// exit();

if($con){
  
    $sql = "INSERT INTO subcategory (category, subcategory) VALUES ('$category', '$subcategory')";
    mysqli_query($con,$sql);
?>
   <script type="text/javascript">
    alert("Subcategory added");
    window.location="addSubcategory.php";
   </script> 


<?php
}
?>