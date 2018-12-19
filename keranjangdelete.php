<?php
include "connect.php";
	mysql_query("DELETE FROM ordertemp WHERE id = '$_GET[id]' AND kode_produk = '$_GET[prod]' AND tanggal = '$_GET[tgl]'");
	header("location: produk.php?pesan=6&p=cart&id=$_GET[prod]&tipe=$_GET[tipe]");
?>