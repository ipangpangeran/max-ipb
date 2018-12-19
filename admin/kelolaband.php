<?php
			if (!empty($_GET['pesan'])){
				if ($_GET['pesan'] == 1) 
				{
					echo"
					<div class='alert-box alert'>
						<h4>Band sudah penuh</h4>
					</div>";
				}
				else if ($_GET['pesan'] == 2) 
				{
					echo"
					<div class='alert-box success'>
						<h4>Berhasil menambah anggota band</h4>
					</div>";
				}
				else if ($_GET['pesan'] == 3) 
				{
					echo "
					<div class='alert-box alert'>
						<h4>Anggota sudah Join</h4>
					</div>";
				}
				else if ($_GET['pesan'] == 4) 
				{
					echo"
					<div class='alert-box success'>
						<h4>Anggota band berhasil dihapus</h4>
					</div>";
				}
			}
			?>

<div class="datagrid">			
	<table> 
		<thead> 
			<tr> 
				<th>No</th>
				<th>Nama</th>
				<th>Aksi</th>
			</tr> 
		</thead> 
		<tbody>
			<?php
			$tp = mysql_query("SELECT * FROM gabung WHERE kode_produk='$_GET[id]'");
			$nu = 1;
			while ($t=mysql_fetch_array($tp))
			{ 
				echo"<tr class='alt'> 
					<td>$nu</td>";
				$cek = mysql_query("SELECT * FROM anggota WHERE username_anggota='$t[username_anggota]'");
				$r=mysql_fetch_array($cek);
				echo"
					<td>$r[nama]</td>
					<td><a href='kelolabandkeluar.php?username=$r[username_anggota]&id=$_GET[id]'>Hapus</a></td>
					</tr>";
				$nu++;
			}
			?>
		</tbody> 
	</table>
	
</div>

<div class="calenders">
	<div class="calender-left">
		<h3>Tambah Anggota</h3>
		<?php
		echo
		"
		<form action='kelolaanggota.php?id=$_GET[id]' method='POST'>
			<select name='username'>
			<option value=''>Pilih Anggota</option>";
			
				$nama=mysql_query("SELECT * FROM anggota");
				while($n=mysql_fetch_array($nama))
					echo"
					<option value='$n[username_anggota]'>$n[nama]</option>";
				
			?>
			</select>
			<input type="submit" value="TAMBAH"/>
		</form>
	</div>
</div>