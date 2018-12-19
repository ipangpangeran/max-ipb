<?php
include "../connect.php";
session_start();

$cekdata="SELECT username_anggota FROM anggota WHERE username_anggota='$_POST[username]'";
$ada=mysql_query($cekdata);
if(mysql_num_rows($ada)>0)
{
	header('location: register.php?pesan=1');
}

else
{
	mysql_query("insert into anggota(username_anggota,password,nama,nim) values('$_POST[username]','$_POST[password]','$_POST[nama]','$_POST[nim]')");
	header('location: register.php?pesan=2');
}
?>