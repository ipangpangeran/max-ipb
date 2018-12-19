<?php
$cek = mysql_query("SELECT * from data_agenda WHERE tgl_agenda = '$_POST[tgl]'");
if(mysql_num_rows($cek)>0){
	header("location: index.php?pesan=1");
}
?>