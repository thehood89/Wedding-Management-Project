<?php

$name=$_POST['name'];
$venue = $_POST['venue'];
$Band_DJ = $_POST['Band_DJ'];
$photographer = $_POST['photographer'];
$Decorater = $_POST['Decorater'];
$Caterer = $_POST["Caterer"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$wdate = $_POST["wedding_date"];
$plan = $_POST["plan"];

$con=mysqli_connect("localhost","root","","weddingn") or die("Failed to query database ".mysql_error());



if(mysqli_query($con,"INSERT INTO `clientdelux`(`name`, `venue`, `band`, `photographer`, `decorator`, `caterer`, `email`, `phone`, `wdate`, `plan`) VALUES ('".$name."','".$venue."','".$Band_DJ."','".$photographer."','".$Decorater."','".$Caterer."','".$email."','".$wdate."','".$phone."','".$plan."')"))
{
	echo " Client Registered";
	echo '<script type="text/javascript">alert("Client Registered")</script>';
}
else
{
		echo '<script type="text/javascript">alert("Enter Details Properly")</script>';

}
mysqli_close($con);
header('Location: Client_Delux.php');
?>
