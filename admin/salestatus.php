<?php
include "../connect.php";
include "../login/ceklogin.php";

if (!empty($_GET['n'])){
	if ($_GET['n'] == "terima") 
	{
		mysql_query("UPDATE transaksi SET status='accept' WHERE id_transaksi='$_GET[id]'");
		header("location: index.php?hal=sale&pesan=terima&id=$_GET[id]");
	}
	else if ($_GET['n'] == "tolak") 
	{
		mysql_query("UPDATE transaksi SET status='denied' WHERE id_transaksi='$_GET[id]'");
		header("location: index.php?hal=sale&pesan=batal&id=$_GET[id]");
	}
	else if ($_GET['n'] == "hapus") 
	{
		mysql_query("DELETE FROM transaksi WHERE id_transaksi='$_GET[id]'");
		header("location: index.php?hal=sale&pesan=hapus");
	}
}
?>