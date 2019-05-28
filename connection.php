


<?php
$con=mysqli_connect("localhost","root","");
if(!$con)
{
	die("Error : ".mysqli_error());
}
$db=mysqli_select_db($con,"hotel");
if(!$db)
{
	die(mysqli_error());
}
?>