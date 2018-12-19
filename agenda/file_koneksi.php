<?php $host 			="localhost";
	  $user 				="root";
	  $password 		="";
	  $nama_database	="data_agenda";
	  
	  $conn = mysql_connect($host,$user,$password) or die ("Data base gagal koneksi, mohon di cek kembali pengaturan koneksi ke data base.");
	  mysql_select_db($nama_database,$conn) or die  ("Maaf database tidak ada atau kosong, mohon dicek kembali nama data base-nya pada pengaturan koneksi.");
?>
