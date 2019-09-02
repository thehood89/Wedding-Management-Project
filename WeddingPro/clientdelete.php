<?php
$Client=$_POST['Client'];
$Name = $_POST['Name'];


$con=mysqli_connect("localhost","root","","weddingn") or die("Failed to query database ".mysql_error());

//mysqli_query($con,"INSERT INTO `clientcombo`(`name`, `venue`, `band`, `photographer`, `decorator`, `caterer`, `email`, `phone`, `wdate`, `plan`) VALUES ('$name','$venue','$Band_DJ','$photographer','$Decorater','$Caterer','$email','$wdate','$phone','$plan')");

if(mysqli_query($con,"DELETE FROM $Client WHERE name='$Name' "))
{
	echo " Client Deleted";
	header('Location: Client_Del.php');
	echo '<script type="text/javascript">alert("Client Deleted")</script>';
}else{
		echo '<script type="text/javascript">alert("Enter Details Properly")</script>';

}
mysqli_close($con);
//header('Location: Client_Del.php');

?>
