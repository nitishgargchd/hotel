<?php
session_start();
mysql_connect("localhost","root","") or die ("check connection");
mysql_select_db("iwp") or die("check database");

?>
<?php
if (isset($_POST["btn"]))
{
$uname=$_POST["uname"];
$pswd=$_POST["pswd"];

$str="select uname,pass from register where uname='$uname'"; 
$res=mysql_query($str);
$var=mysql_fetch_array($res);
if($var[0]=="$uname" && $var[1]=="$pswd")
{
$_SESSION["name"]=$_POST["uname"];
header("location:sunbeam-book.php");
}
else
{
header("location:login.php");
}
}

?>