<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
include("header1.php");
?>
</head>

<body>

<?php
if(@$_REQUEST["room1"]==0)
{
	echo("chooes your room");
}
else
{
	include("../connection.php");
	
	$check=$_REQUEST["year"]."-".$_REQUEST["month"]."-".$_REQUEST["day"];
	
	$check1=$_REQUEST["year"]."-".$_REQUEST["month"]."-".$_REQUEST["day"];
	
	$sql="insert into resrvation (ROOMID,EMID,VISITORID,CHECKIN,CHECKOUT,RESERVKIND) values('".$_REQUEST["room1"]."','".$_REQUEST["employee"]."',".$check.",".$check1.",".($_REQUEST["kind"]==0?0:1).")";
	
	echo($sql);
$res=mysqli_query($con,$sql);
//if($row=mysqli_fetch_array($res))

	echo("<script>alert('date inserted')</script>");

mysqli_close($con);
}
?>

</body>
</html>