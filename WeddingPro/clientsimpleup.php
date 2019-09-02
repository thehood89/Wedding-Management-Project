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


if(mysqli_query($con,"UPDATE `clientsimple` SET `name`='".$name."',`venue`='".$venue."',`band`='".$Band_DJ."',`photographer`='".$photographer."',`decorator`='".$Decorater."',`caterer`='".$Caterer."',`email`='".$email."',`phone`='".$phone."',`wdate`='".$wdate."',`plan`='".$plan."' WHERE '".$name."'"))
{
	echo " Client Updated";
	echo '<script type="text/javascript">alert("Client Updated")</script>';
}else{
		echo '<script type="text/javascript">alert("Enter Details Properly")</script>';

}
mysqli_close($con);
header('Location: Simple_up.php');

?>
