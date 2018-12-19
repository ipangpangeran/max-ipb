<?php
	if (!empty($_GET['pesan'])){
		if ($_GET['pesan'] == 1) 
		{
			echo "
			<div class='alert-box alert'>
				<h3>Band Penuh</h3>
			</div>";
		}
		else if ($_GET['pesan'] == 2) 
		{
			echo "
			<div class='alert-box success'>
				<h3>Berhasil Join</h3>
			</div>";
		}
		else if ($_GET['pesan'] == 3) 
		{
			echo "
			<div class='alert-box alert'>
				<h3>Anggota sudah Join</h3>
			</div>";
		}
	}
	
	$tp = mysql_query("SELECT * FROM property WHERE kode_produk LIKE 'B%' ORDER BY kode_produk ASC");
	while ($t=mysql_fetch_array($tp))
	{ 
		echo"
		<div class='sales'>";
		$cek = mysql_query("SELECT * FROM gabung WHERE kode_produk='$t[kode_produk]'");
		$row=mysql_num_rows($cek);
		
		echo"
			
			
			<img src='foto_produk/$t[foto]' width=150 height=150>
			<a href='index.php?hal=9&id=$t[kode_produk]'>
			<p>Lihat</p>
			<i class='go'></i></a>
			<h3>$t[nama_properti]</h3>
			<center><span>Member $row/7</span>
			<div class='clearfix'></div>
		</div>";
	}
?>
