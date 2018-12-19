<?php
include "../connect.php";
include "../login/ceklogin.php";
include"../fungsi_thumb.php";

$cekdata="SELECT kode_produk FROM property WHERE kode_produk='$_POST[kodeproduk]'";
$ada=mysql_query($cekdata);
if(mysql_num_rows($ada)>0)
{
	header('location: index.php?pesan=1&hal=4');
}

else
{
	$lokasi_file 	= $_FILES['gambarproduk']['tmp_name'];
	$tipe_file		= $_FILES['gambarproduk']['type'];
	$nama_file		= $_FILES['gambarproduk']['name'];
	$direktori		= "image/$nama_file";	
	  $acak           = rand(1,99);
	  $nama_file_unik = $acak.$nama_file; 

		if(!empty($lokasi_file))
		{
			UploadImage($nama_file_unik);

				mysql_query("INSERT INTO property(kode_produk,
												nama_properti,
												harga_sewa,
												kuantitas,
												deskripsi,
												spesifikasi,
												keterangan,
												foto) 
										VALUES ('P$_POST[kodeproduk]',
												'$_POST[namaproperti]',
												'$_POST[harga]',
												'$_POST[stok]',
												'$_POST[deskripsi]',
												'$_POST[spesifikasi]',
												'$_POST[keterangan]',
												'$nama_file_unik')");

				header('location: index.php?pesan=4&hal=4');
		}
		else
		{
			echo "gagal";
		}
}
?>