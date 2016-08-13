<?php
session_start();
mysql_connect("localhost","root","") or die ("check connection");
mysql_select_db("iwp") or die("check database");

?>
<html>
<head>
<style type="text/css">
body {
    background-image: url("../images/sunbeam/book.jpg");
}
#d1
{
margin-right:100px;
}

</style>
</head>
<body>
<div id="d1">
<br />
<br />
<br />
<br />
<br />
<br />
<h2><center>SUNBEAM HOTEL</center></h2>
<center>
<form action="log_check.php" method="POST">
Username
<input type="text" name="uname" id="uname">
<br />
<br />
Password
<input type="password" name="pswd" id="pswd">
<br />
<br />
<center><input type="submit" name="btn" value="Login"></center>
</form>
New user???<a href="register.php">Register Here</a>
<br />
<br />
<button onclick="window.location.href='/sunbeam/html/sunbeam.html'">Back</button>
</center>
</div>
</body>
</html>