<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
      <form action="login1.php" target="_blank">
        <div class="w3-row-padding" style="margin:0 -16px;">
          <div class="w3-half w3-margin-bottom">
            <label><i class="fa fa-calendar-o"></i> EMAIL</label>
            <input class="w3-input w3-border" type="text" placeholder="Enter Your Email" name="un" required>
          </div>
          <div class="w3-half">
            <label><i class="fa fa-calendar-o"></i> PASSWORD</label>
            <input class="w3-input w3-border" type="text" placeholder="Enter Your Password" name="pwd" required>
          </div>
        </div>
  <div class="form-group form-check">
  <tr>
   <td> <label class="form-check-label"></label></td>
   </tr>
   <tr>
    <td>  <input class="form-check-input" type="checkbox"> Remember me
    </label></td>
    </tr>
  </div>
  <tr>
<td>  <button type="submit" class="btn btn-primary">Submit</button></td>
</tr>

 
<div class="w3-container w3-red">
      <h2><i class="fa fa-bed w3-margin-right"></i></h2>
    </div>






</body>

</html>