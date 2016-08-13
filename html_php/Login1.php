<?php
	session_start();
	if(isset($_SESSION['valid_user'])){
		echo 'you are already logged in as: '.$_SESSION['valid_user'].' <br />';
		echo 'Redirecting to home page please wait';
		header("Refresh:3 ; url=manager_home.php");
		}else{
			if(!isset($_POST['submit'])){
	// Visitor need to enter the username and password
?>

<!DOCTYPE html>
<html>
	<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css1.css" >
	
	</head>
	<body>
	
		<form class="login" method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
		<fieldset>
		<legend>Login</legend>
		<div id="content">
		<div class="label">
		<label>Username:</label><br/>
		<label>Password:</label>
		</div>
		<div class="input">
		<input type="text" placeholder="Enter Username" id="input1" name="user" required>
		<input type="password" placeholder="Enter password" id="input1" name="pass" required>
		</div>
		<button type="button" name="Back" class="button" id="back"><a href="sunbeam.html" style="text-decoration:none" >Back</a></button>
		<button type="submit" name="submit" class="button">Login</a></button>
		</div>
		</fieldset>
		</form>
	</body>
</html>

<?php 
	}else{
		//connect to mysql
		$con= mysqli_connect("localhost","root","","hotelbook");
			
		
		
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		echo $user;
		echo $pass;
		$query = "select * from manager where email = '$user' and pass= '$pass'";
		$result = mysqli_query($con,$query);
		if(!$result){
			echo "cannot run query";
			exit;
			}
			$n1=mysqli_num_rows($result);
		$row = mysqli_fetch_array($result);
		$fname = $row['firstname'];
		$lname = $row['lastname'];
		$name = $fname.' '.$lname;
		echo $n1;
		if($n1 == 1){
			echo "Login successful";
				$_SESSION['valid_user'] = $name;
				echo '<br/>';
				echo "Redirecting to manager home page please wait";
				header("Refresh:3 ; url=manager_home.php");
			}
			else{
			echo "You are not an authorized user";
					header("Refresh:2 ; url=Login1.php");
				}
	}
}
?>