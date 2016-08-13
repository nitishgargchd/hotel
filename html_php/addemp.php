<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Add Employee</title>
<style>
*{
  margin: 0;
  padding: 0;
  border: 0;
}

html, body{
  margin-top:1%;
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
	border: 1px solid #003;
	background-color:#369;
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
	background-color:#666;
	border: black;
	border-radius: 8px;
	color:white;
	padding: 15px 32px;
	display: inline-block;
	margin-left: 325px;
	margin-top: 5%;
}

.label{
	float: left;
	width: 40%;
	margin-right: 2%;
	text-align: centre;
}
label{
	float: right;
	display: block;
	padding: 10px 5px 10px 5px;
	margin: 3px;
	margin-bottom:5px;
	width: 70%;
}

.input{
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
	height: 18px;
	
}
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
</head>
<body>

<button onclick="javascript:window.location.href='manager_home.php'" id="btn_home">HOME</button>
<form action="addfinemp.php" method="post">
<fieldset>
<legend>Add Employee</legend>
<div id="content">
<div class="label">
<label>Employee ID</label><br>
<label>Employee Name</label><br>
<label>Email</label><br>
<label>Designation</label><br>
<label>Salary</label>
</div>
<div class="input">
<input type="text" name="empid" placeholder="Enter Employee ID" required id="input1">
<input type="text" name="empname" placeholder="Enter Employee Name" required id="input1">
<input type="email" name="email" placeholder="Enter Employee Mail" required id="input1">
<input type="text" name="designation" placeholder="Enter Employee Designation" required id="input1">
<input type="number" name="salary" placeholder="Enter Employee Salary" required id="input1">
</div>
<br><br><br><br>		
<button type="submit" class="button">ADD</button>
</div>
</fieldset>
</form>
</body></html>