<?php
session_start();
?><!DOCTYPE html>

<html>
<head>
  <title>Manager Home</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../stylesheets/sunbeam.css">
  <link rel=icon href=favicon.png sizes="16x16" type="image/png">
</head>
<body bgcolor="grey">

&nbsp;



<div class="main">

  <div class="banner" style="margin-top: 100px;">
    <div class="nav">
	  <div class="logo">
	  <font size="100%">Sunb&#233;am</font><br>
	  <font>Welcome <?php echo $_SESSION['valid_user'];?></font>
	  </div>
	  <div class="dnav">
	  <ul id="drop-nav">
      <li><a href="addemp.php">Add Employee</a>
      </li>
	  <li><a href="rememp.php">Remove Employee</a>
      </li>
      <li><a href="assgnrooms.php">Employee Assignment</a>
      </li>
	  <li><a href="booking.php">Booking</a>
        </li>
	  <li><a href="vubookings.php">View Bookings</a>
      </li>
	  <li><a href="logout.php">Logout</a>
      </li>
	  </ul>
	  </div>
	</div>
	<div class="image">
	  <img src="../images/sunbeam/hotel.jpg" width="100%" height="100%">
	  </div>
	<div class="slider">
	  <div class="s">
	  <img src="../images/sunbeam/hotel.jpg" width="100%" height="100%">
	  </div>
	  <div class="s">
	  <img src="../images/sunbeam/hotel1.jpg" width="100%" height="100%">
	  </div>
	  <div class="s">
	  <img src="../images/sunbeam/hotel2.jpg" width="100%" height="100%">
	  </div>
	  <div class="s">
	  <img src="../images/sunbeam/hotel3.jpg" width="100%" height="100%">
	  </div>
	</div>
  </div>
&nbsp;
<br />
<br />
<br />
<br />
<div class="footer">
  <div class="h">
    <div color="red">
	  <p><font color="grey" style="float: left; margin: 1% 0% 0% 3%;">copyright 2016.</font></p>
	</div>
    <div class="n2">
    <ul>
      <li><img src="../images/sunbeam/fb.jpg" height="10%" width="10%">
      </li>
      <li><img src="../images/sunbeam/twit.jpg" height="10%" width="10%">
      </li>
	  <li><img src="../images/sunbeam/google.jpg" height="10%" width="10%">
      </li>
	  <li><img src="../images/sunbeam/skype.jpg" height="10%" width="10%">
      </li>
	  <li><img src="../images/sunbeam/in.jpg" height="10%" width="10%">
      </li>
	  <li><img src="../images/sunbeam/blog.jpg" height="10%" width="10%">
      </li>
    </ul>
    </div>
  </div>
</div>  
</body>
</html>