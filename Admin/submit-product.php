<?php
include "db.php";
$category= $_POST['category'];
$product= $_POST['Product'];
$subcategory= $_POST['subcategory'];
$price=$_POST['price'];
// exit();

if($con){
  
    $sql="INSERT into product (product,subcategory,category,price) values ('$product','$subcategory','$category','$price')";
    mysqli_query($con,$sql);
?>
   <script type="text/javascript">
    alert("Product added");
    window.location="addProduct.php";
   </script> 


<?php
}
?>