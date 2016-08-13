<?php

mysql_connect("localhost","root","") or die ("check connection");
mysql_select_db("iwp") or die("check database");

?>
<html>
<head>
<style type="text/css">
body {
    background-color:grey;
}
form
{
width:330px;
margin-top:50px;
margin-left:500px;
background-color:grey;
}
label {
        display: block; 
        float: left; 
        padding-top: 8px
    }
    textarea {
        resize: none; 
        overflow-y: hidden;        
    }
</style>
<script type="text/javascript">
			
					function validate()
					{
					var fname=document.getElementById("first-name").value;
					var lname=document.getElementById("last-name").value;
					var email=document.getElementById("email").value;
					var date=document.getElementById("dob").value;
					var address=document.getElementById("house-address").value;
					var choose="";
					var len=document.reg-form.rad.length;
					for(var i=0;i<len;i++)
					{
						if(document.reg-form.rad[i].checked)
						{
							choose=document.reg-form.rad[i].value;
						}
					}
					if(fname=="")
					{
					alert("Enter firstname");
					return false;
					}					

					if(lname=="")
					{
					alert("Enter lastname");
					return false;
					}
					if(email=="")
					{
					alert("Enter email");
					return false;
					}
					if(date=="")
					{
					alert("Enter date");
					return false;
					}
					if(choose=="")
					{
					alert("Choose gender");
					return false;
					}
					if(address=="")
					{
					alert("Enter address");
					return false;
					}
					return true;
					}
					</script>
</head>
<body>
<form action="reg_add.php" name="reg-form" method="POST">
	<div align="center" style="border:1px solid black; font-weight: bold; font-size: 20px;">NEW SIGN IN!!!</div>
	<br />
	<br />
	FIRST NAME
	<br />
	<input type="text" value="" name="first-name" id="first-name" style="width:100%;" pattern="^[a-zA-Z]{3,20}$">	
	<br />
	<br />
	LAST NAME
	<br />
	<input type="text" value="" name="last-name" id="last-name" style="width:100%;" pattern="^[a-zA-Z]{3,20}$">
	<br />
	<br />
	MOBILE NUMBER
	<br />
	<input type="text" name="mob-no" id="mob-no" pattern="^[0-9]{10}$" style="width:100%;">
	<br />
	<br />
	EMAIL
	<br />
	<input type="email" name="email" id="email" style="width:100%;">
	<br />
	<br />
	DATE OF BIRTH
	<br />
	<input type="date" id="dob" name="dob" value="" style="width:100%;">
	<br />
	<br />
	GENDER
	<input type="radio" name="rad" value="MALE">MALE
	<input type="radio" name="rad" value="FEMALE">FEMALE
	<br />
	<br />
	<label>ADDRESS</label>
	<br />
	<textarea name="house-address" id="house-address" cols=22 rows=5 pattern="^[a-zA-Z]{3,200}$" value="" style="width:100%;"></textarea>
	<br />
	<br />
	USERNAME
	<br />
	<input type="text" value="" name="uname" id="uname" pattern="^[a-zA-Z0-9_]{5,20}$" style="width:100%;">
	<br />
	<br />
	PASSWORD
	<br />
	<input type="password" value="" name="pswd" id="pswd" pattern="^[a-zA-Z0-9]{9,15}$" style="width:100%;">
	<br />
	<br />
	<center><input type="submit" value="submit" name="btn" onclick="return validate()"></center>
	</center>
</form>
<center>
<button onclick="window.location.href='/sunbeam/html/login.php'">Back</button>
</center>
</body>
</html>