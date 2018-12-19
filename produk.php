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
<title>Produk MAX!!</title>
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
						 <a href="index.php"><img src="images/logo.png"  width="200" alt=""/></a>
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
<div class="parts">
	

	 <div class="container">
	 
	<div class="top">
		 <ul>
			 <li><a href="store.php">home</a></li>
			 <li><a href="#"> / </a></li>
			 <?php
			if(!empty($_GET['p'])){
				if($_GET['p'] == "band"){
					echo"<li><a href='#'>band</a></li>";
				}
				else if($_GET['p'] == "properti"){
					echo"<li><a href='#'>properti</a></li>";
				}
				else if($_GET['p'] == "sewa"){
					echo"<li><a href='#'>cara sewa</a></li>";
				}
				else if($_GET['p'] == "set"){
					echo"<li><a href='#'>set tanggal</a></li>";
				}
				else if($_GET['p'] == "cart"){
					echo"<li><a href='#'>cart</a></li>";
				}
			}
			?>
			 
		 </ul>				 
	 </div>
		<?php
		if(!empty($_GET['p'])){
			if($_GET['p'] == "band"){
				echo"<h2>BAND MAX!!</h2>";
			}
			else if($_GET['p'] == "properti"){
				echo"<h2>PROPERTI MAX!!</h2>";
			}
			else if($_GET['p'] == "set"){
				
				if(!empty($_GET['tipe'])){	
					if($_GET['tipe'] == "properti"){
						$tampil=mysql_query("SELECT * FROM property where kode_produk='$_GET[id]'");
						$pilih=mysql_fetch_array($tampil);
						echo"
						<h2>$pilih[nama_properti]</h2>
						<img src='admin/foto_produk/$pilih[foto]' width=100 height=100 />
						";
					}
					else if($_GET['tipe'] == "band"){
						$tampil=mysql_query("SELECT * FROM band where kode_produk='$_GET[id]'");
						$pilih=mysql_fetch_array($tampil);
						echo"<h2>$pilih[nama_band]</h2>
						<img src='admin/foto_produk/$pilih[foto]' width=100 height=100 />";
					}
				}
			}
		}
		?>
		 <div class="bike-parts-sec">
			 <div class="bike-apparels">
				 <div class="parts1">
				<?php	
				if(!empty($_GET['p'])){
					if($_GET['p'] == "band"){
						include"band.php";
					}
					else if($_GET['p'] == "properti"){
						include"properti.php";
					}
					else if($_GET['p'] == "sewa"){
						include"sewa.php";
					}
					else if($_GET['p'] == "set"){
						include"set.php";
					}
					else if($_GET['p'] == "cart"){
						include"keranjang.php";
					}
					else if($_GET['p'] == "success"){
						include"sukses.php";
					}
					else if($_GET['p'] == "akun"){
						include"akun.php";
					}
				}
				?>
				 </div>
			 </div>
		 <div class="clearfix"></div>
		 </div>
	  </div>
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

