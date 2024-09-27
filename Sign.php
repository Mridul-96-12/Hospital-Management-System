<?php
if(count($_POST)>0) {
	$conn = mysqli_connect("localhost","root","","appointment management system");
	$result = mysqli_query($conn,"SELECT * FROM patient WHERE Email='" . $_POST["Email"] . "' and Password = '". $_POST["Password"]."'");
	$count  = mysqli_num_rows($result);
	if($count==0) {
		echo "Invalid Username or Password!";
	} else {
		echo "You are successfully authenticated!";
	}
}
?>