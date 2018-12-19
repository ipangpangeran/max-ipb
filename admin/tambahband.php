<?php
	if (!empty($_GET['pesan'])){
		if ($_GET['pesan'] == 3) 
		{
			echo "
			<div class='alert-box success'>	
				<h4>Band telah ditambah</h4>
			</div>";
		}
		else if ($_GET['pesan'] == 4) 
		{
			echo "
			<div class='alert-box success'>
				<h4>Properti telah ditambah</h4>
			</div>";
		}
		else if ($_GET['pesan'] == 1) 
		{
			echo "
			<div class='alert-box alert'>
				<h4>Kode Produk telah terdaftar</h4>
			</div>";
		}
	}
?>			

<div class="calenders">
	<div class="calender-left">
		<h3>Tambah Band</h3>
		<form action="tambahbandcek.php" method="POST" enctype="multipart/form-data">
			<input type="text" name="kodeproduk" placeholder="Kode Produk">
			<input type="text" name="namaband" placeholder="Nama Band">
			<input type="text" name="genre" placeholder="Genre">
			<input type="text" name="harga" placeholder="Harga">
			<textarea name="deskripsi" placeholder="Deskripsi"></textarea>
			<input type="file" name="gambarproduk" required/>
			
			<input type="submit" value="TAMBAH"/>
		</form>		
	</div>
</div>

<div class="calenders">
	<div class="calender-left"">
		<h3>Tambah Properti</h3>
		<form action="tambahproperticek.php" method="POST" enctype="multipart/form-data">
			<input type="text" name="kodeproduk" placeholder="Kode Produk">
			<input type="text" name="namaproperti" placeholder="Nama Properti">
			<input type="text" name="harga" placeholder="Harga">
			<input type="text" name="stok" placeholder="Stok">
			<textarea name="deskripsi" placeholder="Deskripsi"></textarea>
			<textarea name="spesifikasi" placeholder="spesifikasi"></textarea>
			<textarea name="keterangan" placeholder="keterangan"></textarea>
			<input type="file" name="gambarproduk" required />
			
			<input type="submit" value="TAMBAH"/>
		</form>
	</div>
</div>
