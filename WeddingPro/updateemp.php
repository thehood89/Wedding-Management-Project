<?php

$Name=$_POST['Name'];
$Contact_No = $_POST["Contact_No"];

$con=mysqli_connect("localhost","root","","weddingn") or die("Failed to query database ".mysql_error());



if(mysqli_query($con,"UPDATE `regform` SET `phone`='$Contact_No' WHERE `name`='$Name'"))
{
	echo " Employee Updated";
	echo '<script type="text/javascript">alert("Employee Updated")</script>';
}
else
{
		echo '<script type="text/javascript">alert("Enter Details Properly")</script>';

}
mysqli_close($con);

?>
