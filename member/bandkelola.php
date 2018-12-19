<?php
	if (!empty($_GET['pesan'])){
		if ($_GET['pesan'] == 1) 
		{
			echo '<h3>Band Penuh</h3>';
		}
		else if ($_GET['pesan'] == 2) 
		{
			echo '<h3>Berhasil Join</h3>';
		}
		else if ($_GET['pesan'] == 3) 
		{
			echo '<h3>Anda sudah Join</h3>';
		}
	}
	
	$tp = mysql_query("SELECT * FROM property WHERE kode_produk LIKE 'B%'");
	while ($t=mysql_fetch_array($tp))
	{ 
		echo"
		<div class='sales'>";
		$cek = mysql_query("SELECT * FROM gabung WHERE kode_produk='$t[kode_produk]'");
		$row=mysql_num_rows($cek);
		echo"
			<h4>Member $row/7</h4>
			<h3>$t[nama_properti]</h3>
			
			<a href='index.php?hal=3&id=$t[kode_produk]'>
			<p>Lihat</p>
			<i class='go'></i></a>
			<div class='clearfix'></div>
		</div>";
	}
?>
