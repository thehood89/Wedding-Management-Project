<?php

$name=$_POST['name'];
$organizer = $_POST['organizer'];
$weddingdate = $_POST['weddingdate'];
$email = $_POST['email'];
$manager = $_POST['manager'];
$Location = $_POST["Location"];
$Air = $_POST["Air"];

$con=mysqli_connect("localhost","root","","weddingn") or die("Failed to query database ".mysql_error());
mysqli_query($con,"INSERT INTO `venue`(`name`, `organizer`, `wdate`, `email`, `manager`, `location`, `type`) VALUES ('$name','$organizer','$weddingdate','$email','$manager','$Location','$Air')");

if(mysqli_query($con,"INSERT INTO `venue`(`name`, `organizer`, `wdate`, `email`, `manager`, `location`, `type`) VALUES ('$name','$organizer','$weddingdate','$email','$manager','$Location','$Air')"))
{
	echo " Venue Registered";
	echo '<script type="text/javascript">alert("Venue Registered")</script>';
}0
else
{
//	header('Location:\colorlib-regform-3\index.php');
		echo '<script type="text/javascript">alert("Enter Details Properly")</script>';

}

mysqli_close($con);



?>
