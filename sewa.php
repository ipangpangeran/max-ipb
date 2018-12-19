<!--/banner-->
<div class="404-page">
	 <div class="container">
		 <div class="error-head">
			 <span>Cara Penyewan Produk MAX!!</span>
			 <?php
			 
			 $cara=mysql_query("SELECT sewa FROM modul");
			 $s=mysql_fetch_array($cara);
			 echo"<h2>$s[sewa]</h2>";
			 ?>
		 </div>
	 </div>
</div>
<!---->