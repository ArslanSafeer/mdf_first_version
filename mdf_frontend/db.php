<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'mdf');

if($con){
	echo"";
}else{
	echo"Not connected";
}
?>