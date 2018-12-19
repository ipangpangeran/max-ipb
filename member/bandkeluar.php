<?php
include "../connect.php";
include "../login/ceklogin.php";
	$produk = $_GET['id'];
	mysql_query("DELETE FROM gabung WHERE kode_produk = '$_GET[id]' and username_anggota='$_GET[username]'");
	header("location: index.php?hal=3&id=$produk");
?>