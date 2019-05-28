<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
include("header1.php");
?>
</head>
<?php
include("navbar.php");
//include ("../header.php");
?>
<form action="add_rooms1.php" name="rooms" method="post">
<table width="27%" border="0" align="center" bgcolor="#CCCCCC">
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td>add_rooms</td>
<td><labol for="add"></labol>
<input type="text" name="add" id="add" />
</td>
</tr>
 <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
<td>price</td>
<td><labol for="price"></labol>
<input type="text" name="price" id="price" />
</td>
</tr>
 <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
    <tr>
    <td>&nbsp;</td>
    <td><input name="type" type="radio" id="type" value="0" />single
    <input name="type" type="radio" id="type" value="1" />Dauble
    </td>
    
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input name="act" type="checkbox" id="act" value="1" />
      Activation</td>
  </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>

    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="AddButton" id="AddButton" value="Add" /></td>
  </tr>
</table>
</form>
<body>
</body>
</html>