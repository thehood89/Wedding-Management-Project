<?php

$name=$_POST['name'];
$email = $_POST['email'];
$manager = $_POST['manager'];
$address = $_POST["address"];

$con=mysqli_connect("localhost","root","","weddingn") or die("Failed to query database ".mysql_error());

mysqli_query($con,"INSERT INTO `vendor`(`name`, `email`, `manager`, `address`) VALUES ('$name','$email','$manager','$address')");

if(mysqli_query($con,"INSERT INTO `vendor`(`name`, `email`, `manager`, `address`) VALUES ('$name','$email','$manager','$address')"))
{
	echo " Vendor Registered";
	echo '<script type="text/javascript">alert("Vendor Registered")</script>';
}
else
{
//	header('Location:\colorlib-regform-3\index.php');
		echo '<script type="text/javascript">alert("Enter Details Properly")</script>';

}

mysqli_close($con);

?>
