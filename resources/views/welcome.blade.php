<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>TEST KASPIN</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="{{ url('/') }}/web/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="{{ url('/') }}/web/assets/plugins/font-awesome/css/all.min.css" rel="stylesheet" />
	<link href="{{ url('/') }}/web/assets/plugins/animate/animate.min.css" rel="stylesheet" />
	<link href="{{ url('/') }}/web/assets/css/e-commerce/style.min.css" rel="stylesheet" />
	<link href="{{ url('/') }}/web/assets/css/e-commerce/style-responsive.min.css" rel="stylesheet" />
	<link href="{{ url('/') }}/web/assets/css/e-commerce/theme/default.css" id="theme" rel="stylesheet" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{ url('/') }}/web/assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body>
	<!-- BEGIN #page-container -->
	<div id="page-container" class="fade">
		<!-- BEGIN #top-nav -->
		<div id="top-nav" class="top-nav">
			<!-- BEGIN container -->
			<div class="container">
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li class="dropdown dropdown-hover">
							<a href="#" data-toggle="dropdown"><img src="../assets/img/flag/flag-english.png" class="flag-img" alt="" /> English <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#" class="dropdown-item"><img src="../assets/img/flag/flag-english.png" class="flag-img" alt="" /> English</a></li>
								<li><a href="#" class="dropdown-item"><img src="../assets/img/flag/flag-german.png" class="flag-img" alt="" /> German</a></li>
								<li><a href="#" class="dropdown-item"><img src="../assets/img/flag/flag-spanish.png" class="flag-img" alt="" /> Spanish</a></li>
								<li><a href="#" class="dropdown-item"><img src="../assets/img/flag/flag-french.png" class="flag-img" alt="" /> French</a></li>
								<li><a href="#" class="dropdown-item"><img src="../assets/img/flag/flag-chinese.png" class="flag-img" alt="" /> Chinese</a></li>
							</ul>
						</li>
						<li><a href="#">Customer Care</a></li>
						<li><a href="#">Order Tracker</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">Career</a></li>
						<li><a href="#">Our Forum</a></li>
						<li><a href="#">Newsletter</a></li>
						<li><a href="#"><i class="fab fa-facebook-f f-s-14"></i></a></li>
						<li><a href="#"><i class="fab fa-twitter f-s-14"></i></a></li>
						<li><a href="#"><i class="fab fa-instagram f-s-14"></i></a></li>
						<li><a href="#"><i class="fab fa-dribbble f-s-14"></i></a></li>
						<li><a href="#"><i class="fab fa-google f-s-14"></i></a></li>
					</ul>
				</div>
			</div>
			<!-- END container -->
		</div>
		<!-- END #top-nav -->
		<!-- BEGIN #header -->
		<div id="header" class="header">
			<!-- BEGIN container -->
			<div class="container">
				<!-- BEGIN header-container -->
				<div class="header-container">
					<!-- BEGIN navbar-header -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="header-logo">
							<a href="#">
								
								<span>KASIR</span>PINTAR
								<small> </small>
							</a>
						</div>
					</div>
					<!-- END navbar-header -->
					<!-- BEGIN header-nav -->
					<div class="header-nav">
						<div class=" collapse navbar-collapse" id="navbar-collapse">
							<ul class="nav">
								<li class="active"><a href="{{ route('welcome') }}">Home</a></li>
								<li><a href="{{ route('mycv') }}">My CV</a></li>
								<li class="dropdown dropdown-hover">
									<a href="#" data-toggle="dropdown">
										Accessories 
										<b class="caret"></b>
										<span class="arrow top"></span>
									</a>
									<div class="dropdown-menu">
										
									</div>
								</li>
								<li><a href="product.html">New Arrival</a></li>
								<li class="dropdown dropdown-hover">
									<a href="#" data-toggle="dropdown">
										Pages
										<b class="caret"></b>
										<span class="arrow top"></span>
									</a>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="index.html">Home (Default)</a>
										<a class="dropdown-item" href="index_fixed_header.html">Home (Fixed Header)</a>
										
									</div>
								</li>
								<li class="dropdown dropdown-hover">
									<a href="#" data-toggle="dropdown">
										<i class="fa fa-search search-btn"></i>
										<span class="arrow top"></span>
									</a>
									<div class="dropdown-menu p-15">
										<form action="search_results.html" method="POST" name="search_form">
											<div class="input-group">
												<input type="text" placeholder="Search" class="form-control bg-silver-lighter" />
												<div class="input-group-append">
													<button class="btn btn-inverse" type="submit"><i class="fa fa-search"></i></button>
												</div>
											</div>
										</form>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<!-- END header-nav -->
					<!-- BEGIN header-nav -->
					<div class="header-nav">
						<ul class="nav pull-right">
							<li class="dropdown dropdown-hover">
								<a href="#" class="header-cart" data-toggle="dropdown">
									<i class="fa fa-shopping-bag"></i>
									<span class="total">2</span>
									<span class="arrow top"></span>
								</a>
								<div class="dropdown-menu dropdown-menu-cart p-0">
									<div class="cart-header">
										<h4 class="cart-title">Shopping Bag (1) </h4>
									</div>
									<div class="cart-body">
										
									</div>
									<div class="cart-footer">
										<div class="row row-space-10">
											<div class="col-xs-6">
												<a href="checkout_cart.html" class="btn btn-default btn-block">View Cart</a>
											</div>
											<div class="col-xs-6">
												<a href="checkout_cart.html" class="btn btn-inverse btn-block">Checkout</a>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<a href="{{ route('login') }}">
									<img src="{{ url('/') }}/web/assets/img/user/user-1.jpg" class="user-img" alt="" /> 
									<span class="d-none d-xl-inline">Login</span>
								</a>
							</li>
						</ul>
					</div>
					<!-- END header-nav -->
				</div>
				<!-- END header-container -->
			</div>
			<!-- END container -->
		</div>
		<!-- END #header -->
		
		<!-- BEGIN #slider -->
		<div id="slider" class="section-container p-0 bg-black-darker">
			<!-- BEGIN carousel -->
			<div id="main-carousel" class="carousel slide" data-ride="carousel">
				<!-- BEGIN carousel-inner -->
				<div class="carousel-inner">
					<!-- BEGIN item -->
					@foreach($data as $isi)
					<div class="carousel-item <?php if($isi->id==1){?>active<?php }?>" data-paroller="true" data-paroller-factor="0.3" data-paroller-factor-sm="0.01" data-paroller-factor-xs="0.01" style="background: url(../assets/img/slider/slider-1-cover.jpg) center 0 / cover no-repeat;">
						<div class="container">
							<img src="../assets/img/slider/slider-1-product.png" class="product-img right bottom fadeInRight animated" alt="" />
						</div>
						<div class="carousel-caption carousel-caption-left">
							<div class="container">
								<h3 class="title m-b-5 fadeInLeftBig animated">{{$isi->nama}}</h3>
								<p class="m-b-15 fadeInLeftBig animated">{{$isi->deskripsi}}.</p>
								<div class="price m-b-30 fadeInLeftBig animated"><small>from</small> <span>{{$isi->harga}}</span></div>
								<a href="product_detail.html" class="btn btn-outline btn-lg fadeInLeftBig animated">Buy Now</a>
							</div>
						</div>
					</div>
					@endforeach
					<!-- END item -->
					<!-- BEGIN item -->
					
					<!-- END item -->
				</div>
				<!-- END carousel-inner -->
				<a class="carousel-control-prev" href="#main-carousel" data-slide="prev"> 
				<i class="fa fa-angle-left"></i> 
				</a>
				<a class="carousel-control-next" href="#main-carousel" data-slide="next"> 
				<i class="fa fa-angle-right"></i> 
				</a>
			</div>
			<!-- END carousel -->
		</div>
		<!-- END #slider -->
		
		<!-- BEGIN #promotions -->
		
		<!-- END #promotions -->
		
		<!-- BEGIN #trending-items -->
		<div id="trending-items" class="section-container bg-silver">
			<!-- BEGIN container -->
			<div class="container">
				<!-- BEGIN section-title -->
				<h4 class="section-title clearfix">
					<a href="#" class="pull-right m-l-5"><i class="fa fa-angle-right f-s-18"></i></a>
					<a href="#" class="pull-right"><i class="fa fa-angle-left f-s-18"></i></a>
					Trending Items
					<small>Shop and get your favourite items at amazing prices!</small>
				</h4>
				<!-- END section-title -->
				<!-- BEGIN row -->
				<div class="row row-space-10">
					<!-- BEGIN col-2 -->
					@foreach($data as $isi2)
					<div class="col-md-2 col-sm-4">
						<!-- BEGIN item -->
						<div class="item item-thumbnail">
							<a href="product_detail.html" class="item-image">
								<img src="../assets/img/product/product-iphone.png" alt="" />
								<div class="discount">15% OFF</div>
							</a>
							<div class="item-info">
								<h4 class="item-title">
									<a href="product_detail.html">{{$isi2->nama}}<br />16GB</a>
								</h4>
								<p class="item-desc">{{$isi2->deskripsi}}</p>
								<div class="item-price">{{$isi2->harga}}</div>
								<div class="item-discount-price">739.000</div>
							</div>
						</div>
						<!-- END item -->
					</div>
					@endforeach
					<!-- END col-2 -->
					<!-- BEGIN col-2 -->
					
					<!-- END col-2 -->
					<!-- BEGIN col-2 -->
					
					<!-- END col-2 -->
				</div>
				<!-- END row -->
			</div>
			<!-- END container -->
		</div>
		<!-- END #trending-items -->
		
		<!-- BEGIN #mobile-list -->
		
		<!-- END #mobile-list -->
		
		<!-- BEGIN #tablet-list -->
		
		<!-- END #tablet-list -->
		
		<!-- BEGIN #policy -->
		<div id="policy" class="section-container p-t-30 p-b-30">
			<!-- BEGIN container -->
			<div class="container">
				<!-- BEGIN row -->
				<div class="row">
					<!-- BEGIN col-4 -->
					<div class="col-md-4 col-sm-4">
						<!-- BEGIN policy -->
						<div class="policy">
							<div class="policy-icon"><i class="fa fa-truck"></i></div>
							<div class="policy-info">
								<h4>Free Delivery Over $100</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
						<!-- END policy -->
					</div>
					<!-- END col-4 -->
					<!-- BEGIN col-4 -->
					<div class="col-md-4 col-sm-4">
						<!-- BEGIN policy -->
						<div class="policy">
							<div class="policy-icon"><i class="fa fa-shield"></i></div>
							<div class="policy-info">
								<h4>1 Year Warranty For Phones</h4>
								<p>Cras laoreet urna id dui malesuada gravida. <br />Duis a lobortis dui.</p>
							</div>
						</div>
						<!-- END policy -->
					</div>
					<!-- END col-4 -->
					<!-- BEGIN col-4 -->
					<div class="col-md-4 col-sm-4">
						<!-- BEGIN policy -->
						<div class="policy">
							<div class="policy-icon"><i class="fa fa-user-md"></i></div>
							<div class="policy-info">
								<h4>6 Month Warranty For Accessories</h4>
								<p>Fusce ut euismod orci. Morbi auctor, sapien non eleifend iaculis.</p>
							</div>
						</div>
						<!-- END policy -->
					</div>
					<!-- END col-4 -->
				</div>
				<!-- END row -->
			</div>
			<!-- END container -->
		</div>
		<!-- END #policy -->
		
		<!-- BEGIN #subscribe -->
		<div id="subscribe" class="section-container bg-silver p-t-30 p-b-30">
			<!-- BEGIN container -->
			<div class="container">
				<!-- BEGIN row -->
				<div class="row">
					<!-- BEGIN col-6 -->
					<div class="col-md-6 col-sm-6">
						<!-- BEGIN subscription -->
						<div class="subscription">
							<div class="subscription-intro">
								<h4> LET'S STAY IN TOUCH</h4>
								<p>Get updates on sales specials and more</p>
							</div>
							<div class="subscription-form">
								<form name="subscription_form" action="index.html" method="POST">
									<div class="input-group">
										<input type="text" class="form-control" name="email" placeholder="Enter Email Address" />
										<div class="input-group-append">
											<button type="submit" class="btn btn-inverse"><i class="fa fa-angle-right"></i></button>
										</div>
									</div>
								</form>
							</div>
						</div>
						<!-- END subscription -->
					</div>
					<!-- END col-6 -->
					<!-- BEGIN col-6 -->
					<div class="col-md-6 col-sm-6">
						<!-- BEGIN social -->
						<div class="social">
							<div class="social-intro">
								<h4>FOLLOW US</h4>
								<p>We want to hear from you!</p>
							</div>
							<div class="social-list">
								<a href="#"><i class="fab fa-facebook"></i></a>
								<a href="#"><i class="fab fa-twitter"></i></a>
								<a href="#"><i class="fab fa-instagram"></i></a>
								<a href="#"><i class="fab fa-dribbble"></i></a>
								<a href="#"><i class="fab fa-google-plus"></i></a>
							</div>
						</div>
						<!-- END social -->
					</div>
					<!-- END col-6 -->
				</div>
				<!-- END row -->
			</div>
			<!-- END container -->
		</div>
		<!-- END #subscribe -->
		
		<!-- BEGIN #footer -->
		<div id="footer" class="footer">
			<!-- BEGIN container -->
			<div class="container">
				<!-- BEGIN row -->
				<div class="row">
					<!-- BEGIN col-3 -->
					<div class="col-md-3">
						<h4 class="footer-header">ABOUT US</h4>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec tristique dolor, ac efficitur velit. Nulla lobortis tempus convallis. Nulla aliquam lectus eu porta pulvinar. Mauris semper justo erat. 
						</p>
						<p>
							Vestibulum porttitor lorem et vestibulum pharetra. Phasellus sit amet mi congue, hendrerit mi ut, dignissim eros.
						</p>
					</div>
					<!-- END col-3 -->
					<!-- BEGIN col-3 -->
					<div class="col-md-3">
						<h4 class="footer-header">RELATED LINKS</h4>
						<ul class="fa-ul">
							<li><i class="fa fa-li fa-angle-right"></i> <a href="#">Shopping Help</a></li>
							<li><i class="fa fa-li fa-angle-right"></i> <a href="#">Terms of Use</a></li>
							<li><i class="fa fa-li fa-angle-right"></i> <a href="#">Contact Us</a></li>
							<li><i class="fa fa-li fa-angle-right"></i> <a href="#">Careers</a></li>
							<li><i class="fa fa-li fa-angle-right"></i> <a href="#">Payment Method</a></li>
							<li><i class="fa fa-li fa-angle-right"></i> <a href="#">Sales & Refund</a></li>
							<li><i class="fa fa-li fa-angle-right"></i> <a href="#">Sitemap</a></li>
							<li><i class="fa fa-li fa-angle-right"></i> <a href="#">Privacy & Policy</a></li>
						</ul>
					</div>
					<!-- END col-3 -->
					<!-- BEGIN col-3 -->
					<div class="col-md-3">
						<h4 class="footer-header">LATEST PRODUCT</h4>
						<ul class="list-unstyled list-product">
							<li>
								<div class="image">
									<img src="../assets/img/product/product-iphone-6s.jpg" alt="" />
								</div>
								<div class="info">
									<h4 class="info-title">Iphone 6s</h4>
									<div class="price">$1200.00</div>
								</div>
							</li>
							<li>
								<div class="image">
									<img src="../assets/img/product/product-galaxy-s6.jpg" alt="" />
								</div>
								<div class="info">
									<h4 class="info-title">Samsung Galaxy s7</h4>
									<div class="price">$850.00</div>
								</div>
							</li>
							<li>
								<div class="image">
									<img src="../assets/img/product/product-ipad-pro.jpg" alt="" />
								</div>
								<div class="info">
									<h4 class="info-title">Ipad Pro</h4>
									<div class="price">$800.00</div>
								</div>
							</li>
							<li>
								<div class="image">
									<img src="../assets/img/product/product-galaxy-note5.jpg" alt="" />
								</div>
								<div class="info">
									<h4 class="info-title">Samsung Galaxy Note 5</h4>
									<div class="price">$1200.00</div>
								</div>
							</li>
						</ul>
					</div>
					<!-- END col-3 -->
					<!-- BEGIN col-3 -->
					<div class="col-md-3">
						<h4 class="footer-header">OUR CONTACT</h4>
						<address>
							<strong>Twitter, Inc.</strong><br />
							1355 Market Street, Suite 900<br />
							San Francisco, CA 94103<br /><br />
							<abbr title="Phone">Phone:</abbr> (123) 456-7890<br />
							<abbr title="Fax">Fax:</abbr> (123) 456-7891<br />
							<abbr title="Email">Email:</abbr> <a href="mailto:sales@myshop.com">sales@myshop.com</a><br />
							<abbr title="Skype">Skype:</abbr> <a href="skype:myshop">myshop</a>
						</address>
					</div>
					<!-- END col-3 -->
				</div>
				<!-- END row -->
			</div>
			<!-- END container -->
		</div>
		<!-- END #footer -->
		
		<!-- BEGIN #footer-copyright -->
		<div id="footer-copyright" class="footer-copyright">
			<!-- BEGIN container -->
			<div class="container">
				<div class="payment-method">
					<img src="../assets/img/payment/payment-method.png" alt="" />
				</div>
				<div class="copyright">
					Copyright &copy; 2019 SeanTheme. All rights reserved.
				</div>
			</div>
			<!-- END container -->
		</div>
		<!-- END #footer-copyright -->
	</div>
	<!-- END #page-container -->

	<!-- begin theme-panel -->
	
	<!-- end theme-panel -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{ url('/') }}/web/assets/plugins/jquery/jquery-3.3.1.min.js"></script>
	<script src="{{ url('/') }}/web/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!--[if lt IE 9]>
		<script src="assets/crossbrowserjs/html5shiv.js"></script>
		<script src="assets/crossbrowserjs/respond.min.js"></script>
		<script src="assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="{{ url('/') }}/web/assets/plugins/js-cookie/js.cookie.js"></script>
	<script src="{{ url('/') }}/web/assets/plugins/paroller/jquery.paroller.min.js"></script>
	<script src="{{ url('/') }}/web/assets/js/e-commerce/apps.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<script>
		$(document).ready(function() {
			App.init();
		});
	</script>
</body>
</html>
