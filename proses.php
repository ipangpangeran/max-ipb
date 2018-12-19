<?php
if(isset($_POST['button'])){
	$cek = mysql_query("SELECT * from transaki WHERE tanggal = '$_POST[tgl]' & kode_produk='$_GET[id]");
	if(mysql_num_rows($cek)>0){
		header("location: index.php?pesan=1");
	}
	else{
		if($_POST['button']=='Buat Agenda' && empty($_POST['isi_agenda']) && !empty($_POST['tgl'])){
			$cektemp = mysql_query("SELECT * from ordertemp WHERE tanggal = '$_POST[tgl]' AND kode_produk='$_GET[id] AND id=$_GET[sid]");
			if(mysql_num_rows($cektemp)>0){
				header("location: index.php?pesan=1");
			}
			else{
				$sql_input = "INSERT INTO `data_agenda` 
								(`tgl_agenda`, `agenda`) 
								VALUES 
								('$_POST[tgl]', '<li>$_POST[isi_agenda]</li>')";
				mysql_query($sql_input);
				header("location: index.php?pesan=2");
			}
		}
	}
}
?>