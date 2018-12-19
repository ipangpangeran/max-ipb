<?php
include "connect.php";
session_start();
if (!isset($_SESSION['customer']) || empty($_SESSION['passcust'])) {
    //redirect ke halaman login
    header('location:panelcustomer/index.php?error=5');
}
else{	
	function isi_keranjang(){
		$isikeranjang = array();
		$sql = mysql_query("SELECT * FROM ordertemp WHERE id='$_GET[id]'");
		
		while ($r=mysql_fetch_array($sql)) {
			$isikeranjang[] = $r;
		}
		return $isikeranjang;
	}
	
	$isikeranjang = isi_keranjang();
	$jml          = count($isikeranjang);

	// simpan data detail pemesanan  
	for ($i = 0; $i < $jml; $i++){
		mysql_query("INSERT INTO transaksi(username, kode_produk, tanggal,status) 
			   VALUES('$_SESSION[customer]','{$isikeranjang[$i]['kode_produk']}', '{$isikeranjang[$i]['tanggal']}', 'proses')");
	}

	// setelah data pemesanan tersimpan, hapus data pemesanan di tabel pemesanan sementara (orders_temp)
	for ($i = 0; $i < $jml; $i++) {
	  mysql_query("DELETE FROM ordertemp
					 WHERE id = '{$isikeranjang[$i]['id']}'");
	}

	header("location:produk.php?p=success");
}
?>