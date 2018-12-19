<?php
include "../connect.php";
include "../login/ceklogin.php";

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
<title>Administrator</title>
<link href="css/bootstrap.css" rel="stylesheet" type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Metro_Pannel_Ui_Kit Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<script>$(document).ready(function(c) {
	$('.alert-close').on('click', function(c){
		$('.calender-left').fadeOut('slow', function(c){
	  		$('.calender-left').remove();
		});
	});	  
});
</script>
<script>$(document).ready(function(c) {
	$('.alert-close1').on('click', function(c){
		$('.calender-right').fadeOut('slow', function(c){
	  		$('.calender-right').remove();
		});
	});	  
});
</script>
<script>$(document).ready(function(c) {
	$('.alert-close2').on('click', function(c){
		$('.graph').fadeOut('slow', function(c){
	  		$('.graph').remove();
		});
	});	  
});
</script>
<script>$(document).ready(function(c) {
	$('.alert-close3').on('click', function(c){
		$('.site-report').fadeOut('slow', function(c){
	  		$('.site-report').remove();
		});
	});	  
});
</script>
<script>$(document).ready(function(c) {
	$('.alert-close4').on('click', function(c){
		$('.total-sale').fadeOut('slow', function(c){
	  		$('.total-sale').remove();
		});
	});	  
});
</script>
<script>$(document).ready(function(c) {
	$('.alert-close5').on('click', function(c){
		$('.total-sale').fadeOut('slow', function(c){
	  		$('.total-sale').remove();
		});
	});	  
});
</script>
<script>$(document).ready(function(c) {
	$('.alert-close7').on('click', function(c){
		$('.user-trends').fadeOut('slow', function(c){
	  		$('.user-trends').remove();
		});
	});	  
});
</script>
<script>$(document).ready(function(c) {
	$('.alert-close6').on('click', function(c){
		$('.world-map').fadeOut('slow', function(c){
	  		$('.world-map').remove();
		});
	});	  
});
</script>
<!----Calender -------->
  <link rel="stylesheet" href="css/clndr.css" type="text/css" />
  <script src="js/underscore-min.js"></script>
  <script src= "js/moment-2.2.1.js"></script>
  <script src="js/clndr.js"></script>
  <script src="js/site.js"></script>
<!----End Calender -------->
<script src="js/highcharts.js"></script>
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		    <script type="text/javascript">
			    $(document).ready(function () {
			        $('#horizontalTab,#horizontalTab1,#horizontalTab2').easyResponsiveTabs({
			            type: 'default', //Types: default, vertical, accordion           
			            width: 'auto', //auto or any width like 600px
			            fit: true   // 100% fit in a container
			        });
			    });
			   </script>
<link href="css/nav.css" rel="stylesheet" type="text/css" media="all"/>
<script src="js/main.js"></script> <!-- Resource jQuery -->
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  	ga('create', 'UA-48014931-1', 'codyhouse.co');
  	ga('send', 'pageview');

  	jQuery(document).ready(function($){
  		$('.close-carbon-adv').on('click', function(){
  			$('#carbonads-container').hide();
  		});
  	});
</script>
<script src="js/amcharts.js" type="text/javascript"></script>
        <script src="js/serial.js" type="text/javascript"></script>
        <style type="text/css">

            .amcharts-graph-g1 .amcharts-graph-stroke {
                stroke-dasharray: 3px 3px;
                stroke-linejoin: round;
                stroke-linecap: round;
                -webkit-animation: am-moving-dashes 1s linear infinite;
                animation: am-moving-dashes 1s linear infinite;
            }

            @-webkit-keyframes am-moving-dashes {
                100% {
                    stroke-dashoffset: -30px;
                }
            }
            @keyframes am-moving-dashes {
                100% {
                    stroke-dashoffset: -30px;
                }
            }


            .lastBullet {
                -webkit-animation: am-pulsating 1s ease-out infinite;
                animation: am-pulsating 1s ease-out infinite;
            }
            @-webkit-keyframes am-pulsating {
                0% {
                    stroke-opacity: 1;
                    stroke-width: 0px;
                }
                100% {
                    stroke-opacity: 0;
                    stroke-width: 50px;
                }
            }
            @keyframes am-pulsating {
                0% {
                    stroke-opacity: 1;
                    stroke-width: 0px;
                }
                100% {
                    stroke-opacity: 0;
                    stroke-width: 50px;
                }
            }

            .amcharts-graph-column-front {
                -webkit-transition: all .3s .3s ease-out;
                transition: all .3s .3s ease-out;
            }
            .amcharts-graph-column-front:hover {
                fill: #496375;
                stroke: #496375;
                -webkit-transition: all .3s ease-out;
                transition: all .3s ease-out;
            }


            .amcharts-graph-g2 {
              stroke-linejoin: round;
              stroke-linecap: round;
              stroke-dasharray: 500%;
              stroke-dasharray: 0 \0/;    /* fixes IE prob */
              stroke-dashoffset: 0 \0/;   /* fixes IE prob */
              -webkit-animation: am-draw 40s;
              animation: am-draw 40s;
            }
            @-webkit-keyframes am-draw {
                0% {
                    stroke-dashoffset: 500%;
                }
                100% {
                    stroke-dashoffset: 0px;
                }
            }
            @keyframes am-draw {
                0% {
                    stroke-dashoffset: 500%;
                }
                100% {
                    stroke-dashoffset: 0px;
                }
            }




        </style>


 
		
					<script src="js/zingchart.min.js"></script>
	<script src="js/zingchart.jquery.js"></script>
