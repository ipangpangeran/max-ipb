<?php
include "../connect.php";
session_start();

$cekdata="SELECT username FROM customer WHERE username='$_POST[username]'";
$ada=mysql_query($cekdata);
if(mysql_num_rows($ada)>0)
{
	header('location: register.php?pesan=1');
}

else
{
	mysql_query("insert into customer(username,password,nama_customer,nim) values('$_POST[username]','$_POST[password]','$_POST[nama]','$_POST[nim]')");
	header('location: register.php?pesan=2');
}
?>