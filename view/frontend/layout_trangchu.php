	<!doctype html>
	<!--[if !IE]><!-->
	<html lang="vi">
	<!--<![endif]-->

	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta http-equiv="content-language" content="vi" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="robots" content="noodp,index,follow" />
	<meta name='revisit-after' content='1 days' />
	<meta name="keywords" content="">
	<title>DKT Store</title>
	<meta name="description" content="DKT Store">
	<meta property="og:type" content="website">
	<meta property="og:title" content="DKT Store">
	<meta property="og:image" content="public/frontend/100/047/633/themes/517833/assets/logo221b.png?1481775169361">
	<meta property="og:image:secure_url" content="public/frontend/100/047/633/themes/517833/assets/logo221b.png?1481775169361">
	<meta property="og:url" content="index.html">
	<meta property="og:site_name" content="DKT Store">
	<link rel="canonical" href="index.html">
	<link rel="shortcut icon" href="public/frontend/100/047/633/themes/517833/assets/favicon221b.png?1481775169361" type="image/x-icon" />
	<!-- <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=vietnamese" rel="stylesheet"> -->
	<link href='public/frontend/100/047/633/themes/517833/assets/font-awesome.min221b.css?1481775169361' rel='stylesheet' type='text/css' />
	<link href='public/frontend/100/047/633/themes/517833/assets/bootstrap.min221b.css?1481775169361' rel='stylesheet' type='text/css' />
	<link href='public/frontend/100/047/633/themes/517833/assets/owl.carousel221b.css?1481775169361' rel='stylesheet' type='text/css' />
	<link href='public/frontend/100/047/633/themes/517833/assets/responsive221b.css?1481775169361' rel='stylesheet' type='text/css' />
	<link href='public/frontend/100/047/633/themes/517833/assets/styles.scss221b.css?1481775169361' rel='stylesheet' type='text/css' />
	<script src='public/frontend/100/047/633/themes/517833/assets/jquery.min221b.js?1481775169361' type='text/javascript'></script>
	<script src='public/frontend/100/047/633/themes/517833/assets/bootstrap.min221b.js?1481775169361' type='text/javascript'></script>
	<script src='public/frontend/assets/themes_support/api.jquerya87f.js?4' type='text/javascript'></script>
	<link href='public/frontend/100/047/633/themes/517833/assets/bw-statistics-style221b.css?1481775169361' rel='stylesheet' type='text/css' />
	</head>
	<body class="index">
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9&appId=1780127515631166";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<div id="fb-root"></div>
	<!-- co the load thang view neu khong xu ly trong controller -->
	<?php include "view/frontend/header.php"; ?>	
	<div class="content">
	  <div class="container">
		<h1 style="display:none;">DKT Store</h1>
		<div class="row">
			<div class="col-xs-12 col-md-3"> 
		   		<div class="row" style="margin-bottom: 5px;">
		   			<div class="col-md-12"><img src="public/frontend/images/img10.jpg" class="img-thumbnail"></div>
		   		</div>
		   		<div class="row" style="margin-bottom: 5px;">
		   			<div class="col-md-12"><img src="public/frontend/images/img22.jpg" class="img-thumbnail"></div>
		   		</div>
		   		<div class="row">
		   			<div class="col-md-12"><img src="public/frontend/images/img30.jpg" class="img-thumbnail"></div>
		   		</div>	
		  	</div>
		  <div class="col-md-9">
		  	<!-- slide -->
		  	<div class="owl-slider">
				<div class="item"> 
				  <!-- ============================ -->
				  <div id="myCarousel" class="carousel slide" data-ride="carousel"> 
					<!-- Indicators -->
					<ol class="carousel-indicators">
					  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					  <li data-target="#myCarousel" data-slide-to="1"></li>
					  <li data-target="#myCarousel" data-slide-to="2"></li>
					  <li data-target="#myCarousel" data-slide-to="3"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner">
					  <div class="item active"> <img src="public/frontend/images/slideshow1.jpg" alt="Los Angeles"> </div>
					  <div class="item"> <img src="public/frontend/images/slideshow1221b1.jpg" alt="Los Angeles"> </div>
					  <div class="item"> <img src="public/frontend/images/la1.jpg" alt="Chicago"> </div>
					  <div class="item"> <img src="public/frontend/images/ny2.jpg" alt="New York"> </div>
					</div>

					<!-- Left and right controls --> 
				  </div>
				  <!-- ============================ --> 
				</div>
			  </div>
		  	<!-- end slide -->
		  </div>
		</div>		
		<div class="row">		  
		  <div class="col-xs-12 col-md-12"> 
			<!-- main -->

			


			<?php include "controller/frontend/controller_hotproduct.php"; ?>
			
			<div class="row">		  
				<div class="col-xs-12 col-md-12">
				<img src="public/frontend/images/adv1.jpg" class="img-thumbnail">
				</div>
			</div>
			
			<?php include "controller/frontend/controller_newproduct.php"; ?>
			<!-- end main --> 
		  </div>
		</div>
		<!-- adv -->
		<div class="widebanner"> <a href="#"><img src="public/frontend/100/047/633/themes/517833/assets/widebanner1.jpg?1481775169361" alt="#" class="img-responsive"></a> </div>
		<!-- end adv --> 

	  </div>
	</div>
	<div class="privacy">
	  <div class="container">
		<div class="row">
		  <div class="col-xs-12 col-sm-4">
			<div class="image"> <img src="public/frontend/100/047/633/themes/517833/assets/ico-service-1221b.png?1481775169361" alt="Giao hàng miễn phí" title="Giao hàng miễn phí" class="img-responsive"> </div>
			<div class="info">
			  <h3>Free shipping</h3>
			  <p>Free delivery within the city Hanoi</p>
			</div>
		  </div>
		  <div class="col-xs-12 col-sm-4">
			<div class="image"> <img src="public/frontend/100/047/633/themes/517833/assets/ico-service-2221b.png?1481775169361" class="img-responsive" alt="Khuyến mại" title="Khuyến mại"> </div>
			<div class="info">
			  <h3>Promotion</h3>
			  <p>Product promotion if the order is over 1,000,000 VND</p>
			</div>
		  </div>
		  <div class="col-xs-12 col-sm-4">
			<div class="image"> <img src="public/frontend/100/047/633/themes/517833/assets/ico-service-3221b.png?1481775169361" class="img-responsive" alt="Hoàn trả lại tiền" title="Hoàn trả lại tiền"> </div>
			<div class="info">
			  <h3>Refund of money</h3>
			  <p>If the product does not guarantee the quality or product is not properly described</p>
			</div>
		  </div>
		</div>
	  </div>
	</div>
	<footer id="footer">
	  <div class="top-footer">
		<div class="container">
		  <div class="row">
			<div class="col-xs-12 col-sm-3">
			  <h3>About us</h3>
			  <ul class="list-unstyled">
				<li><a href="index.html">Home</a></li>
				<li><a href="gioi-thieu">Introduction</a></li>
				<li><a href="tin-tuc">News</a></li>
				<li><a href="gioi-thieu">Contact</a></li>
			  </ul>
			</div>
			<div class="col-xs-12 col-sm-3">
			  <h3>Guide</h3>
			  <ul class="list-unstyled">
				<li><a href="huo-ng-da-n-mua-ha-ng">Shopping guide</a></li>
				<li><a href="huong-dan">Delivery and payment</a></li>
				<li><a href="do-i-tra-va-ba-o-ha-nh">Change and warranty</a></li>
				<li><a href="account/register">Sign up</a></li>
			  </ul>
			</div>
			<div class="col-xs-12 col-sm-3">
			  <h3>Policy</h3>
			  <ul class="list-unstyled">
				<li><a href="chinh-sach">Payment policy</a></li>
				<li><a href="chi-nh-sa-ch-va-n-chuye-n">Shipping policy</a></li>
				<li><a href="chi-nh-sa-ch-do-i-tra">Return policy</a></li>
				<li><a href="chi-nh-sa-ch-ba-o-ha-nh">Warranty Policy</a></li>
			  </ul>
			</div>
			<div class="col-xs-12 col-sm-3">
			  <h3>Rules</h3>
			  <ul class="list-unstyled">
				<li><a href="dieu-khoan">Terms of use</a></li>
				<li><a href="die-u-khoa-n-giao-di-ch">Trading terms</a></li>
				<li><a href="di-ch-vu-tie-n-i-ch">Covenient service</a></li>
				<li><a href="quye-n-so-hu-u-tri-tue">Intellectual property rights</a></li>
			  </ul>
			</div>
		  </div>
		  <div class="payments-method"> <img src="public/frontend/100/047/633/themes/517833/assets/payments-method221b.png?1481775169361" alt="Phương thức thanh toán" title="Phương thức thanh toán"> </div>
		</div>
	  </div>
	  <div class="bottom-footer">
		<div class="container">
		  <div class="row">
			<div class="col-xs-12 col-sm-5"> © Copyright belongs to Avent Team</div>
			<div class="col-xs-12 col-sm-7">
			  <ul class="list-unstyled">
				<li><a href="index.html">Home</a></li>
				<li><a href="gioi-thieu">Introduction</a></li>
				<li><a href="tin-tuc">News</a></li>
				<li><a href="lien-he">Contact</a></li>
			  </ul>
			</div>
		  </div>
		</div>
	  </div>
	</footer>
	<script src='public/frontend/100/047/633/themes/517833/assets/owl.carousel.min221b.js?1481775169361' type='text/javascript'></script> 
	<script src='public/frontend/100/047/633/themes/517833/assets/responsive-menu221b.js?1481775169361' type='text/javascript'></script> 
	<script src='public/frontend/100/047/633/themes/517833/assets/elevate-zoom221b.js?1481775169361' type='text/javascript'></script> 
	<script src='public/frontend/100/047/633/themes/517833/assets/main221b.js?1481775169361' type='text/javascript'></script> 
	<script src='public/frontend/100/047/633/themes/517833/assets/ajax-cart221b.js?1481775169361' type='text/javascript'></script>
	<div class="ajax-error-modal modal">
	  <div class="modal-inner">
		<div class="ajax-error-title">Error</div>
		<div class="ajax-error-message"></div>
	  </div>
	</div>
	<div class="ajax-success-modal modal">
	  <div class="overlay"></div>
	  <div class="content col-xs-12">
		<div class="ajax-left"> <img class="ajax-product-image" alt="&nbsp;" src="#" style="max-width:65px; max-height:100px"/> </div>
		<div class="ajax-right">
		  <p class="ajax-product-title"></p>
		  <p class="success-message btn-go-to-cart"><span style="color:#789629">&#10004;</span>Has been added to the cart.</p>
		  <div class="actions">
			<button class="button" onclick="window.location='cart'">Go to shopping cart</button>
			<button class="button" onclick="window.location='checkout'">Payment</button>
		  </div>
		</div>
		<a href="javascript:void(0)" class="close-modal"><i class="fa fa-times"></i></a> </div>
	</div>
	</body>
	</html>