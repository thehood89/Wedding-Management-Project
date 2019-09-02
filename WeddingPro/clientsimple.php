<?php

$con=mysqli_connect('localhost','root','','weddingn') or die("Failed to query database ".mysql_error());

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

$sql = "INSERT INTO clientsimple (name,venue, band, photographer, decorator, caterer, email, phone, wdate, plan) VALUES ('$name','$venue','$Band_DJ','$photographer','$Decorater','$Caterer','$email','$wdate','$phone','$plan')";

$result = $con->query($sql);
//$row = $result->fetch_assoc();

if($result)
{
	echo " Client Registered";
	echo '<script type="text/javascript">alert("Client Registered")</script>';
}else{
		echo '<script type="text/javascript">alert("Enter Details Properly")</script>';
}

mysqli_close($con);
header('Location: Simple.php');
