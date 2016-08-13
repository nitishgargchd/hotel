<html>
<body>

<?php 

$link = mysqli_connect('localhost', 'root', '','hotelbook'); //connection to server
	
$EId =$_POST["Emp"]; 
$room =$_POST["room"]; 

	$sql = "INSERT INTO `hotelbook`.`assign` (`eid`, `roomno`) VALUES ('$EId', '$room');";
  
   $runq = mysqli_query( $link,$sql );   //run previous query
   if($runq)
	 {
	 echo 'Successful!!! Please Wait';
	 header("Refresh:3 ; url=assgnrooms.php");
	 }
 else
 {echo 'Unsuccessful';
 }
 ?>

 </body>
</html>