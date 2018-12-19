<?php	
	
	if(!empty($_GET['pesan'])){
		if($_GET['pesan'] == "6"){
			echo"
				 
			<i class='alert-box success radius'>Produk telah dihapus</i>		

			<div class='clearfix'></div>
			";
		}
	}
?>	

<div class='cart'>
	 <div class='container'>
		 <div class='col-md-9 cart-items'>
			 <h2>Cart Penyewaan</h2>
				<script>$(document).ready(function(c) {
					$('.close1').on('click', function(c){
						$('.cart-header').fadeOut('slow', function(c){
							$('.cart-header').remove();
						});
						});	  
					});
			   </script>
			<?php
			$sid = session_id();
			$sum=0;
			$produk=mysql_query("SELECT * FROM ordertemp WHERE id='$sid'");
			while($p=mysql_fetch_array($produk)){
			
				if(!empty($_GET['tipe'])){
					if($_GET['tipe'] == "properti"){
						$barang=mysql_query("SELECT * FROM property WHERE kode_produk='$p[kode_produk]'");
						$b=mysql_fetch_array($barang);
						$sum+=$b['harga_sewa'];
						echo"
						<div class='cart-header'>
							
							<div class='cart-sec'>
								<div class='cart-item cyc'>
									<img src='admin/foto_produk/$b[foto]' />
								</div>
								<div class='cart-item-info'>
									<h3>$b[nama_properti]<span>$b[kode_produk]</span></h3>
									<h4><span>Rp </span>$b[harga_sewa]</h4>
								</div>
								<span>Tanggal Penyewaan : $p[tanggal]</span>
								<br><br>
								<span>$b[deskripsi]</span>
								<div class='clearfix'>
								<form action='keranjangdelete.php?id=$p[id]&tgl=$p[tanggal]&prod=$b[kode_produk]&tipe=properti' method='POST'>
									<div class='tombol'>
									<input type='submit' value='Hapus'/>
									</div>
								</form>
								</div>
								
								<div class='delivery'>
									
								<div class='clearfix'></div>
								 </div>						
							</div>
						</div>";
					}
					else if($_GET['tipe'] == "band"){
						$barang=mysql_query("SELECT * FROM property WHERE kode_produk='$p[kode_produk]'");
						$b=mysql_fetch_array($barang);
						$sum+=$b['harga_sewa'];
						echo"
						<div class='cart-header'>
							
							<div class='cart-sec'>
								<div class='cart-item cyc'>
									<img src='admin/foto_produk/$b[foto]' />
								</div>
								<div class='cart-item-info'>
									<h3>$b[nama_properti]<span>$b[kode_produk]</span></h3>
									<h4><span>Rp </span>$b[harga_sewa]</h4>
								</div>
								<span>Tanggal Penyewaan : $p[tanggal]</span>
								<br><br>
								<span>$b[deskripsi]</span>
								<div class='clearfix'>
								<form action='keranjangdelete.php?id=$p[id]&tgl=$p[tanggal]&prod=$b[kode_produk]&tipe=band' method='POST'>
									<input type='submit' value='Hapus' />
								</form>
								</div>
								
								<div class='delivery'>
									
								<div class='clearfix'></div>
								 </div>						
							</div>
						</div>";
					}
				}
			}
			?>
		<div class='col-md-3'>
			<a class='continue' href='produk.php?p=properti'>Lanjut sewa</a>
		</div>
		</div>
		 
		<div class='col-md-3 cart-total'>
		
		<?php
		
		function isi_keranjang(){
			$isikeranjang = array();
			$sid = session_id();
			$sql = mysql_query("SELECT * FROM ordertemp WHERE id='$sid'");
			
			while ($r=mysql_fetch_array($sql)) {
				$isikeranjang[] = $r;
			}
			return $isikeranjang;
		}
		
		$isikeranjang = isi_keranjang();
		$jml          = count($isikeranjang);
		
		?>
		
			<div class='price-details'>
				<h3>Price Details</h3>
				<span>Total</span>
				<span class='total'><?php echo $jml;?></span>
				<span>Discount</span>
				<span class='total'>---</span>
				<div class='clearfix'></div>				 
			</div>	
			<h4 class='last-price'>TOTAL</h4>
			<span class='total final'><?php echo "RP $sum"; ?></span>
			<div class='clearfix'></div>
			<?php
			echo"
			<a class='order' href='keranjangsimpan.php?t=$jml&id=$sid'>Place Order</a>";
			?>
		</div>
	</div>
</div>
<!---->