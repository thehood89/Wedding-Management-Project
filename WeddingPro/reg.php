<?php

$name=$_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$birthdate = $_POST['birthdate'];
$gender = $_POST['gender'];
$email = $_POST["email"];
$phone = $_POST["phone"];

$con=mysqli_connect("localhost","root","","weddingn") or die("Failed to query database ".mysql_error());
mysqli_query($con,"INSERT INTO `login`(`username`, `password`) VALUES ('$username','$password')");


if(mysqli_query($con,"INSERT INTO `regform`(`name`, `username`, `password`, `bdate`, `gender`, `email`, `phone`) VALUES ('$name', '$username','$password','$birthdate','$gender','$email',$phone)"))
{
	echo " User Registered";
	echo '<script type="text/javascript">alert("User Registered")</script>';
}
else
{
//	header('Location:index.php');
		echo '<script type="text/javascript">alert("Enter Details Properly")</script>';

}
		header('Location:index.php');

mysqli_close($con);



?>
