<?php
$tampil = mysql_query("SELECT * FROM property WHERE kode_produk LIKE 'B%'");
while ($t=mysql_fetch_array($tampil))
{		
echo"
	<a href='detail.php?id=$t[kode_produk]&p=band'><div class='part-sec'>				 
	<img src='admin/foto_produk/$t[foto]' alt=''/>
	<div class='part-info'>
		<a hrefhref='detail.php?id=$t[kode_produk]&p=band'><h5>$t[nama_properti]<span></span></h5></a>
		<a class='add-cart' href='detail.php?id=$t[kode_produk]&p=band'>RP $t[harga_sewa]</a>
		<a class='qck' href='detail.php?id=$t[kode_produk]&p=band'>ADD TO CHART</a>
	</div>
	</div></a>";
}
?>