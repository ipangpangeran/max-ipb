<?php
include "connect.php";
include "ceklogin.php";
?>
<!--/banner-->
<div class='parts'>
	<div class='container'>
		<h2>MY ACCOUNT</h2>
		<div class='bike-parts-sec'>
		<div class='bike-parts acces'>
			<?php
			if(!empty($_GET['i'])){
				if($_GET['i'] == "akunku"){
					$tampil=mysql_query("SELECT * FROM customer where username='$_SESSION[customer]'");
					$t=mysql_fetch_array($tampil);
					if(!empty($_GET['pesan'])){
						if($_GET['pesan']=="edit"){
							echo"
							<div class='alert-box success radius'>
							<h4>Akun anda berhasil diedit</h4>
							</div>
							<br>
							";
						}
					}
						
					echo"					
					<table>
						<tr>
							<th><h3>Nama</h3></th>
						<tr>
						<tr>
							<td><span>$t[nama_customer]</span></td>
						</tr>	
						<tr>
							<th><h3>NIM</h3></th>
						<tr>
						<tr>
							<td><span>$t[nim]</span></td>
						</tr>
						<tr>
							<th><h3>Organisasi</h3></th>
						<tr>
						<tr>
							<td><span>$t[organisasi]</span></td>
						</tr>	
						<tr>
							<th><h3>Alamat</h3></th>
						<tr>
						<tr>
							<td><span>$t[alamat]</span></td>
						</tr>	
						<tr>
							<th><h3>Telepon</h3></th>
						<tr>
						<tr>
							<td><span>$t[phone]</span></td>
						</tr>	
					</table>
					<div class='product_price'>							
						<a class='button1' href='?p=akun&i=edit'><span>Edit</span></a>
					</div>";
				}
				else if($_GET['i'] == "edit"){
					$tampil=mysql_query("SELECT * FROM customer where username='$_SESSION[customer]'");
					$t=mysql_fetch_array($tampil);
					echo"
					<div class='alert-box info radius'>
						<h4>Isi akun anda dengan data yang benar</h4>
					</div>
					<br>
					
					<form action='akunedit.php?username=$_SESSION[customer]' method='POST'>
					<table>
						<tr>
							<th><h3>Nama</h3></th>
						<tr>
						<tr>
							<td><input type='text' name='nama' value='$t[nama_customer]' /></td>
						</tr>	
						<tr>
							<th><h3>NIM</h3></th>
						<tr>
						<tr>
							<td><input type='text' name='nim' value='$t[nim]' /></td>
						</tr>
						<tr>
							<th><h3>Organisasi</h3></th>
						<tr>
						<tr>
							<td><input type='text' name='organisasi' value='$t[organisasi]' /></td>
						</tr>	
						<tr>
							<th><h3>Alamat</h3></th>
						<tr>
						<tr>
							<td><input type='text' name='alamat' value='$t[alamat]' /></td>
						</tr>	
						<tr>
							<th><h3>Telepon</h3></th>
						<tr>
						<tr>
							<td><input type='text' name='phone' value='$t[phone]' /></td>
						</tr>
					</table>
					
					<div class='product_price'>							
						<input type='submit' value='edit'>
					</div>
					</form>";
				}
				else if($_GET['i'] == "pesan"){
					$tampil=mysql_query("SELECT * FROM transaksi WHERE username='$_SESSION[customer]'");
					while($t=mysql_fetch_array($tampil)){
						$produk=mysql_query("SELECT * FROM property WHERE kode_produk='$t[kode_produk]'");
						$p=mysql_fetch_array($produk);
					echo"
					<div class='product'>
						<div class='product-desc'>
							<div class='product-img product-img2'>
								<img src='admin/foto_produk/$p[foto]' class='img-responsive ' alt=''/>
							</div>
							<div class='prod1-desc'>
								<h5><a class='product_link' href='#'>$p[nama_properti]</a></h5>
								<p class='product_descr'> $p[deskripsi]</p>
								<p class='product_descr'><strong><font color='red'>Tanggal pemesanan : $t[tanggal] </font></strong></p>
							</div>
							<div class='clearfix'></div>
						</div>
						<div class='product_price'>							
							<a class='$t[status]' href='#'><span>$t[status]</span></a>
							</div>
						<div class='clearfix'></div>
					</div>";
					}
			}			
			else{
				echo"
				<div class='bike-apparels'>
					<div class='parts1'>
						<h1>HALAMAN AKUN</h1>
						<h2>Edit akun dan lihat pesanan</h2>
						<div class='clearfix'></div>
					</div>
				</div>";
			}
		}	?>
		</div>
		 
		<div class='rsidebar span_1_of_left'>
			<section  class='sky-form'>
				<div class='product_right'>
					<h3 class='m_2'>NAVIGASI</h3>
						<ul>
							<li><a href='?p=akun&i=akunku'>Akun</a></li>
							<li><a href='?p=akun&i=pesan'>Pesanan</a></li>
						</ul>
				</div>
			</section>	      
		</div>	 
		 
		 <div class='clearfix'></div>
		 </div>
	  </div>
</div>
<!---->
