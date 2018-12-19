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
			echo "<h4>Band telah diedit tanpa merubah gambar</h4>";
		}
		else if ($_GET['pesan'] == 3) 
		{
			echo '<h3>Properti telah diedit</h3>';
		}
		else if ($_GET['pesan'] == 4) 
		{
			echo '<h3>Properti telah diedit tanpa merubah gambar</h3>';
		}
		else if ($_GET['pesan'] == 5) 
		{
			echo "
			<div class='alert-box success'>
				<h4>Produk telah dihapus</h4>
			</div>";
		}
		else if ($_GET['pesan'] == 6) 
		{
			echo "
			<div class='alert-box success'>	
				<h4>Band telah dihapus</h4>
			</div>";
		}
	}
?>	


<script>
FUNCTION confirmDelete(){
VAR agree=CONFIRM("Are you sure you want to delete this file?");
IF (agree)
     RETURN TRUE ;
ELSE
     RETURN FALSE ;
}
</script>

<div class="datagrid">			
	<table> 
		<thead> 
			<tr> 
				<th>No</th> 
				<th>Kode Produk</th>
				<th>Nama Band</th>
				<th>Genre</th>
				<th>Deskripsi</th> 
				<th>Harga</th> 
				<th>Action</th> 
			</tr> 
		</thead> 
		<tbody>
			<?php
			$tp = mysql_query("SELECT * FROM property WHERE kode_produk LIKE 'B%' ORDER BY kode_produk ASC");
			$nu = 1;
			while ($t=mysql_fetch_array($tp))
			{ 
				echo"<tr class='alt'> 
					<td>$nu</td> 
					<td>$t[kode_produk]</td>
					<td>$t[nama_properti]</td>
					<td>$t[genre]</td>
					<td>$t[deskripsi]</td>
					<td>$t[harga_sewa]</td>
					<td><a href='?id=$t[kode_produk]&hal=5'>Edit</a>";?><a href=<?php
					echo"'propertidelete.php?id=$t[kode_produk]&namafile=$t[foto]'";?> onclick="return confirm('Anda yakin data akan dihapus?')"'>Delete</a><?php
					echo"</td> 
				</tr>";
				$nu++;
			}
			?>
		</tbody> 
	</table>
</div>
	<br><br>
<div class="datagrid">		
	<table> 
		<thead> 
			<tr> 
				<th>No</th> 
				<th>Kode Produk</th>
				<th>Nama Properti</th>
				<th>Spesifikasi</th>
				<th>Deskripsi</th> 
				<th>Harga Sewa</th> 
				<th>Stok</th> 
				<th>Keterangan</th> 	
				<th>Action</th> 
			</tr> 
		</thead> 
		<tbody>
			<?php
			$tp = mysql_query("SELECT * FROM property WHERE kode_produk LIKE 'P%' ORDER BY kode_produk ASC");
			$nu = 1;
			while ($t=mysql_fetch_array($tp))
			{ 
				echo"<tr class='alt'> 
					<td>$nu</td> 
					<td>$t[kode_produk]</td>
					<td>$t[nama_properti]</td>
					<td>$t[spesifikasi]</td>
					<td>$t[deskripsi]</td>
					<td>$t[harga_sewa]</td>
					<td>$t[kuantitas]</td>
					<td>$t[keterangan]</td>
					<td><a href='?id=$t[kode_produk]&hal=6'>Edit</a>";?>
					<a href=<?php echo"'propertidelete.php?id=$t[kode_produk]&namafile=$t[foto]'";?> onclick="return confirm('Anda yakin data akan dihapus?')">Delete</a><?php echo"</td> 
				</tr>";
				$nu++;
			}
			?>
		</tbody> 
	</table>
</div>