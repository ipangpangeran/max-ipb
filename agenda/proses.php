<?php
if(isset($_POST['button'])){
	$cek = mysql_query("SELECT * from data_agenda WHERE tgl_agenda = '$_POST[tgl]'");
	if(mysql_num_rows($cek)>0){
		header("location: index.php?pesan=1");
	}
	else{
		if($_POST['button']=='Buat Agenda' && empty($_POST['isi_agenda']) && !empty($_POST['tgl'])){
			$sql_input = "INSERT INTO `data_agenda` 
							(`tgl_agenda`, `agenda`) 
							VALUES 
							('$_POST[tgl]', '<li>$_POST[isi_agenda]</li>')";
			mysql_query($sql_input);
			header("location: index.php?pesan=2");
		}

		if($_POST['button']=='Tambah Agenda' && !empty($_POST['isi_agenda'])){
			$agenda_update = $_POST[agenda_yang_ada]."<li>$_POST[isi_agenda]</li>";
			$sql_update = "UPDATE  `data_agenda` SET  `agenda` =  '$agenda_update' WHERE  `tgl_agenda` =  '$_POST[tgl]';";
			mysql_query($sql_update);
		}
	}
}
?>