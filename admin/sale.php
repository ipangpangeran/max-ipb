<?php
if (!empty($_GET['pesan'])){
	
	$tp = mysql_query("SELECT * FROM transaksi WHERE id_transaksi='$_GET[id]'");
	$t=mysql_fetch_array($tp);
	$customer1=mysql_query("SELECT * FROM customer WHERE username='$t[username]'");
	$cu=mysql_fetch_array($customer1);
	$produk=mysql_query("SELECT * FROM property WHERE kode_produk='$t[kode_produk]'");
	$p=mysql_fetch_array($produk);
	
	if ($_GET['pesan'] == "terima") {
		echo"
		<div class='alert-box success'>
			<h4>Penyewaan $p[nama_properti] oleh $cu[nama_customer] diterima</h4>
		</div>";
	}
	else if ($_GET['pesan'] == "batal") {
		echo"
		<div class='alert-box alert'>
			<h4>Penyewaan $p[nama_properti] oleh $cu[nama_customer] dibatalkan</h4>
		</div>";
	}
	if ($_GET['pesan'] == "hapus") {
		echo"
		<div class='alert-box success'>
			<h4>Penyewaan dihapus</h4>
		</div>";
	}
}
?>
		
<div class="datagrid">			
	<table> 
		<thead> 
			<tr> 
				<th>No</th>
				<th>Nama Customer</th> 
				<th>NIM</th>
				<th>Organisasi</th>
				<th>Alamat</th>
				<th>Telepon</th>
				<th>Produk</th>
				<th>Tanggal Penyewaan</th>
				<th>Harga</th>
				<th>Status</th>
				<th>Aksi</th>
			</tr> 
		</thead> 
		<tbody>
			<?php
			$tp = mysql_query("SELECT * FROM transaksi ORDER BY id_transaksi DESC");
			$nu = 1;
			while ($t=mysql_fetch_array($tp))
			{ 
				$customer=mysql_query("SELECT * FROM customer WHERE username='$t[username]'");
				$c=mysql_fetch_array($customer);
				
				$produk=mysql_query("SELECT * FROM property WHERE kode_produk='$t[kode_produk]'");
				$p=mysql_fetch_array($produk);
				
				echo"<tr class='alt'> 
					<td>$nu</td> 
					<td>$c[nama_customer]</td>
					<td>$c[nim]</td>
					<td>$c[organisasi]</td>
					<td>$c[alamat]</td>
					<td>$c[phone]</td>
					<td>$p[nama_properti]</td>
					<td>$t[tanggal]</td>
					<td>$p[harga_sewa]</td>
					<td><a class='$t[status]' href='#'><span>$t[status]</span></a></td>
					<td>
						<a href='salestatus.php?n=terima&id=$t[id_transaksi]'>Terima</a>
						<a href='salestatus.php?n=tolak&id=$t[id_transaksi]'>Tolak</a>
						<a href='salestatus.php?n=hapus&id=$t[id_transaksi]'>Hapus</a>
					</td>";
				$nu++;
			}
			?>
		</tbody> 
	</table>
</div>
