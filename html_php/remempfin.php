<html>
<body>

<?php 

$link = mysqli_connect('localhost', 'root', '','hotelbook'); //connection to server
	
$EId =$_POST["Employee"]; 

	$sql = "delete from `hotelbook`.`employee` where eid='$EId'";
  
   $runq = mysqli_query( $link,$sql );   //run previous query
   if($runq)
	 {
	 echo 'Successful!!! Please Wait';
	 header("Refresh:3 ; url=rememp.php");
	 }
 else
 {echo 'Unsuccessful';
 }
 ?>

 </body>
</html>