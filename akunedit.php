<?php
include "connect.php";
include "../login/ceklogin.php";

mysql_query("UPDATE customer SET nama_customer='$_POST[nama]', nim='$_POST[nim]', organisasi='$_POST[organisasi]', alamat='$_POST[alamat]', phone='$_POST[phone]' WHERE username='$_GET[username]'");
header("location: produk.php?p=akun&i=akunku&pesan=edit");

?>