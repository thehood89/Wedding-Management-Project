<?php


$username = $_POST['username'];
$password = $_POST['password'];


$con=mysqli_connect("localhost","root","","weddingn") or die("Failed to query database ".mysql_error());
$result = mysqli_query($con,"select * from login where username = '$username' and password = '$password'");

$count1=mysqli_num_rows($result);

if($count1==1)
{
	echo " Login Success";
	header('Location:\WeddingPro\Home.php');
}
else
{
	echo "incorrect info";
}

mysqli_close($con);

?>
