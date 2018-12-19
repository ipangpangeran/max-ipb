<?php
include "../connect.php";
include "../login/ceklogin.php";
include"../fungsi_thumb.php";
	
	$data=mysql_fetch_array(mysql_query("SELECT foto FROM property WHERE kode_produk='$_GET[id]'"));
	if($data['foto'] != '')
	{
		mysql_query("DELETE FROM property WHERE kode_produk='$_GET[id]'");
     	unlink("foto_produk/$_GET[namafile]");   
     	unlink("foto_produk/medium_$_GET[namafile]");  
		unlink("foto_produk/small_$_GET[namafile]");
	}
	else
	{
		mysql_query("DELETE FROM property WHERE kode_produk = '$_GET[id]'");
	}
	header('location: index.php?pesan=5&hal=2');

	mysql_query("DELETE FROM property WHERE kode_produk = '$_GET[id]'");
	header('location: index.php?pesan=5&hal=2');
?>