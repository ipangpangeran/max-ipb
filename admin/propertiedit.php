<?php
	if (!empty($_GET['pesan'])){
		if ($_GET['pesan'] == 1) 
		{
			echo "<h4>Band telah diedit</h4>";
		}
		else if ($_GET['pesan'] == 2) 
		{
			echo "<h4>Band telah diedit tanpa merubah gambar</h4>";
		}
		else if ($_GET['pesan'] == 3) 
		{
			echo "
			<div class='alert-box success'>
				<h4>Properti telah diedit</h4>
			</div>";
		}
		else if ($_GET['pesan'] == 4) 
		{
			echo "
			<div class='alert-box success'>
				<h4>Properti telah diedit tanpa merubah gambar</h4>
			</div>";
		}
	}
?>	

<div class="datagrid">			
	<table>
		<?php
				$edit = mysql_query("SELECT * FROM property Where kode_produk ='$_GET[id]'");
				$t = mysql_fetch_array($edit);

				echo"<form enctype='multipart/form-data' method='post' action='propertieditcek.php?id=$t[kode_produk]&pic=$t[foto]'>		
		<tbody> 
			<tr> 
				<th>Kode Produk</th> 
				<th>$t[kode_produk]</th>
			</tr>
			<tr> 
				<th>Nama Properti</th> 
				<th><input type='text' name='namaproperti' value='$t[nama_properti]'></th>
			</tr>
			<tr> 
				<th>Stok</th> 
				<th><input type='text' name='stok' value='$t[kuantitas]'></th>
			</tr> 
			<tr> 
				<th>Harga Sewa</th> 
				<th><input type='text' name='hargasewa' value='$t[harga_sewa]'></th>
			</tr> 
			<tr> 
				<th>Deskripsi</th> 
				<th><textarea rows='12' name='deskripsi' >$t[deskripsi]</textarea></th>
			</tr>
			<tr> 
				<th>Keterangan</th> 
				<th><textarea rows='12' name='keterangan' >$t[keterangan]</textarea></th>
			</tr>
			<tr> 
				<th>Spesifikasi</th> 
				<th><textarea rows='12' name='spesifikasi' >$t[spesifikasi]</textarea></th>
			</tr>
			<tr>
				<th></th>
				<th><img src='foto_produk/$t[foto]' width=200 height=200></th>
			</tr>
			<tr> 
				<th>Gambar</th> 
				<th><input type='file' name='fupload'></th>
			</tr>  
			<tr>
				<th><input type='submit' value='Edit Properti'></th>
			</tr>
		</tbody>	
		</form>";?>
	</table>
</div>		
