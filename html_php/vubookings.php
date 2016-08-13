<style>
.bml{
text-align:center;
margin-left:200px;
margin-right:200px;
margin-top:20px;
padding-top:20px;
padding-bottom:130px;
height:600px;
}
table
{
width:75%;
margin-left:100px;
}
table td,th
{
padding:10px;
text-align:left;
}
table,table th,table td
{
border:1px solid black;
border-collapse:collapse;
}
table th{
background-color:#003;
	color:white;
}
select,input[type="text"]{width:15%;
height:25px;
}
button,input[type="submit"]	
{
margin:10px;
width:15%;
height:35px;
border:1px solid black;
border-radius:3px;
background-color:hsla(135,85%,75%,0.4);
cursor:pointer;
}

#btn_home{
position:fixed;
color:white;
background-color: #99cc00;
width: 70px;
height:60px;
bottom:-20px;
right: 20px;
font-size:17px;
border:none;
outline:none;
}

</style>
<div class="bml">
<h1> VIEW BOOKINGS </h1>
<button onclick="javascript:window.location.href='manager_home.php'" id="btn_home">HOME</button>
<?php
	$servername = "localhost";
    $usernam = "root";
    $passwor = "";

// Create connection
$conn = mysqli_connect($servername, $usernam, $passwor, 'hotelbook');

$q=mysqli_query($conn, "SELECT * FROM bookings");


echo "<table border='1'>

<tr>

<th>   Booking ID</th>
<th>   Customer ID</th>
<th>   Check-In Date</th>
<th>   Check-Out Date</th>
<th>   Booking Date</th>
</tr>";



echo "<tr>";



while($row = mysqli_fetch_assoc($q))
{
	$bid=$row['bookID'];
	$cid=$row['customerID'];
	$cin=$row['checkin'];
	$cout=$row['checkout'];
	$bdate=$row['bookdate'];


echo "<td>" . $bid . "</td>";
echo "<td>" . $cid . "</td>";
echo "<td>" . $cin . "</td>";
echo "<td>" . $cout . "</td>";
echo "<td>" . $bdate . "</td>";
echo "</tr>";
}
echo"</table>";

?>
</div>