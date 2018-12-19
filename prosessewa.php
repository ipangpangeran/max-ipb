<?php
include"connect.php";

$produk=$_GET['id'];
$sid=$_GET['sid'];
$tanggal=$_POST['tanggal'];

$cek = mysql_query("SELECT * from transaksi WHERE tanggal = '$_POST[tanggal]' AND kode_produk='$_GET[id]'");
if(mysql_num_rows($cek)>0){
	header("location: detail.php?pesan=1&id=$_GET[id]&p=$_GET[tipe]");
}

else{
	$cektemp = mysql_query("SELECT * from ordertemp WHERE tanggal = '$tanggal' AND kode_produk='$produk' AND id='$sid'");
	
	if(mysql_num_rows($cektemp)>0){
		header("location: detail.php?pesan=2&id=$_GET[id]&p=$_GET[tipe]");
	}
	else{
		mysql_query("insert into ordertemp(id,tanggal,kode_produk) values('$sid','$tanggal','$produk')");
					
		header("location: produk.php?p=cart&pesan=3&id=$_GET[id]&tipe=$_GET[tipe]");
	}
}
	


?>