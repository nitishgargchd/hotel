<?php
session_start();
?>
<?php
/*
if(!$_SESSION["name"])
{
header("location:logout.php");
}*/
?>

<html>
<head>
<style type="text/css">

</style>
</head>
<body bgcolor="grey">
<head>
  <title></title>
  <meta charset="UTF-8">
  <link rel=icon href=favicon.png sizes="16x16" type="image/png">
  <link rel="stylesheet" href="../stylesheets/sunbeam-book.css">
  


</head>	
  <div class="main" style="height: 600px;">
  <div class="header">
    <h1 class="h"><font color="white">Book a room</font></h1>
  
  
	</div>
	<br />
	&nbsp;
	&nbsp;
	&nbsp;
	&nbsp;
	<?php
echo "WELCOME"."     ". @$_SESSION["name"];
?>  

<br />
<br />
&nbsp;
	&nbsp;
	&nbsp;
	&nbsp;
	
	<a href="logout.php"style="text-decoration: none;">Logout</a>
	<form name="myForm"  onsubmit="return(validate());" class="demoForm" action="book_room.php" method="post" style="width: 550px;">
Name : 
<br />
<input type="text" name="Name" style="width: 100%"/><br/><br/>
Email: 
<br />
<input type="text" name="EMail" style="width: 100%"/><br/><br/>
Contact No: 
<br />
<input type="text" name="pno"  style="width: 100%"/><br/><br/>
Place:
<br />
<input type="text" name="place"  style="width: 100%"/><br/><br/>
<input type="submit" value="Book" style="margin-left: 35%" name="btn"/>
</form><br /><br /><br /><br />
  
  
    <script type="text/javascript">
function validateEmail()
{
	var emailID = document.myForm.EMail.value;
	atpos = emailID.indexOf("@");
	dotpos = emailID.lastIndexOf(".");
	if (atpos < 1 || ( dotpos - atpos < 2 ))
	{
		alert("Please enter correct email ID")
		document.myForm.EMail.focus() ;
		return false;
	}
	return( true );
}

function validate()
{
	if( document.myForm.Name.value == "" )
	{
	alert( "Please provide your name!" );
	document.myForm.Name.focus() ;
	return false;
	}

	if( document.myForm.EMail.value == "" )
	{
	alert( "Please provide your Email!" );
	document.myForm.EMail.focus() ;
	return false;
	}

	else
	{
	var ret = validateEmail();
	if( ret == false )
		{
		return false;
		}
	}

	if(document.myForm.pno.value == "" ||
	   isNaN( document.myForm.pno.value ) ||
	   document.myForm.pno.value.length < 10
	  )
	{
		alert( "Please provide a valid mobile number." );
		document.myForm.pno.focus() ;
		return false;
	}	
	if( document.myForm.place.value == "" )
	{
	alert( "Please provide your location!" );
	return false;
	}
	alert("Your room is booked. We will contact you soon!");
	return( true );
}
</script>
</body>
</html>