</head>
<body>
	<div class="total-content">
		<div class="col-md-3 side-bar">
			<div class="logo text-center">
				<a href="index.php"><img src="images/logo.png" alt="" /></a>
			</div>
			<div class="navigation">
				<h3>Navigation</h3>
				<ul>
					<li><a href="?hal=4"><i class="fat"></i></a></li>
					<li><a href="?hal=4">Tambah Produk</a></li>
				</ul>
				<ul>
					<li><a href="?hal=2"><i class="page"></i></a></li>
					<li><a href="?hal=2">Lihat Produk</a></li>
				</ul>
				<ul>
					<li><a href="?hal=8"><i class="art"></i></a></li>
					<li><a href="?hal=8">Kelola Band</a></li>
				</ul>
				<ul>
					<li><a href="?hal=10"><i class="art"></i></a></li>
					<li><a href="?hal=10">Cara Penyewaan</a></li>
				</ul>
			</div>
		</div>
		<div class="col-md-9 content">
			<div class="home-strip">
				<div class="member">
					<p>
					<?php
					echo"
					<a href='?username=$_SESSION[username]&hal=7'><i class='men'></i></a>
					<a href='?username=$_SESSION[username]&hal=7'>";
					
						$name=mysql_query("SELECT * FROM admin WHERE username = '$_SESSION[username]'");
						$data = mysql_fetch_array($name); 
					
					echo "$data[nim]";
					?>
					</a>
					</p>
					<div id="dd" class="wrapper-dropdown-2" tabindex="1"><span><img src="images/settings.png"/></span>
							<ul class="dropdown">
								<?php		
								echo"<li><a href='?username=$_SESSION[username]&hal=7'>View Profile </a></li>";
								?>
								<li><a href="logout.php">Log out</a></li>
							</ul>
					</div>
			<!-----end-wrapper-dropdown-2---->
			<!-----start-script---->
			<script type="text/javascript">
							function DropDown(el) {
								this.dd = el;
								this.initEvents();
							}
							DropDown.prototype = {
								initEvents : function() {
									var obj = this;
				
									obj.dd.on('click', function(event){
										$(this).toggleClass('active');
										event.stopPropagation();
									});	
								}
							}
							$(function() {
				
								var dd = new DropDown( $('#dd') );
				
								$(document).click(function() {
									// all dropdowns
									$('.wrapper-dropdown-2').removeClass('active');
								});
				
							});
			</script>
			<div class="clearfix"></div>			
			</div>
			<div class="clearfix"></div>	
				</div>
				<div class="clearfix"></div>
			
			<div class="list_of_members">
				<div class="visitors">
					<h4>TOTAL <strong>MEMBER</strong></h4>
					<?php
					$jumlah=mysql_query("SELECT * FROM anggota");
					$row=mysql_num_rows($jumlah);
					echo"
					<h3>$row</h3>
					";
					?>
					<a href="?hal=3">
					<p>Lihat Member </p>
					<i class="go"></i></a>
					<div class="clearfix"></div>
				</div>
				<div class="sales">
					<h4>TOTAL <strong>SALE</strong></h4>
					<?php
					$jumlah=mysql_query("SELECT * FROM transaksi");
					$row=mysql_num_rows($jumlah);
					echo"
					<h3>$row</h3>";
					?>
					<a href="?hal=sale">
					<p>Lihat Sale</p>
					<i class="go"></i></a>
					<div class="clearfix"></div>
				</div>
				<div class="users">
					<h4>TOTAL <strong>CUSTOMER</strong></h4>
					<?php
					$jumlah=mysql_query("SELECT * FROM customer");
					$row=mysql_num_rows($jumlah);
					echo"
					<h3>$row</h3>
					";
					?>
					<a href="?hal=1">
					<p>Lihat Customer </p>
					<i class="go"></i></a>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
			
			<?php
			if (!empty($_GET['hal'])){
				if ($_GET['hal'] == 1) 
				{
					include "customerlihat.php";
				}
				else if ($_GET['hal'] == 2) 
				{
					include "produk.php";
				}
				else if ($_GET['hal'] == 3) 
				{
					include "memberlihat.php";
				}
				else if ($_GET['hal'] == 4) 
				{
					include "tambahband.php";
				}
				else if ($_GET['hal'] == 5) 
				{
					include "bandedit.php";
				}
				else if ($_GET['hal'] == 6) 
				{
					include "propertiedit.php";
				}
				else if ($_GET['hal'] == 7) 
				{
					include "editadmin.php";
				}
				else if ($_GET['hal'] == 8) 
				{
					include "kelola.php";
				}
				else if ($_GET['hal'] == 9) 
				{
					include "kelolaband.php";
				}else if ($_GET['hal'] == 10) 
				{
					include "sewa.php";
				}
				else if ($_GET['hal'] == "sale") 
				{
					include "sale.php";
				}
			}
			?>
			
			
</body>
</html>
