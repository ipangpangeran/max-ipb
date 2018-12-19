<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Customer Register</title>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/ffastyle.css" rel="stylesheet">

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
		<h1>REGISTER FORM</h1>
		
		<?php
			//kode php ini kita gunakan untuk menampilkan pesan eror
			if (!empty($_GET['pesan'])) {
				if ($_GET['pesan'] == 1) {
				?>
					<script languange="javascript">alert("Username sudah terdaftar sebelumnya, silahkan gunakan username yang lain.");</script>
				<?php
				} else if ($_GET['pesan'] == 2) {
				?>
					<script languange="javascript">alert("Registrasi berhasil");</script>
					<script> document.location.href='../index.php';</script>
				<?php
				} 
			}
		?>

		<form action="registercek.php" method="POST">
			<input type="text" name="username" placeholder="Username" required />
			<input type="password" name="password" placeholder="Password" required />
			<input type="text" name="nama" placeholder="Full Name" required />
			<input type="text" name="nim" placeholder="NIM" required />
			
			<div class="forgot">
	    	<input type="submit" value="Register" >
		</form>
	</div>
	</div>
	<div class="login-bottom">
		<h3>Have an account? <a href="index.php">Login</a> Here</h3>
		<h3>Back to <a href="../index.php">Home</a> Here</h3>
	</div>
</div>	
<div class="copyright">
	
</div>

	
</body>
</html>