
<?php
session_start();
if(@$_SESSION["name"] =="")
{
	die("You don't have permesion");
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php


if ($_REQUEST["fn"] =="")
{
	echo("<script>alert('plese enter fristname')</script>");
}
else
{
	
	if(isset($_REQUEST["ln"]) =="")
	{
		echo("<script>alert('plesae enter your lastname')</script>");
	}
	else
	{
		if(!empty($_REQUEST["ph"]) & strlen($_REQUEST["ph"]) !=10)
		{
			echo("<script>alert('invaild your phone')</script>");
		}
		else
		{
			if(!empty($_REQUEST["mb"]) & strlen ($_REQUEST["mb"]) !=11)
			{
			echo("<script>alert('invaild mobile number')</script>");
			}
			else
			{
				if(!empty($_REQUEST["ni"]) & strlen($_REQUEST["ni"]) !=14)
				{
					echo("<script>alert('invaild nationalID')</script>");
				}
				
		else
		{
		
		include("../connection.php");
		
		$sqlselect="select * from employees where EPHONE='".$_REQUEST["ph"]."' or EMOBILE='".$_REQUEST["mb"]."' or ENATIONALID='".$_REQUEST["ni"]."'";
		
		$resselect=mysqli_query($con,$sqlselect);
		if ($row=mysqli_fetch_array($resselect))
		{
			echo("<script>alert('date exit')</script>");
		}
		else
		{
				
			$DoB=$_REQUEST["year"]."-".$_REQUEST["month"]."-".$_REQUEST["day"];
			
			
$sql="insert into employees (EFNAME,ELNAME,EADDRESS,ENATIONALID,EPHONE,EMOBILE,SALARY,E_mail,password,EGENDER,EDATEOFBIRTH,EACTIVATION,admin)
	values('".$_REQUEST["fn"]."','".$_REQUEST["ln"]."','".$_REQUEST["ad"]."','".$_REQUEST["ni"]."','".$_REQUEST["ph"]."','".$_REQUEST["mb"]."','".$_REQUEST["salary"]."','".$_REQUEST["email"]."','".$_REQUEST["password"]."',".($_REQUEST["ge"]==0?0:1).",'".$DoB."',".($_REQUEST["act"]==0?0:1).",".($_REQUEST["admin"]==0?0:1).")";


$res=mysqli_query($con,$sql);
 echo("<script>alert('Data Inserted')</script>");
				 mysqli_close($con);
}

		}
			}
		}
	}
}

?>

</body>
</html>