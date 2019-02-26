<?php 
//login.php
session_start();

if(isset($_SESSION['message'])){
	if($_SESSION['message']!=""){
		echo "<span style ='color:red'>".$_SESSION['message']."</span>";
		$_SESSION['message'] = "";
	}
}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Login</title>
 	<link rel="stylesheet" type="text/css" href="css.css">
 </head>
 <body>
 	<div class="body">
 	<center><h2 class="header">Sign In</h2></center>
 	<form method="POST" action="ceklogin.php">
 		<center>
 			<table>
 			<tr>
 				<td></td>
 				<td><input type="text" name="username" required="required" placeholder="Username" id="un"></td>
 			</tr>
 			<tr>
 				<td></td>
 				<td><input type="password" name="password" required="required" placeholder="Password" id="pass"></td>
 			</tr>
 			<tr>
 				<td></td>
 				<td><button type="submit" name="login" id="submit"><strong>SIGN IN</strong></button></td>
 			</tr>
 		</table>
 		<p class="a">Don't have an account?</p>
 		<a href="register.php" class="su" style="text-decoration: none;"><strong>SIGN UP NOW</strong></a>
 		</center>

 	</form>
 	
 </div>
 </body>
 </html>
