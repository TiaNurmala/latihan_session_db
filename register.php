<?php 

//register php

session_start();

if(isset($_SESSION['message'])){
	if($_SESSION['message']!=""){
		echo"<span
		style='color:red'>".$_SESSION['message']."</span>";
		$_SESSION['message']="";
	}
}


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>register</title>
 	<link rel="stylesheet" type="text/css" href="css.css">
 </head>
 <body>
 	<div class="body">
 <center><h2 class="header">REGISTER HERE</h2></center>
 <form method="POST" action="cekregister.php">
 	<center>
 		<table class="table">
 		<tr>
 			<td><!-- username --></td>
 			<td><input type="text" name="username" required placeholder="Username" id="un"></td>
 		</tr>
 		<tr>
 			<td><!-- password --></td>
 			<td><input type="password" name="password" required placeholder="Password" id="pass"></td>
 		</tr>
 		<tr>
 			<td></td>
 			<td><button type="submit" name="register" id="submit"><strong>Register</strong></button></td>
 		</tr>
 	</table>
 		<p class="a">Have an account?</p>
 		<a href="login.php" class="su" style="text-decoration: none;"><strong>SIGN IN HERE</strong></a>
 		</center>

 	</center>
 </form>
 </div>
 </body>
 </html>
