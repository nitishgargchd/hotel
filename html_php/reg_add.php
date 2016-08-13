<?php

mysql_connect("localhost","root","") or die ("check connection");
mysql_select_db("iwp") or die("check database");

?>
<?php
$first_name=$_POST["first-name"];
$last_name=$_POST["last-name"];
$mob_no=$_POST["mob-no"];
$email=$_POST["email"];
$dob=$_POST["dob"];
$gen=$_POST["rad"];
$house_address=$_POST["house-address"];
$uname=$_POST["uname"];
$pswd=$_POST["pswd"];
;

if (isset($_POST["btn"]))
{
$str="insert into register values('$first_name','$last_name','$mob_no','$email','$dob','$gen','$house_address','$uname','$pswd')";
mysql_query($str);
header("location:login.php");
}
?>