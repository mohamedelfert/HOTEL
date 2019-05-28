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
<table align="center" width="500" height="500">
 <form action="add_employee1.php">
  <div class="form-group">
<tr>
<td>  <label for="fristname">FRISTNAME:</label></td>
  <tr>
   <td> <input type="text" class="form-control" id="fn" name="fn"></td>
   </tr>
  </div>
  <div class="form-group">
  <tr>
    <td><label for="lastname">LASTNAME:</label></td>
    </tr>
    <tr>
    
<td>    <input type="text" class="form-control" id="ln" name="ln"></td>
</tr>
  </div>
  
    <div class="form-group">
  <tr>
    <td><label for="address">ADDRESS:</label></td>
    </tr>
    <tr>
    
<td>    <input type="textarea" class="form-control" id="ad" name="ad"></td>
</tr>
  </div>
  <div class="form-group">
  <tr>
    <td><label for="nationalID">NATIONALID:</label></td>
    </tr>
    <tr>
    
<td>    <input type="text" class="form-control" id="ni" name="ni"></td>
</tr>
  </div>
  <div class="form-group">
  <tr>
    <td><label for="phone">PHONE:</label></td>
    </tr>
    <tr>
    
<td>    <input type="mobile" class="form-control" id="ph" name="ph"></td>
</tr>
  </div>
    <div class="form-group">
  <tr>
    <td><label for="mobile">MOBILE:</label></td>
    </tr>
    <tr>
    
<td>    <input type="mobile" class="form-control" id="mb" name="mb"></td>
</tr>
  </div>

 <div class="form-group">
 <tr>
 <td ><label for="salary">SALARY:</label></td>
 </tr>
 <tr>
 <td><input type="text" class="form-control" name="salary" id="salary" /></td>
 </tr>
 </div>
 <div class="form-group">
 <tr>
 <td ><label for="email">E_MAIL:</label></td>
 </tr>
 <tr>
 <td><input type="text" class="form-control" name="email" id="email" /></td>
 </tr>
 </div>
  <div class="form-group">
 <tr>
 <td ><label for="password">PASSWORD:</label></td>
 </tr>
 <tr>
 <td><input type="text"  class="form-control" name="password" id="password" /></td>
 </tr>
 </div>

   <div class="form-group">
  <tr>
    <td><label for="gender" id="ge">GENDER:</label></td>
    </tr>
    <tr>
    
          <td><input name="gender" type="radio" id="radio" value="m" checked="checked" /> 
            Male   <input type="radio" name="gender" id="radio2" value="radio2" />FEMALE</td>
</tr>
  </div>
    <div class="form-group">
  <tr>
    <td><label for="DATEOFBIRTH" id="da" name="da">DATEOFBIRTH:</label></td>
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
	$s=1920;
	do
	{
	echo("<option>".$s."</option>");
	$s++;	
	}
	while($s<=date("Y"));
	?>
              </select></td>
             
            </tr>
          </table></td>
</tr>
  </div>
     <div class="form-group">
 <tr>
 
 <td><input type="checkbox" name="act" id="act" />activation</td>
 </tr>
 </div>
      <div class="form-group">
 <tr>
 
 <td><input type="checkbox" name="admin" id="admin" />admin</td>
 </tr>
 </div>
 
 <div class="form-group">
  <tr>
<td>  <button type="submit" class="btn btn-primary">reg</button></td>
</tr>
</div>
</form> 
</table>


</body>
</html>