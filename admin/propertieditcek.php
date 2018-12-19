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
					SET nama_properti='$_POST[namaproperti]',
						harga_sewa='$_POST[hargasewa]',
						kuantitas='$_POST[stok]',
						deskripsi='$_POST[deskripsi]',
						spesifikasi='$_POST[spesifikasi]',
						keterangan='$_POST[keterangan]',
						foto='$nama_file_unik' 
					WHERE kode_produk='$_GET[id]'");
					
		
		unlink("foto_produk/$_GET[pic]");   
		unlink("foto_produk/medium_$_GET[pic]");  
		unlink("foto_produk/small_$_GET[pic]");

		header("location: index.php?pesan=3&hal=6&id=$_GET[id]");
	}
	else
	{
			mysql_query("UPDATE property
							SET nama_properti='$_POST[namaproperti]',
								harga_sewa='$_POST[hargasewa]',
								kuantitas='$_POST[stok]',
								deskripsi='$_POST[deskripsi]',
								spesifikasi='$_POST[spesifikasi]',
								keterangan='$_POST[keterangan]'
							WHERE kode_produk='$_GET[id]'");

			header("location: index.php?pesan=4&hal=6&id=$_GET[id]");
	}

?>