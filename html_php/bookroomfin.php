<html>
<body>

<?php 
$cid = $_POST["custID"];
$indate = $_POST["in_date"];
$outdate = $_POST["out_date"];

$link = mysql_connect('localhost', 'root', '');
$db = mysql_select_db('hotelbook', $link); 
//$sql = "INSERT INTO `hotelbook`.`bookings` (`customerID`, `checkin`, `checkout`, `bookdate`) VALUES ('$cid', '$indate', '$outdate', 'date(\"Y-m-d\")');";
$sql = "INSERT INTO `hotelbook`.`bookings` (`customerID`, `checkin`, `checkout`) VALUES ('$cid', '$indate', '$outdate');";
    mysql_select_db('hotelbook');
   $runq = mysql_query( $sql, $link );
   if($runq)
	  {
	 echo 'Successful!!! Please Wait';
	 header("Refresh:3 ; url=booking.php");
	 }
 else
echo 'unsuccessful    '. mysql_error();
?>

</body>
</html>