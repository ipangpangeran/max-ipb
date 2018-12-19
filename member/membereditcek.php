<?php
include "../connect.php";
include "../login/ceklogin.php";

$filename=$_FILES['gambar']['name'];
$move=move_uploaded_file($_FILES['gambar']['tmp_name'],'foto/'.$filename);
if(empty($filename))   //jika gambar kosong atau tidak di ganti
{
	mysql_query("UPDATE anggota
				SET nama='$_POST[nama]',
					tanggal_lahir='$_POST[tanggal]',
					nim='$_POST[nim]',
					phone='$_POST[phone]',
					email='$_POST[email]',
					jabatan='$_POST[jabatan]',
					divisi='$_POST[divisi]',
					alamat_dikampus='$_POST[kost]',
					alamat_asal='$_POST[asal]'
				WHERE username_anggota='$_GET[id]'");
	header("location: index.php?pesan=1&hal=7&username=$_GET[id]");
}
elseif (!empty($filename))
{
	mysql_query("UPDATE anggota
				SET nama='$_POST[nama]',
					tanggal_lahir='$_POST[tanggal]',
					nim='$_POST[nim]',
					phone='$_POST[phone]',
					email='$_POST[email]',
					jabatan='$_POST[jabatan]',
					divisi='$_POST[divisi]',
					alamat_dikampus='$_POST[kost]',
					alamat_asal='$_POST[asal]',
					foto='$filename'
				WHERE username_anggota='$_GET[id]'");
	header("location: index.php?pesan=2&hal=7&username=$_GET[id]");
}
?>