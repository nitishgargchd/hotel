<html>
<body>

<?php 
$empid = $_POST["empid"];
$empname = $_POST["empname"];
$email = $_POST["email"];
$designation = $_POST["designation"];
$salary = $_POST["salary"];

$link = mysql_connect('localhost', 'root', '');
$db = mysql_select_db('hotelbook', $link); 
$sql = "INSERT INTO `hotelbook`.`employee` (`eid`, `name`, `email`, `salary`, `designation`) VALUES ('$empid', '$empname', '$email', '$salary', '$designation');";
    mysql_select_db('hotelbook');
   $runq = mysql_query( $sql, $link );
   if($runq)
	 {
	 echo 'Successful!!! Please Wait'';
	 header("Refresh:3 ; url=addemp.php");
	 }
 else
echo 'unsuccessful    '. mysql_error();
?>

</body>
</html>