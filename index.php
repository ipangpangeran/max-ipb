<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>MAX!! STORE</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
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
<!---- start-smoth-scrolling---->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
		</script>
<!---- start-smoth-scrolling---->


</head>
<body>
<!--banner-->
<script src="js/responsiveslides.min.js"></script>
<script>  
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
<div class="banner-bg banner-bg1">	
	<div class="container">
		<div class="header">
			<div class="logo">
				<a href="index.php"><img src="images/logo.png" width="200" alt=""/></a>
			</div>
		</div>
	</div>	 
	<div class="caption">
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides" id="slider">
					<li><h1>PEMINJAMAN ALAT MUSIK</h1></li>
					<li><h1>PENYEWAAN PERFORMER</h1></li>	
					<li><h1>MAX!! STORE</h1></li>	
				</ul>
				<p>You <span>create</span> the <span>event,</span> we supply the <span>parts</span></p>
				<a class="morebtn" href="store.php">ENTER STORE</a>
		    </div>
		</div>
	</div>
		<div class="dwn">
			<a class="scroll" href="#cate"><img src="images/scroll.png" alt=""/></a>
		</div>				 
</div>

<!--/banner-->
<div id="cate" class="categories">
	<div class="container">
		<h3>LOGIN</h3>
			<div class="categorie-grids">
				<a href="panelmember"><div class="col-md-4 cate-grid grid1">
				<h4>MEMBER</h4>
				<p>Member MAX</p>
				<a class="store" href="panelmember">LOGIN MEMBER</a>
			</div></a>
				<a href="paneladmin"><div class="col-md-4 cate-grid grid2">
				<h4>ADMIN</h4>
				<p>Administrator</p>
				<a class="store" href="paneladmin">LOGIN ADMIN</a>
			</div></a>
				<a href="bicycles.html"><div class="col-md-4 cate-grid grid3">
				<h4>CUSTOMER</h4>
				<p>Login untuk menyewa barang</p>
				<a class="store" href="panelcustomer">LOGIN CUSTOMER</a>
			</div></a>
		<div class="clearfix"></div>
		</div>
	</div>
</div>

<!-- footer -->
<div class="footer">
	 <div class="container wrap">
		<div class="logo2">
			 <a href="index.php"><img src="images/logo2.png" alt=""/></a>
		</div>
		
		<div class="clearfix"></div>
	 </div>
</div>
<!---->

</body>
</html>

