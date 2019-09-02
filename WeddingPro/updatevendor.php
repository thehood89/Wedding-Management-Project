<?php

$Name=$_POST['Name'];
$Address = $_POST["Address"];

$con=mysqli_connect("localhost","root","","weddingn") or die("Failed to query database ".mysql_error());



if(mysqli_query($con,"UPDATE `vendor` SET `address`='$Address' WHERE `name`='$Name'"))
{
	echo " Vendor Updated";
	echo '<script type="text/javascript">alert("Vendor Updated")</script>';
}
else
{
		echo '<script type="text/javascript">alert("Enter Details Properly")</script>';

}
mysqli_close($con);

?>
