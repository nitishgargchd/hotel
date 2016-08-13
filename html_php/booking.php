<!doctype html>
<html>
<head>
<style>
*{
  margin: 0;
  padding: 0;
  border: 0;
}

html, body{
  width: 80%;
  height: 100%;
  font-family: 'Open Sans', sans-serif;
  font-weight: 200;
  margin-left:auto;
  margin-right:auto;
  position:relative;
}
header{
	margin-top: 5%;
	margin-bottom:2%;
	padding: 5px;
}
nav {
	border: 1px solid #332500;
	background-color:#006;
	color:white;
	padding: 20px;
	font-size: 20px;
}

#logout{
	float:right;
}
a {
	color:#ffffff;
}
legend{
	display:block;
	text-align:center;
	position:relative;
	width: 96%;
	border: 2px solid #332500;
	background: #003;
	padding: 15px;
	color: #fff;
	font-size: 25px;
}
#content{
	border: 2px solid black;
	height: 40%;
	padding: 8% 6%;
	margin-top: 5px;
}

.button{
	background-color: #4CAF50;
	border: black;
	border-radius: 8px;
	color:white;
	padding: 15px 32px;
	display: inline-block;
	margin-left: 315px;
	margin-top: 12%;
}

.label{
	float: left;
	width: 40%;
	margin-right: 2%;
	text-align: right;
}
label{
	float:right;
	display: block;
	padding: 10px 5px 10px 5px;
	margin: 3px;
	margin-bottom:5px;
	width: 70%;
}

.input{
	margin-top: -35px;
	float: right;
	width: 55%;
	display: block;
}

#input1{
	display: block;
	padding: 10px 5px 10px 5px;
	margin-top: 6px;
	margin-bottom: 3px;
    border: 1px solid #EDEDED;
	border-radius: 4px;
	width: 70%;
	height: 15px;
	
}
select{width:40%;}
#back{
	float:left;
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
<meta charset="utf-8">
<title>Book Room</title>
</head>

<body>
<button onclick="javascript:window.location.href='manager_home.php'" id="btn_home">HOME</button>
<form name="book_room" action="bookroomfin.php" method="post">
<fieldset>
<legend>BOOK ROOM</legend>
<div id="content">
<div class="label">
<label>Customer ID</label><br>
<label>Check In Date</label><br>
<label>Check Out Date</label><br>
 </div>

<div class="input">

<?php
//connection parameters
$link = mysqli_connect('localhost', 'root', '','se_project');
?>
<br>
<br>
<input type="text" name="custID"  id="input1" required>
<input type="date" name="in_date"  id="input1" required>
<input type="date" name="out_date"  id="input1" required>
<br>
</div>
<input type="submit" name="submit" value="Book" class="button">
</div>
</fieldset>
</form>
		</body>
</html>