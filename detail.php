<?php
include "connect.php";
session_start();
$sid=session_id();
?>

<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Detail Produk</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/form.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Bike-shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Roboto:500,900,100,300,700,400' rel='stylesheet' type='text/css'>
<!--webfont-->
<!-- dropdown -->
<script src="js/jquery.easydropdown.js"></script>
<link href="css/nav.css" rel="stylesheet" type="text/css" media="all"/>
<script src="js/scripts.js" type="text/javascript"></script>
<!--js-->

</head>
<body>
<!--banner-->
<script src="js/responsiveslides.min.js"></script>
<script>  
    $(function () {
      $("#slider").responsiveSlides({
      	auto: false,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
<div class="banner-bg banner-sec">	
	  <div class="container">
			 <div class="header">
			       <div class="logo">
						 <a href="index.php"><img src="images/logo.png" alt=""/></a>
				   </div>							 
				  <div class="top-nav">										 
						<label class="mobile_menu" for="mobile_menu">
						<span>Menu</span>
						</label>
						<input id="mobile_menu" type="checkbox">
					   <ul class="nav">
						<li class="dropdown1"><a href="produk.php?p=band">BAND</a>
						</li>
						<li class="dropdown1"><a href="produk.php?p=properti">PROPERTI</a>
						</li>
						
						<li class='dropdown1'>
							<a href='produk.php?p=sewa'>CARA SEWA</a>
						</li>
						
						<?php
						if (!empty($_SESSION['customer']) AND !empty($_SESSION['passcust'])){
						
								echo"
								<li class='dropdown1'><a href='produk.php?p=akun'>MY ACCOUNT</a>
								</li>
								<li class='dropdown1'><a href='logout.php'>LOGOUT</a>
								</li>";
						}
						
						if (empty($_SESSION['customer']) AND empty($_SESSION['passcust'])){
							
								echo"
								<li class='dropdown1'><a href='../max/panelcustomer'>LOGIN</a>
								</li>";
						}
						?>
						  <a class="shop" href="produk.php?p=cart&tipe=properti"><img src="images/cart.png" alt=""/></a>
					  </ul>
				 </div>
				 <div class="clearfix"></div>
			 </div>
	  </div> 				 
</div>
<!--/banner-->
<div class="product">
	 <div class="container">
		 <div class="ctnt-bar cntnt">
			 <div class="content-bar">
				 <div class="single-page">
					 <div class="product-head">
						
					 <a href="store.php">home</a> / detail

		
						</div>
					 <!--Include the Etalage files-->
						<link rel="stylesheet" href="css/etalage.css">
						<script src="js/jquery.etalage.min.js"></script>
				<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 400,
					thumb_image_height: 400,
					source_image_width: 800,
					source_image_height: 1000,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
		</script>
						<!--//details-product-slider-->
					
<?php
if(!empty($_GET['pesan'])){
	if($_GET['pesan'] == 1){
		echo"<div class='alert-box alert radius'>Tanggal sudah di booking</div>";
	}
	else if($_GET['pesan'] == 2){
		echo"
		<div class='alert-box alert radius'>Anda sudah booking</div>";
	}
	else if($_GET['pesan'] == 3){
		echo"<div class='alert-box success radius'>Berhasil booking</div>";
	}
}
?>
					
<?php
if(!empty($_GET['p'])){
	if($_GET['p'] == "properti"){

					echo"
					<div class='details-left-slider'>
						<div class='grid images_3_of_2'>
							<ul id='etalage'>
							<li>";
							$sid = session_id();
							$tampil = mysql_query("SELECT * FROM property WHERE kode_produk='$_GET[id]'");
							
							$transaksi=mysql_query("SELECT * FROM transaksi WHERE kode_produk='$_GET[id]'");
							$trans=mysql_fetch_array($transaksi);
							
							$customer=mysql_query("SELECT * FROM customer WHERE username='$trans[username]'");
							$cust=mysql_fetch_array($customer);
							
							while ($t=mysql_fetch_array($tampil))
							{
								echo"
								<a href='optionallink.html'>
									<img class='etalage_thumb_image' src='admin/foto_produk/$t[foto]' class='img-responsive' />
									<img class='etalage_source_image' src='admin/foto_produk/$t[foto]' class='img-responsive' title='' />
								</a>
							</li>
						</ul>
						</div>
					</div>
					<div class='details-left-info'>
						<h3>$t[nama_properti]</h3>
							<h4>$t[kode_produk]</h4>
							<h4></h4>
							<h3><label>RP</label> $t[harga_sewa] </h3>
							<h4></h4>
							<h3>Transaksi lain ::</h3>
							<p>$trans[tanggal] oleh $cust[organisasi]</p>
							<form action='prosessewa.php?p=set&id=$t[kode_produk]&tipe=properti&sid=$sid' method='POST'>
								<p class='size'>Tanggal Sewa</p>
								<input type='date'  name='tanggal' required />
								<input type='submit' value='SEWA' required>
							</form>
							<div class='bike-type'>
							<h3>SPESIFIKASI  :: </h3>
							<p>$t[spesifikasi]</p>
							<h3>KETERANGAN  :: </h3>
							<p>$t[keterangan]</p>
							</div>
							<h5>Description  ::</h5>
							<p class='desc'>$t[deskripsi]</p>";
							}
					echo"
					</div>
					 <div class='clearfix'></div>				 	
				  </div>
			  </div>
		  </div>
		  	 <div class='clearfix'></div>
		 </div>	
	 </div>";
	}
	else if($_GET['p'] == "band"){
							echo"
					<div class='details-left-slider'>
						<div class='grid images_3_of_2'>
							<ul id='etalage'>
							<li>";
							$sid = session_id();
							$tampil = mysql_query("SELECT * FROM property WHERE kode_produk='$_GET[id]'");
							
							$transaksi=mysql_query("SELECT * FROM transaksi WHERE kode_produk='$_GET[id]'");
							$trans=mysql_fetch_array($transaksi);
							
							$customer=mysql_query("SELECT * FROM customer WHERE username='$trans[username]'");
							$cust=mysql_fetch_array($customer);
							
							while ($t=mysql_fetch_array($tampil))
							{
								echo"
								<a href='optionallink.html'>
									<img class='etalage_thumb_image' src='admin/foto_produk/$t[foto]' class='img-responsive' />
									<img class='etalage_source_image' src='admin/foto_produk/$t[foto]' class='img-responsive' title='' />
								</a>
							</li>
						</ul>
						</div>
					</div>
					<div class='details-left-info'>
						<h3>$t[nama_properti]</h3>
							<h4>$t[kode_produk]</h4>
							<h4></h4>
							<h3><label>RP</label> $t[harga_sewa] </h3>
							<h4></h4>
							<h3>Transaksi lain ::</h3>
							<p>$trans[tanggal] oleh $cust[organisasi]</p>
							<form action='prosessewa.php?p=set&id=$t[kode_produk]&tipe=band&sid=$sid' method='POST'>
								<p class='size'>Tanggal Sewa</p>
								<input type='date'  name='tanggal' required />
								<input type='submit' value='SEWA' required>
							</form>
							<div class='bike-type'>
							<h3>GENRE  :: </h3>
							<p>$t[genre]</p>
							</div>
							<h5>Description  ::</h5>
							<p class='desc'>$t[deskripsi]</p>";
							}
					echo"
					</div>
					 <div class='clearfix'></div>				 	
				  </div>
			  </div>
		  </div>
		  	 <div class='clearfix'></div>
		 </div>	
	 </div>
	 </div>
		 <div class='single-bottom2'>
	  <h6>Anggota Band</h6>
	 <div class='product'>";
	 $tampil = mysql_query("SELECT * FROM gabung WHERE kode_produk='$_GET[id]'");
					while ($t=mysql_fetch_array($tampil)){
					$cek=mysql_query("SELECT * FROM anggota WHERE username_anggota='$t[username_anggota]'");
					$c=mysql_fetch_array($cek);
					echo"
			 <div class='product-desc'>
					
					<div class='product-img product-img2'>
					 <img src='member/foto/$c[foto]' class='img-responsive ' alt='' width=100 height=100 />
				 </div>
				 <div class='prod1-desc'>
						<h5>$c[nama]</h5>
						<p class='product_descr'> Keterangan</p>									
				 </div>
				 <div class='clearfix'></div>
			 </div>
			 <div class='product_price'>
						
					 </div>
				  <div class='clearfix'></div>";
					}
					echo"
			
		 <div class='clearfix'></div>
	  </div>
 </div>	";
	}
}
?>
</div>
<!---->
<div class="footer">
	 <div class="container wrap">
		<div class="logo2">
			 <a href="index.html"><img src="images/logo2.png" alt=""/></a>
		</div>
		<div class="ftr-menu">
		</div>
		<div class="clearfix"></div>
	 </div>
</div>
<!---->

</body>
</html>

