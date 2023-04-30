<?php 
date_default_timezone_set("Asia/Karachi");
mysqli_report(false);
$connection = mysqli_connect("localhost","root","","users_information");

if(!$connection){
	echo "<p style='color:red;'>Error number:".mysqli_connect_errno()."</p>";
	echo "<p style='color:red;'>Error message:".mysqli_connect_error()."</p>";
	die("<p style='color:red'>Failed to connect MySQL</p>");
}

?>