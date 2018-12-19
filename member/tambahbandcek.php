<?php
include "../connect.php";
include "../login/ceklogin.php";
include"fungsi_thumb.php";

$cekdata="SELECT nama_band FROM band WHERE nama_band='$_POST[namaband]'";
$ada=mysql_query($cekdata);
if(mysql_num_rows($ada)>0)
{
	header('location: index.php?pesan=1?&hal=4');
}

else
{
	$cekdata2="SELECT kode_produk FROM band WHERE kode_produk='$_POST[kodeband]'";
	$ada2=mysql_query($cekdata2);
	if(mysql_num_rows($ada2)>0)
	{
		header('location: index.php?pesan=4?&hal=4');
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

					mysql_query("INSERT INTO band(kode_produk,
													nama_band,
													genre,
													deskripsi,
													foto) 
											VALUES ('$_POST[kodeband]',
													'$_POST[namaband]',
													'$_POST[genre]',
													'$_POST[deskripsi]',
													'$nama_file_unik')");

					header('location: index.php?pesan=3&hal=4');
			}
			else
			{
				echo "gagal";
			}
	}
}
?>