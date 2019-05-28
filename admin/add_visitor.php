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
 <form action="add_visitor1.php">
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
    <td><label for="nationalID">NATIONALID:</label></td>
    </tr>
    <tr>
    
<td>    <input type="text" class="form-control" id="ni" name="ni"></td>
</tr>
  </div>
    <div class="form-group">
  <tr>
    <td><label for="nationalID">PASSPORTID:</label></td>
    </tr>
    <tr>
    
<td>    <input type="text" class="form-control" id="passport" name="passport"></td>
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
<div>
<tr>
<td></td>
<td></td>
</tr>
</div>

<div class="form-group">
  <tr>
<td>  <button type="submit" class="btn btn-primary">reg</button></td>
</tr>
</div>
</form> 
</body>
</html>