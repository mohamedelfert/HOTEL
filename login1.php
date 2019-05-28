
<?php

session_start()
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

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

if($_REQUEST["un"]=="" || $_REQUEST["pwd"]=="")
{
	echo(" email or password empty");
}
else
{
	
$sql= "select concat(EFNAME,'',ELNAME) as fullname,admin from employees where EACTIVATION=1 and E_mail='".$_REQUEST["un"]."'and password='".$_REQUEST["pwd"]."'";



$res=mysqli_query($con,$sql);

if ($row=mysqli_fetch_array($res));

{
	if($row["admin"]==1)
	
	{
		$_SESSION["name"]=$row["fullname"];
		//header('refresh:1;hotel/admin/adminhome.php?Email address='.$row["fullname"]);
			//	header('Location:http://localhost/hotel/admin/adminhome.php');
				header('refresh:1;Admin/AdminHome.php');
	}
	else
	{
		//header('refresh:1;member/member.php?Email address='.$row["fullname"]);
	
	}
}
	mysqli_close($con);
}
?>


</head>

<body>
</body>
</html>