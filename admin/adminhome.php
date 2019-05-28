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
<?php
include("header1.php");
?>
</head>

<body>










<?php
include("navbar.php");
?>


<?php
include("../header2.php");
?>



</body>
</html>