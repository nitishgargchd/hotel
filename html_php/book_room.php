<?php

mysql_connect("localhost","root","") or die ("check connection");
mysql_select_db("iwp") or die("check database");

?>
<?php
$name=$_POST["Name"];
$email=$_POST["EMail"];
$pno=$_POST["pno"];
$place=$_POST["place"];

if (isset($_POST["btn"]))
{
$str="insert into bookings values('$name','$email','$pno','$place')";
mysql_query($str);
header("location:sunbeam-book.html");
}
?>