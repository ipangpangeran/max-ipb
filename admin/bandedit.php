<?php
	if (!empty($_GET['pesan'])){
		if ($_GET['pesan'] == 1) 
		{
			echo "
			<div class='alert-box success'>
				<h4>Band telah diedit</h4>
			</div>";
		}
		else if ($_GET['pesan'] == 2) 
		{
			echo "
			<div class='alert-box success'>
				<h4>Band telah diedit tanpa merubah gambar</h4>
			</div>";
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

				echo"<form enctype='multipart/form-data' method='post' action='bandeditcek.php?id=$t[kode_produk]&pic=$t[foto]'>		
		<tbody> 
			<tr> 
				<th>Kode Produk</th> 
				<th>$t[kode_produk]</th>
			</tr>
			<tr> 
				<th>Nama Produk</th> 
				<th><input type='text' name='namaband' value='$t[nama_properti]'></th>
			</tr>
			<tr> 
				<th>Genre</th> 
				<th><input type='text' name='genre' value='$t[genre]'></th>
			</tr> 
			<tr> 
				<th>Harga</th> 
				<th><input type='text' name='harga' value='$t[harga_sewa]'></th>
			</tr> 
			<tr> 
				<th>Deskripsi</th> 
				<th><textarea rows='12' name='deskripsi' >$t[deskripsi]</textarea></th>
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
				<th><input type='submit' value='Edit Band'></th>
			</tr>
		</tbody>	
		</form>";?>
	</table>
</div>		
