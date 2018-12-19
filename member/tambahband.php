<?php
	if (!empty($_GET['pesan'])){
		if ($_GET['pesan'] == 3) 
		{
			echo '<h3>Band telah ditambah</h3>';
		}
		else if ($_GET['pesan'] == 4) 
		{
			echo '<h3>Kode Band sudah ada</h3>';
		}
		else if ($_GET['pesan'] == 1) 
		{
			echo '<h3>Nama Band sudah ada</h3>';
		}
	}
?>			

<div class="calenders">
	<div class="calender-left">
		<h3>Tambah Band</h3>
		<form action="tambahbandcek.php" method="POST" enctype="multipart/form-data">
			<input type="text" name="kodeband" placeholder="Kode Band ex: BLP001">
			<input type="text" name="namaband" placeholder="Nama Band">
			<input type="text" name="genre" placeholder="Genre">
			<textarea name="deskripsi" placeholder="Deskripsi"></textarea>
			<input type="file" name="gambarproduk" required/>
			
			<input type="submit" value="TAMBAH"/>
		</form>		
	</div>
</div>
