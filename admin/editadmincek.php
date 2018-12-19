<?php
include "../connect.php";
include "../login/ceklogin.php";

mysql_query("UPDATE admin
			SET nim='$_POST[nim]'
			WHERE username='$_GET[id]'");
header("location: index.php?pesan=1&hal=7&username=$_SESSION[username]");
?>