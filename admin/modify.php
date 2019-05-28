<?php

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
include("header1.php");
include("../connection.php");
$sql="select RId,number,PRICE from rooms";
$res=mysqli_query($con,$sql);
@$sqlselect="select * from rooms where RId=".$_REQUEST["room1"];
$resselect=mysqli_query($con,$sqlselect);

?>
</head>

<body>
<?php
include("navbar.php");
?>
<form action="" method="post" name="f1">
<table width="39%" border="0" align="center">
  <tr>
    <td width="42%">room_number</td>
    <td width="33%">
    <select name="room1" id="select">
    <option value="0">--choose--</option>
    <?php
	while($row=mysqli_fetch_array($res))
	{
		echo("<option value='".$row["RId"]."'>".$row["number"]."</option>");
	}
	
	?>
</select>
 </td>
    <td width="25%"><input type="submit" name="button" id="button" value="Search" /></td>
  </tr>
</table>
</form>

<form action="modify_rooms.php" method="post" name="f2">
<?php
if(@$row1=mysqli_fetch_array(@$resselect))
{

?>
<table width="27%" border="0" align="center" bgcolor="#CCCCCC">
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>room_number</td>
      <td><label for="room1"></label>
        <input type="text" name="room1" id="room1"  value="<?php echo($row1["number"]);?>"/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>price</td>
      <td><label for="price1"></label>
      <input type="text" name="price1" id="price1" value="<?php echo($row1["PRICE"]);?>"/></td>
      </tr>
   <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    
       <tr>
      <td>&nbsp;</td>
      <td>
      <?php
	  if($row1["TYPE"]==1)
	  {
		  echo('<input type="radio" name="type" id="type" value="1" checked="checked"/> single') ;
		  echo('<input type="radio" name="type" id="type" value="1" />Dauble ');
	  }
	  else
	  {
		   echo('<input type="radio" name="type" id="type" value="1" /> single') ;
		  echo('<input type="radio" name="type" id="type" value="1" checked="checked" />Dauble ');
	  }
	  ?>
      </td>
      
    </tr>
      <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    
       <tr>
      <td>&nbsp;</td>
      <td>
      <?php
	  if($row1["ractivation"]==1)
	  {
		  echo('<input type="checkbox" name="act" id="act" value="1" checked="checked"/> activation');
	  }
	  else
	  {
		  echo('<input type="checkbox" name="act" id="act" value="1" /> ');
	  }
	  ?>
      </td>
      
    </tr>
        <tr>
      <td><input type="hidden" name="rid" value="<?php echo($row1["RId"])?>"/></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Button" id="Button" value="Update" />  <input type="submit" name="Button" id="Button" value="Delete" /></td>
    </tr>
  </table>
  <?php
  }
  mysqli_close($con);
  ?>
  </form>
</body>
</html>