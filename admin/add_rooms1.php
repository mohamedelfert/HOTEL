<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php

if(trim($_REQUEST["add"]) =="" ||trim($_REQUEST["price"])=="")
{
	echo("<script>alert('rooms or price empty')</script>");
}
else
{
	include("../connection.php");
	$sql="select * from rooms where number='".trim($_REQUEST['add'])."'";
	$res=mysqli_query($con,$sql);
	if($row=mysqli_fetch_array($res))
	{
		echo("<script>alert('Data exist')</script>");
		}
		else
		{
			$sqlinsert="insert into rooms(number,price,type,ractivation) values('".trim($_REQUEST["add"])."','".trim($_REQUEST["price"])."',".(@$_REQUEST["type"]==1?1:0).",".(@$_REQUEST["act"]==1?1:0).")";
			$resinsert=mysqli_query($con,$sqlinsert);
			echo("<script>alert('date inserted')</script>");
			
			}
			mysqli_close($con);
}
?>
<body>
</body>
</html>