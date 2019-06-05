<?php
error_reporting(E_ERROR);

$user = $_POST['user'];
$pass = $_POST['pass'];
$error="";
$success="";
if(isset($_POST['submit'])){
	if($user=="Guruprasanna" || $user=="NavyaBG"){
		if($pass=="prasanna"|| $pass=="navyabg"){
		header("Location:admin.php");
	}
	else{
		echo "Invalid Password";
	}
}
else{
	echo "Invalid Username";
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Login Page</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class ="login-box">
		<form method="POST">
		<h1>Admin Login Page</h1>
		<div class="textbox">
			<i class="fa fa-user" aria-hidden="true"></i>
			<label>Username:</label>
			<input type="text" placeholder="Username" name="user" value="" required><br><br> 
		</div>
		<div class="textbox">
			<i class="fa fa-lock" aria-hidden="true"></i>
			<label>Password :    </label>
			<input type="password" placeholder="password" name="pass" value="" required><br><br>
		</div>
		<input class="btn" type="submit" name="submit" value="Sign-in">

<h3> <a href="index.php">HOME</a></h3>
</form>
</div>
</body>
</html>
