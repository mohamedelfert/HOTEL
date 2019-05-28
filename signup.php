<!DOCTYPE html>
<html lang="en">
<head>
   

<?php
include("header1.php");
?>
</head>
<body class="w3-light-grey>
<?php
include("navbar1.php");

?>
<?php
include("header2.php");
?>

<div class="w3-container w3-white w3-padding-16">
      <form action="signup1.php" target="_blank">
        <div class="w3-row-padding" style="margin:0 -16px;">
          <div class="w3-half w3-margin-bottom">
            <label><i class="fa fa-calendar-o"></i>FIRSTNAME</label>
            <input class="w3-input w3-border" type="text" placeholder="Enter Your frist name" name="fn" required>
          </div>
          <div class="w3-half">
            <label><i class="fa fa-calendar-o"></i>LASTNAME</label>
            <input class="w3-input w3-border" type="text" placeholder="Enter Your lastname" name="ln" required>
          </div>
        </div>
          <div class="form-group form-check">
  <tr>
   <td> <label class="fa fa-calendar-o">ADDRESS</label></td>
   </tr>
   <tr>
    <td>  <input class="w3-input w3-border" type="text" name="ad"> 
    </label></td>
    </tr>
  </div>
  <div class="form-group form-check">
  <tr>
   <td> <label class="fa fa-calendar-o">NATIONALID</label></td>
   </tr>
   <tr>
    <td>  <input class="w3-input w3-border" type="text" name="ni"> 
    </label></td>
    </tr>
  </div>
  <div class="form-group form-check">
  <tr>
   <td> <label class="fa fa-calendar-o">PHONE</label></td>
   </tr>
   <tr>
    <td>  <input class="w3-input w3-border" type="text" name="ph"> 
    </label></td>
    </tr>
  </div>
  <div class="form-group form-check">
  <tr>
   <td> <label class="fa fa-calendar-o">MOBILE</label></td>
   </tr>
   <tr>
    <td>  <input class="w3-input w3-border" type="text" name="mb"> 
    </label></td>
    </tr>
  </div>
    <div class="form-group form-check">
  <tr>
   <td> <label class="fa fa-calendar-o">EMAIL</label></td>
   </tr>
   <tr>
    <td>  <input class="w3-input w3-border" type="text" name="email"> 
    </label></td>
    </tr>
  </div>
    <div class="form-group form-check">
  <tr>
   <td> <label class="fa fa-calendar-o">PASSWORD</label></td>
   </tr>
   <tr>
    <td>  <input class="w3-input w3-border" type="password" name="password"> 
    </label></td>
    </tr>
  </div>

   <div class="form-group form-check">
  <tr>
    <td><label for="gender" id="ge" class="fa fa-calendar-o">GENDER:</label></td>
    </tr>
    <tr>
    
          <td><input class="w3-input w3-border" name="gender" type="radio" id="radio" value="m" checked="checked" /> 
            Male   <input  class="w3-input w3-border" type="radio" name="gender" id="radio2" value="radio2" />FEMALE</td>
</tr>
  </div>
   <div class="form-group form-check">
  <tr>
    <td><label class="w3-input w3-border" for="DATEOFBIRTH" id="da" name="da">DATEOFBIRTH:</label></td>
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
  <tr>
<td>  <button type="submit" class="btn btn-primary">reg</button></td>
</tr>
</body>
</html>