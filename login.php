<?php 
	require_once("function.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
	<link rel="icon" type="image/png" href="image/icon2.png">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="jquery/jquery-3.2.1.min.js">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<script src="bootstrap/js/bootstrap.min.js"></script>

<style>
	body{
    background-image: url("image/m2.jpg");
     background-repeat: no-repeat;
     background-size: cover;
}

</style>
</head>
<body id="login">
	<?php 
	require_once("header.php");
	 ?><br><br><br><br><br><br>
<br><br><br><br><br><br>
	 <div class="container">
	<center>
	<div class="login">
	<form  method="POST" action="login_process.php"  >
	<p style="font-size: 20px;font-family: arial rounded mt;">LOGIN</p>
	<img src="image/logo.png" width="350">
 
    
    <input type="username" name="username" class="login-input" placeholder="username" required>
    <br>
    <input type="password" name="password" class="login-input" placeholder="password" required>
    <br><br>
    <input type="submit" value="Log in" class="btn btn-success" >
    <br>
    <p>Anda belum punya akun ?<a href="register.php" > Daftar</a></p>
  </form>
</div>
<br><br><br><br><br>
<br><br><br>
<br>
</center>
	</div>
	<?php
     require_once("footer2.php");
	?>
	
</body>
</html>
<!-- 	
 -->
