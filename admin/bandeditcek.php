<?php
include "../connect.php";
include "../login/ceklogin.php";
include"thumb.php";

	$lokasi_file	= $_FILES['fupload']['tmp_name'];
	$tipe_file		= $_FILES['fupload']['type'];
	$nama_file		= $_FILES['fupload']['name'];
	$acak			= rand(1,99);
	$nama_file_unik	= $acak.$nama_file;

	if(!empty($lokasi_file))
	{
		UploadImage($nama_file_unik);

		mysql_query("UPDATE property
						SET nama_properti='$_POST[namaband]',
							harga_sewa='$_POST[harga]',
							deskripsi='$_POST[deskripsi]',
							genre='$_POST[genre]',
							foto='$nama_file_unik' 
			WHERE kode_produk = '$_GET[id]'");
			
		unlink("foto_produk/$_GET[pic]");   
		unlink("foto_produk/medium_$_GET[pic]");  
		unlink("foto_produk/small_$_GET[pic]");

		header("location: index.php?pesan=1&hal=5&id=$_GET[id]");
	}
	else
	{
			mysql_query("UPDATE property
							SET nama_properti='$_POST[namaband]',
								harga_sewa='$_POST[harga]',
								deskripsi='$_POST[deskripsi]',
								genre='$_POST[genre]'
							WHERE kode_produk='$_GET[id]'");

			header("location: index.php?pesan=2&hal=5&id=$_GET[id]");
	}

?>