<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
include("header1.php");
include("../connection.php");
$sql="select RId,number from rooms";
$res=mysqli_query($con,$sql);
$sqlselect="select Id,concat(EFNAME,ELNAME) as fullname from employees where EACTIVATION=1";
$resselect=mysqli_query($con,$sqlselect);
$sqlselect1="select VID,concat(VFNAME,VLNAME) as fullnamevisitor from visitor";
$resselect1=mysqli_query($con,$sqlselect1);
?>
</head>

<body>

<?php
include("navbar.php");
?>

<form action="resrvation1.php" method="post" name="f1">
<div class="form-group">
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
    
  </tr>
</div>

   <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>

<div class="form-group">

    <tr>
      <td>emid</td>
      <td>    <select name="employee" id="select">
    <option value="0">--choose--</option>
    <?php
	while($row1=mysqli_fetch_array($resselect))
	{
		echo("<option value='".$row1["Id"]."'>".$row1["fullname"]."</option>");
	}
	
	?>
</select>
        
    </tr>
    </div>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <div class="form-group">
    <tr>
      <td>visitor</td>
      <td><select name="visitor" id="visitor">
      <option>chooes</option>
      <?php
	  while($row2=mysqli_fetch_array($resselect1))
	  {
		  echo("<option value='".$row2["VId"]."'>".$row2["fullnamevisitor"]."</option>");
	  }
	  
	  ?>
      </td>
      <td><a name="visitor" id="visitor" href="add_visitor.php">signup</a></td>
      </tr>
      </select>
      </div>
   <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    
       <tr>
      <td>&nbsp;</td>
  
      
    </tr>
        <div class="form-group">
  <tr>
    <td><label for="check in " id="in" name="in">check in:</label></td>
    </tr>
    <tr>
    
<td><table width="50%" border="0">
            <tr>
              <td><select name="day">
                <option>day</option>
                <?php
   for($i=1;$i<=31;$i++)
   {
	   echo("<option>".$i."</option>");
   }
   ?>
              </select></td>
              <td><select name="month">
                <option>month</option>
                <?php
	$x=1;
	while($x<=12)
	{
	 echo("<option>".$x."</option>");
	 $x++;	
	}
	
	?>
              </select></td>
              <td><select name="year">
                <option>year</option>
                <?php
	$s=2019;
	do
	{
	echo("<option>".$s."</option>");
	$s++;	
	}
	while($s<=date("Y"));
	?>
              </select></td>
             
            </tr>
          </table>
          </td>
</tr>
  </div>
     <div class="form-group">
  <tr>
    <td><label for="check out" id="out" name="out">check out:</label></td>
    </tr>
    <tr>
    
<td><table width="50%" border="0">
            <tr>
              <td><select name="day1">
                <option>day</option>
                <?php
   for($i=1;$i<=31;$i++)
   {
	   echo("<option>".$i."</option>");
   }
   ?>
              </select></td>
              <td><select name="month1">
                <option>month</option>
                <?php
	$x=1;
	while($x<=12)
	{
	 echo("<option>".$x."</option>");
	 $x++;	
	}
	
	?>
              </select></td>
              <td><select name="year1">
                <option>year</option>
                <?php
	$s=2019;
	do
	{
	echo("<option>".$s."</option>");
	$s++;	
	}
	while($s<=date("Y"));
	?>
              </select></td>
             
            </tr>
          </table>
          </td>
</tr>

  </div>
      <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
     </div>
  <div class="form-group">
  <tr>
    <td><label for="res" id="ge">resrvation kind:</label></td>
    </tr>
    <tr>
    
          <td><input name="kind" type="radio" id="radio" value="0" checked="checked" /> 
            visa   <input type="radio" name="kind" id="radio2" value="radio2" />cash</td>
</tr>
  </div>
       <tr>
      <td>&nbsp;</td>

      
    </tr>
    <div class="form-group">
        <tr>
      <td><input type="hidden" name="rid" value="<?php echo($row1["RId"])?>"/></td>
      <td>&nbsp;</td>
    </tr>
    </div>
    <div class="form-group">
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Button" id="Button" value="resrvation" /> </td>
    </tr>
    </div>
  </table>
  <?php
  
  mysqli_close($con);
  ?>
  </form>
</body>
</html>