<script language="javascript">
	// perintah function apabila sebuah tanggal diklik
	function agenda(isi_agenda,tgl){
		//mengambil data dari tiap elemen id yang dibutuhkan
		document.getElementById('tgl').value = tgl;
		document.getElementById('daftar_agenda').innerHTML = isi_agenda;
		document.getElementById('agenda_yang_ada').value = isi_agenda;
		document.getElementById('tanggal_agenda').innerHTML = tgl;
		
		if(isi_agenda==''){
		// Apabila dalam tanggal tersebut belum ada data, tombol menjadi Buat Agenda
			document.getElementById('tombol_agenda').value = 'Sewa';
		} else {
		//Apabila dalam tanggal ada data, tombol berubah menjadi Tambah Agenda
			document.getElementById('tombol_agenda').value = 'Sewa';
		}
		
	}
</script>

<body onload="agenda('','')">
	<?php
		if (!empty($_GET['pesan'])){
			if ($_GET['pesan'] == 1) 
			{
				echo"<h3>Agenda sudah terisi</h3>";
			}
			else if ($_GET['pesan'] == 2) 
			{
				echo"<h3>Agenda ditambah</h3>";
			}
		}
	?>

		<form id="form1" name="form1" method="post" action="produk.php?p=set&id=<?php echo"$_GET[id]";?>">
			Bulan :
			<?php 
				$tgl_hari_ini=date('d');
				$bln_skr= date('m');
				$th_skr=date('Y');

				// apabila tombol dengan name button diklik
				if (!isset($_REQUEST['button'])){
					$bulan_dipilih = $bln_skr;
					$tahun_dipilih = $th_skr;
				} else {
					$bulan_dipilih = $_POST['bln'];
					$tahun_dipilih = $_POST['th'];
				}

				include "bulan.php";
				// perintah untuk memilihi bulan
				 echo "
				 <select name='bln' id='bln'>
					<option value='$bln_skr' checked>-</option>
					<option value='01' >Januari</option>
					<option value='02'>Februari</option>
					<option value='03'>Maret</option>
					<option value='04'>April</option>
					<option value='05'>Mei</option>
					<option value='06'>Juni</option>
					<option value='07'>Juli</option>
					<option value='08'>Agustus</option>
					<option value='09'>September</option>
					<option value='10'>Oktober</option>
					<option value='11'>November</option>
					<option value='12'>Desember</option>
				  </select>
				 ";
			?> 
			 
			  , Tahun : 
			<?php
				echo "<select name='th' id='th'>
					<option value='$th_skr' selected='selected'>-</option>";

				// for tombol apabila tombol diklik
				if (!($_POST['button'])) {
					$th_pil = $th_skr;
				} else {
					$th_pil = $_POST['th'];
				}

				$bts_th_awal = ($th_pil - 0);
				$bts_th_akhir = ($th_pil + 5) ;
				$y = 0;
				while($bts_th_awal<$bts_th_akhir){
					echo "<option value='$bts_th_awal'>$bts_th_awal</option>";
					$bts_th_awal++;
				}
				echo" </select>";
			?>
		  
			<input type="submit" name="button" id="button" value="Tampilkan Tanggal" />
		</form>
		
		<?php 
		echo "<h3>$nama_bulan, $tahun_dipilih </h3>";
		?>
		<div id="utama">
		<div id="kalender">
		<table width="371" border="0" cellpadding="5" cellspacing="1" bgcolor="#FF9900">
			<tr>
				<th>Senin</th>
				<th>Selasa</th>
				<th>Rabu</th>
				<th>Kamis</th>
				<th class='jumat'>Jumat</th>
				<th>Sabtu</th>
				<th class="minggu">Minggu</th>
			</tr>
			<?php
				$bulan_skr = $bulan_dipilih + 1;
				$cek_tgl_akhir_bulan_skr = mktime (0,0,0,$bulan_skr,0,$tahun_dipilih);
				$selisih_bln = $bulan_skr-1;
				$cek_tgl_akhir_bulan_lalu = mktime (0,0,0,$selisih_bln,0,$tahun_dipilih);

				// tampilkan tanggal dan nama hari terakhir
				$tgl_akhir_bln_lalu = date("d",$cek_tgl_akhir_bulan_lalu);
				$hari_akhir_bln_lalu = date("w",$cek_tgl_akhir_bulan_lalu);
				$tgl_akhir_bln_skr = date("d",$cek_tgl_akhir_bulan_skr);

				// cek apabila hari terakhir bulan kemarin hari minggu
				if($hari_akhir_bln_lalu == 0 ){

					$tgl_mulai = $tgl_akhir_bln_lalu - 6;
				} 
				else { 
					$tgl_mulai =$tgl_akhir_bln_lalu - $hari_akhir_bln_lalu  + 1;
				}


				$x=0;
				$tgl_akhir = $tgl_mulai;
				$c = 0;
				$j = 0;
				$tgl_awal=0;
				// perintah buat kotak kalender 
				while($x<42){

				// printah membuat row
				  if ($x%7==0){ 
					 if ($x!==0){ echo"</tr>";
					 }
					 echo "<tr>";
				  }
				 
				// perintah membuat warna untuk minggu
				$c++;
				$j++;
				if ($j%5==0) {$class = "class='jumat'";} else {$class='class=biasa';}
				if ($c%7==0 && $c!==0) {$class = "class='minggu'";$j=5;} 

				 // menampilkan tanggal bulan sebelumnya
					if ($tgl_akhir<=$tgl_akhir_bln_lalu ){ echo "<td $class id='tgl_akhir'>$tgl_akhir</td>\n"; $tgl_skr=0; }
					else if ($tgl_skr<=$tgl_akhir_bln_skr) {
					
					//----------------------------------
					$tgl_kal = "$tgl_skr-$bulan_dipilih-$tahun_dipilih";
					$sql_tampil = "select * from ordertemp where tanggal = '$tgl_kal'"; 
					$result= mysql_query ($sql_tampil);
					$tgl_agenda = mysql_fetch_array($result); 
					$data_agenda = nl2br($tgl_agenda['agenda']);
					if ($tgl_kal==$tgl_agenda['tgl_agenda']){$id = "id='tgl_agenda'"; $klik = "onclick=\"agenda('$data_agenda','$tgl_agenda[tgl_agenda]')\"";} 
					else {$id =''; $klik = "onclick=\"agenda('','$tgl_kal')\"";}
					// perintah memberi warna untuk tanggal sekarang
					if ($tgl_skr==$tgl_hari_ini && $bulan_dipilih==$bln_skr && $th_skr==$tahun_dipilih ){$id = "id='tgl_skr'"; $title = "title='Dinten Ayena (Hari ini)'";} 	
					 else {$title='';}
						// menampilkan bulan sekarang / yang dipilih
						echo "<td $class $id $title $klik>$tgl_skr</td>\n";$tgl_awal=0;
					
					}
					//menampilkan bulan berkutnya
					else {echo "<td $class id='tgl_awal'>$tgl_awal</td>\n";}
					
					$tgl_awal++;
					$tgl_skr++;
					$tgl_akhir++;
					$x++;
				}
			 ?>
			</tr>
		</table>
		<i>*Klik salah satu tanggal untuk mengisi tanggal penyewaan. Warna Hijau pada tanggal menandakan tanggal hari ini, Warna Kuning menandakan ada penyewaan pada tanggal tersebut</i>
		
		<div id="clear"></div>
		</div>

		<div id="agenda">
		Tanggal Sewa <span id="tanggal_agenda"></span> : <br />
		<form id="form2" name="form2" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
			<input name="bln" type="hidden" value="<?php echo  $bulan_dipilih;?>" />
			<input name="th" type="hidden" value="<?php echo  $tahun_dipilih;?>" />
			<input name="agenda_yang_ada" id="agenda_yang_ada" type="hidden">
			<input name="tgl" id="tgl" size="10" type="hidden" />
				<input name="isi_agenda" type="text" id="isi_agenda" value="" size="45" maxlength="150" />
				<br />
			<input name="button" type="submit" id="tombol_agenda" />
		</form>
		<br />

		<div id="daftar_agenda"></div>
		<div id="clear"></div>
		</div>
		</div>

	</body>