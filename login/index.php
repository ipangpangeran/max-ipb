<?php 
session_start();
include "connect.php";
?>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<div id="header">
		<div id="content">
		<center>
			<form method="POST" action="login/login.php">
				<table>
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
					<tr><td>Username</td><td> : <input type="text" name="username"></td></tr>
					<tr><td>Password</td><td> : <input type="password" name="password"></td></tr>
					<tr><td colspan="2"><input type="submit" value="Login"></td></tr>
				</table>
			</form>
		</center>
	</div>
</div>
</body>
</html>