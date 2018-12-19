<?php
include "../connect.php";
include "../login/ceklogin.php";

mysql_query("UPDATE modul
			SET sewa='$_POST[sewa]'");
header("location: index.php?pesan=1&hal=10");
?>