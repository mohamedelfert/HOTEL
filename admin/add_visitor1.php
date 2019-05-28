<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
if($_REQUEST["fn"]== "")
{
	echo("<script>alert('enter your first name')</script>");
	
}
else
{
	if(isset($_REQUEST["ln"] )== "")
	{
		echo("<script>alert('enter your last name')</script>");
	}
	else
	{
		if(!empty($_REQUEST["ni"]) & strlen($_REQUEST["ni"]) !=14)
		{
			echo("<script>alert('invaild nationalid')</script>");
		}
		else
		{
			if(!empty($_REQUEST["passport"]) &strlen($_REQUEST["passport"]) !=14)
			{
				echo("<script>alert('invaild passportid')</script>");
			}
			else
			{
				if(!empty($_REQUEST["ph"]) &strlen($_REQUEST["ph"]) !=10)
				{
					echo("<script>alert('invalid your phone')</script>");
				}
				else
				{
					if(!empty($_REQUEST["mb"])&strlen($_REQUEST["mb"]) !=11)
					{
						echo("<script>alert('invalid your mobile')</script>");
					}
					else
					{
						include("../connection.php");
						$sql="select * from visitor where NATIONALID='".$_REQUEST["ni"]."' or VPHONE='".$_REQUEST["ph"]."'";
						$res=mysqli_query($con,$sql);
						if($row=mysqli_fetch_array($res))
						{
							echo("<script>alert('data exit')</script>");
						}
						else
						{
							$sqlinsert="insert into visitor (VFNAME,VLNAME,NATIONALID,PASSPORTID,VPHONE,VMOBILE,EMAIL,PASSWORD)
							 values('".$REQUEST["fn"]."','".$_REQUEST["ln"]."','".$_REQUEST["ni"]."','".$_REQUEST["passport"]."','".$_REQUEST["ph"]."','".$_REQUEST["mb"]."','".$_REQUEST["email"]."','".$_REQUEST["password"]."')";
							
							$resinsert=mysqli_query($con,$sqlinsert);
							echo("<script>alert('date inserted')</script>");
							mysqli_close($con);
						}
					}
				}
			}
		}
	}
	
	
}
?>
</body>
</html>