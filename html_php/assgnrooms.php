<!doctype html>
<html>
<head>
<title>Room Assignment</title>
<style>
input[type=submit],button
{
margin:10px;
width:15%;
height:35px;
border:1px solid black;
border-radius:3px;
background-color:hsla(135,85%,75%,0.4);
cursor:pointer;
}
input,select{
border:1px solid black;
border-radius:5px;
width:40%;
padding:0;
margin:0;
height:40px;
}
.bml{
text-align:center;
margin-left:200px;
margin-right:200px;
margin-top:50px;
padding-top:20px;
padding-bottom:130px;
height:620px;
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
}
select{width:35%;}
button	
{
margin:10px;
width:15%;
height:35px;
border:1px solid black;
border-radius:3px;
background-color:hsla(135,85%,75%,0.4);
cursor:pointer;
}
#formwala{margin-left:30px;
width:65%;
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
</head>
<body>
<button onclick="javascript:window.location.href='manager_home.php'" id="btn_home">HOME</button>
<h1 style="text-align:center;margin-top:10px">Room Assignment</h1>
<div class="bml">


<form name="f1" method="post" action="assgnroomfin.php">
<?php
//connection parameters
$link = mysqli_connect('localhost', 'root', '','hotelbook');

$query = mysqli_query($link,"select * from employee");
echo "Select Employee";
echo "<br />"; 
//echo html element select
echo "<select name=\"Emp\">"; 
while ($row = mysqli_fetch_array($query)) {
	echo "<option value=\"".$row['eid']."\">".$row['eid']."->".$row['name']."</option>";
	}
echo "</select>";
echo "<br />";
echo "<br />";
echo "<br />";

echo "Select Room";
echo "<br />";
$query = mysqli_query($link,"select * from rooms");

//echo html element select
echo "<select name=\"room\">"; 
while ($row = mysqli_fetch_array($query)) {
	echo "<option value=\"".$row['roomno']."\">".$row['roomno']."->".$row['type']."</option>";
	}
echo "</select>";
echo "<br />";
echo "<br />";
echo "<br />";
?>
<input type="submit" value="Assign">
</form>
<br>
<br>
</div>
</body>
</html>
