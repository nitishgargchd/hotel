<!doctype html>
<html>
<head>
<title>Remove Employee</title>
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
<h1 style="text-align:center;margin-top:10px">Remove Employee</h1>
<div class="bml">

<?php
$c=0;
//connection parameters
$link = mysqli_connect('localhost', 'root', '','hotelbook');
$query = mysqli_query($link,'select * from employee');
$num_rows=mysqli_num_rows($query);//run query
if($num_rows==0){echo "No employee exists!";}
?>

         <table>
            <tr>
                <th>EMPLOYEE ID</th>
                <th>EMPLOYEE NAME</th>
            </tr>

            <?php
			//display tables in tabular format
               while ($row = mysqli_fetch_array($query)) {
?>
                  <tr>
                <td><?php echo $row['eid']; ?></td>
                <td><?php echo $row['name']; ?></td>
				</tr>
    <?php
               }
$c=$c+1;
            ?>
        </table>
		<br>
		<br>
		<br>
<form name="f1" method="post" action="remempfin.php">
<?php
//connection parameters
$link = mysqli_connect('localhost', 'root', '','hotelbook');
$query = mysqli_query($link,'select * from employee'); //get all employees

//display in a dropdown so that the one to delete can be selected
echo "<select name=\"Employee\">"; 
while ($row = mysqli_fetch_array($query)) {
	echo "<option value=\"".$row['eid']."\">".$row['eid']."->".$row['name']."</option>";
}
echo "</select>";
?>
<br><br>
<input type="submit" value="Delete">
</form>
<br>
<br>
</div>
</body>
</html>
