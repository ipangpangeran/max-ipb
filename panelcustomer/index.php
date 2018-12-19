<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Customer Login</title>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<!--Google Fonts-->
<link href='http://fonts.googleapis.com/css?family=Roboto:500,900italic,900,400italic,100,700italic,300,700,500italic,100italic,300italic,400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<!--Google Fonts-->
</head>
<body>
<div class="login">
	<h2>Customer Form</h2>
	<div class="login-top">
		<h1>LOGIN FORM</h1>
		
		<?php
			//kode php ini kita gunakan untuk menampilkan pesan eror
			if (!empty($_GET['error'])) {
				if ($_GET['error'] == 1) {
					echo '<h3>Username dan Password belum diisi!</h3>';
				} else if ($_GET['error'] == 2) {
					echo '<h3>Username belum diisi!</h3>';
				} else if ($_GET['error'] == 3) {
					echo '<h3>Password belum diisi!</h3>';
				} else if ($_GET['error'] == 4) {
					echo '<h3>Username dan Password tidak terdaftar!</h3>';
				} else if ($_GET['error'] == 5) {
							echo '<h3>Anda harus login!</h3>';
				}
			}
		?>
		
		<form action="login.php" method="POST">
			<input type="text" name="username" placeholder="Username">
			<input type="password" name="password" placeholder="password">
	   
	    <div class="forgot">
	    	
	    	<input type="submit" value="Login" >
			 </form>
	    </div>
	</div>
	<div class="login-bottom">
		<h3>New Customer? &nbsp;<a href="register.php">Register</a>&nbsp Here</h3>
		<h3>Back to &nbsp;<a href="../index.php">Home</a>&nbsp Here</h3>
	</div>
</div>	
<div class="copyright">
	
</div>
</body>
</html>