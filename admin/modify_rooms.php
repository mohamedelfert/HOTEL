<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
if(trim($_REQUEST["room1"]) =="")
{
	echo("room number empty");
	
}
else
{
	include("../connection.php");
	if($_REQUEST["Button"]=="Update")
	{
		$sqlupdate="update rooms set number='".$_REQUEST["room1"]."',PRICE='".$_REQUEST["price1"]."',TYPE=".($_REQUEST["type"]==1?1:0).",ractivation=".($_REQUEST["act"]==1?1:0)."where RId=".($_REQUEST["rid"]);
		
		echo($sqlupdate);
		$resupdate=mysqli_query($con,$sqlupdate);
		
		echo("date updated");
	}
	else
	{
		$sqldelete="update rooms set ractivation=0 where RId=".$_REQUEST["rid"];
		$resdelete=mysqli_query($con,$sqldelete);
		echo("<script>alert('date deleted')</script>");
	}
	mysqli_close($con);
}
?>
</body>
</html>