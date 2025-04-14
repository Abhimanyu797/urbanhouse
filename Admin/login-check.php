<?php
session_start() ;
include "db.php" ;
$email=$_POST['email'] ;
$pwd=($_POST['pwd']) ;

if($con){
	//echo "connected";
	$sql="SELECT * from admin where email='$email' and pwd='$pwd'";
	$x=mysqli_num_rows(mysqli_query($con,$sql));
	if($x==1){
		$_SESSION['email']=$email;
		header("location:dashboard.php");


	}
	else{ ?>
<script>
alert("wrong login details");
window.location="index.php";
</script>
<?php
	}

	

}

?>


