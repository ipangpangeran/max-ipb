<?php
include "../connect.php";
include "../login/ceklogin.php";

$cekdata="SELECT * FROM gabung WHERE kode_produk='$_GET[id]'";
$ada=mysql_query($cekdata);
if(mysql_num_rows($ada)>6)
{
	header("location: index.php?pesan=1?&hal=9&id=$_GET[id]");
}

else
{
	$cekdata2="SELECT username_anggota FROM gabung WHERE kode_produk='$_GET[id]' and username_anggota='$_POST[username]'";
	$ada2=mysql_query($cekdata2);
	if(mysql_num_rows($ada2)>0)
	{
		header("location: index.php?pesan=3?&hal=9&id=$_GET[id]");
	}
	else
	{
		mysql_query("INSERT INTO gabung(kode_produk,
														username_anggota) 
												VALUES ('$_GET[id]',
														'$_POST[username]')");
		header("location: index.php?pesan=2&hal=9&id=$_GET[id]");
	}
}
?>