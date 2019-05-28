



<?php
echo('
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">HOTEL</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="../index.php">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">visitor<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="add_visitor.php">Add</a></li>
          <li><a href="ModifySpecial.php">Modify</a></li>
          <li><a href="#">Report</a></li>
        </ul>
      </li>
	  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">employee<span class="caret"></span></a>
        <ul class="dropdown-menu">
		<li><a href="">Aprove employee</a></li>
          <li><a href="add_employee.php">Add</a></li>
          <li><a href="#">Modify</a></li>
          <li><a href="#">Report</a></li>
        </ul>
      </li>
	  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Reservation <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="resrvation.php">Add</a></li>
          <li><a href="#">Modify</a></li>
          <li><a href="#">Report</a></li>
        </ul>
      </li>
	  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">rooms <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="add_rooms.php">Add</a></li>
          <li><a href="modify.php">Modify</a></li>
          <li><a href="#">Report</a></li>
        </ul>
      </li>
	  
      
    </ul>
  </div>
</nav>

');
?>

