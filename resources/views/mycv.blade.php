<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>MY CV - TEST KASPIN</title>
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
								<li ><a href="{{ route('welcome') }}">Home</a></li>
								<li class="active"><a href="{{ route('mycv') }}">My CV</a></li>
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
		<div id="product" class="section-container p-t-20">
			<!-- BEGIN container -->
			<div class="container">
				<!-- BEGIN breadcrumb -->
				<ul class="breadcrumb m-b-10 f-s-12">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">MyCV</a></li>
					
				</ul>
				<!-- END breadcrumb -->
				<!-- BEGIN product -->
				<div class="product">
					<!-- BEGIN product-detail -->
					<div class="product-detail">
						<!-- BEGIN product-image -->
						<div class="product-image">
							<!-- BEGIN product-thumbnail -->
							
							<!-- END product-thumbnail -->
							<!-- BEGIN product-main-image -->
							<div class="product-main-image" data-id="main-image">
								<img src="{{ url('/') }}/web/assets/img/foto.jpg" alt="" />
							</div>
							<!-- END product-main-image -->
						</div>
						<!-- END product-image -->
						<!-- BEGIN product-info -->
						<div class="product-info">
							<!-- BEGIN product-info-header -->
							<div class="product-info-header">
								<h1 class="product-title"><span class="label label-success">Freelancer</span> AHMAD ROBBI AL JAMAL, S.ST</h1>
								
							</div>
							<!-- END product-info-header -->
							<!-- BEGIN product-warranty -->
							<div class="product-warranty">
								
								<div><b>More 5 Year</b> Work experience as a programmer </div>
							</div>
							<!-- END product-warranty -->
							<!-- BEGIN product-info-list -->
							<ul class="product-info-list">
								<li><i class="fa fa-circle"></i> Wall Dashboard Apllication in PT INFOMEDIA NUSANTARA(Magang-2012 )</li>
								<li><i class="fa fa-circle"></i> Web Admin AKAS NNR (Freelance-2012)</li>
								<li><i class="fa fa-circle"></i> Jquery Mobile Management Trafo PT PLN Ngantang Malang(Riset Tugas Akhir-2013)</li>
								<li><i class="fa fa-circle"></i> Antarmuka Analisa Data Warehouse Berbasis Web(SIM Akademik PENS-Tugas Akhir-2013)</li>
								<li><i class="fa fa-circle"></i> E-Jurnalism Media Center HUMAS POLDA JATIM(Freelance-2013)</li>
								<li><i class="fa fa-circle"></i> Website Kementrian Pekerjaan Umum BBWS Brantas(Freelance-2014)</li>
								<li><i class="fa fa-circle"></i> Karyawan PKWT di PT. Pelabuhan Indonesia III (Persero)(2016)</li>
								<li><i class="fa fa-circle"></i> Aplikasi Renmin dan Website Forum LLAJ Jatim(Freelance-2018)</li>
								<li><i class="fa fa-circle"></i> Aplikasi Bengkel Ditlantas Polda Jatim(Freelance-2020)</li>
								<li><i class="fa fa-circle"></i> Website Portal Yayasan Ibnu Katsir(Freelance-2021)</li>
								<li><i class="fa fa-circle"></i> Aplikasi Management User Audience PT MDMEDIA(Freelance-2021)</li>
							
							</ul>
							<!-- END product-info-list -->
							<!-- BEGIN product-social -->
							<div class="product-social">
								<ul>
									<li><a href="javascript:;" class="facebook" data-toggle="tooltip" data-trigger="hover" data-title="Facebook" data-placement="top"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="javascript:;" class="twitter" data-toggle="tooltip" data-trigger="hover" data-title="Twitter" data-placement="top"><i class="fab fa-twitter"></i></a></li>
									<li><a href="javascript:;" class="google-plus" data-toggle="tooltip" data-trigger="hover" data-title="Google Plus" data-placement="top"><i class="fab fa-google-plus-g"></i></a></li>
									<li><a href="javascript:;" class="whatsapp" data-toggle="tooltip" data-trigger="hover" data-title="Whatsapp" data-placement="top"><i class="fab fa-whatsapp"></i></a></li>
									<li><a href="javascript:;" class="tumblr" data-toggle="tooltip" data-trigger="hover" data-title="Tumblr" data-placement="top"><i class="fab fa-tumblr"></i></a></li>
								</ul>
							</div>
							<!-- END product-social -->
							<!-- BEGIN product-purchase-container -->
							
							<!-- END product-purchase-container -->
						</div>
						<!-- END product-info -->
					</div>
					<!-- END product-detail -->
					<!-- BEGIN product-tab -->
					<div class="product-tab">
						<!-- BEGIN #product-tab -->
						<ul id="product-tab" class="nav nav-tabs">
						<li class="nav-item"><a class="nav-link active" href="#biodata-diri" data-toggle="tab">Biodata Diri</a></li>
							<li class="nav-item"><a class="nav-link " href="#product-desc" data-toggle="tab">Pelatihan</a></li>
							<li class="nav-item"><a class="nav-link" href="#product-info" data-toggle="tab">Pendidikan</a></li>
							<li class="nav-item"><a class="nav-link" href="#product-reviews" data-toggle="tab">Skill / Bahasa / Organisasi</a></li>
						</ul>
						<!-- END #product-tab -->
						<!-- BEGIN #product-tab-content -->
						<div id="product-tab-content" class="tab-content">
							<!-- BEGIN #product-desc -->
							<div class="tab-pane active show" id="biodata-diri">
								<!-- BEGIN table-responsive -->
								<div class="table-responsive">
									<!-- BEGIN table-product -->
									<table class="table table-product table-striped">
										<thead>
											<tr>
												<th></th>
												
												<th></th>
												<th></th>
												
												<th></th>
												
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="field">Nama</td>
												<td>
													Ahmad Robbi Al Jamal<br />
													<br />
													
												</td>
												
												<td>
											
												
												</td>
											</tr>
											<tr>
												<td class="field">Tempat / Tanggal Lahir</td>
												<td>
													Tuban, 11-Juni-1990<br />
													<br />
													
												</td>
												
												<td>
											
												
												</td>
											</tr>
											<tr>
												<td class="field">Jenis Kelamin</td>
												<td>
													Laki - laki<br />
													<br />
													
												</td>
												
												<td>
											
												
												</td>
											</tr>
											<tr>
												<td class="field">Alamat</td>
												<td>
													Jl. Ahmad Yani No 43 Rengel Tuban RT 003/ RW 003<br />
													<br />
													
												</td>
												
												<td>
											
												
												</td>
											</tr>
											<tr>
												<td class="field">Nomor Telepon</td>
												<td>
													085852538431<br />
													<br />
													
												</td>
												
												<td>
											
												
												</td>
											</tr>
											<tr>
												<td class="field">Status </td>
												<td>
													Belum Kawin<br />
													<br />
													
												</td>
												
												<td>
											
												
												</td>
											</tr>
											<tr>
												<td class="field">Agama</td>
												<td>
													Islam<br />
													<br />
													
												</td>
												
												<td>
											
												
												</td>
											</tr>
											<tr>
												<td class="field">IPK</td>
												<td>
													3.29<br />
													<br />
													
												</td>
												
												<td>
											
												
												</td>
											</tr>
											
									
											
										</tbody>
									</table>
									<!-- END table-product -->
								</div>
								<!-- END table-responsive -->
							</div>
							<div class="tab-pane fade" id="product-desc">
								<!-- BEGIN product-desc -->
								<div class="table-responsive">
									<!-- BEGIN table-product -->
									<table class="table table-product table-striped">
										<thead>
											<tr>
												<th></th>
												
												<th>Tahun</th>
												<th>Pelatihan</th>
											
												
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="field">Database</td>
												<td>
													2011<br />
													<br />
													
												</td>
												<td>
												Oracle Database 10g : Administration Workshop I<br />
												
												</td>
												<td>
											
												
												</td>
											</tr>
											<tr>
												<td class="field">Hardware</td>
												<td>
													2009<br />
													<br />
													
												</td>
												<td>
												Workshop Perakitan Komputer
												</td>
												<td>
											
												
												</td>
											</tr>
											<tr>
											<td class="field">Framework</td>
												<td>
													2010<br />
													<br />
													
												</td>
												<td>
												Workshop Web Prorammer (Framework Codeigniter)<br />
												
												</td>
												
											</tr>
											
											
											
										</tbody>
									</table>
									<!-- END table-product -->
								</div>
								<!-- END product-desc -->
								<!-- BEGIN product-desc -->
								
								<!-- END product-desc -->
							</div>
							<!-- END #product-desc -->
							<!-- BEGIN #product-info -->
							<div class="tab-pane fade" id="product-info">
								<!-- BEGIN table-responsive -->
								<div class="table-responsive">
									<!-- BEGIN table-product -->
									<table class="table table-product table-striped">
										<thead>
											<tr>
												<th></th>
												
												<th>Tahun</th>
												<th>Jenjang</th>
												
												<th>Jurusan</th>
												
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="field">SDN Rengel 3 (Tuban)</td>
												<td>
													1997-2003<br />
													<br />
													
												</td>
												<td>
												SD (Sekolah Dasar)<br />
												
												</td>
												<td>
											
												
												</td>
											</tr>
											<tr>
												<td class="field">SMP Negeri 1 Rengel (Tuban)</td>
												<td>
													2003-2006<br />
													<br />
													
												</td>
												<td>
												SMP (Sekolah Menengah Pertama)<br />
												
												</td>
												<td>
											
												
												</td>
											</tr>
											<tr>
											<td class="field">SMA Negeri 1 Tuban (Tuban)</td>
												<td>
													2006-2009<br />
													<br />
													
												</td>
												<td>
												SMA (Sekolah Menengah Atas)<br />
												
												</td>
												<td>
												Ilmu Pengetahuan Alam (IPA)
												
												</td>
											</tr>
											<tr>
											<td class="field">Politeknik Elektronika Negeri Surabaya (Suarabaya)</td>
												<td>
													2009-2013<br />
													<br />
													
												</td>
												<td>
												D4 (Diploma IV) / Sarjana<br />
												
												</td>
												<td>
												Teknik Informatika
												
												</td>
											</tr>
											
										</tbody>
									</table>
									<!-- END table-product -->
								</div>
								<!-- END table-responsive -->
							</div>
							<!-- END #product-info -->
							<!-- BEGIN #product-reviews -->
							<div class="tab-pane fade" id="product-reviews">
								<!-- BEGIN row -->
								<div class="table-responsive">
									<!-- BEGIN table-product -->
									<table class="table table-product table-striped">
										<thead>
											<tr>
												<th></th>
												
												<th>Jenis</th>
												<th>Deskripsi</th>
											
												
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="field">Platform Independent</td>
												<td>
													Computer Skill<br />
													<br />
													
												</td>
												<td>
												HTML, Javascript, CSS, XML<br />
												
												</td>
												<td>
											
												
												</td>
											</tr>
											<tr>
												<td class="field">Programming Language</td>
												<td>
													Computer Skill<br />
													<br />
													
												</td>
												<td>
												PHP, FLUTTER, .NET , XML, HTML, PL/SQL, VB, Android Java<br />
												
												</td>
												<td>
											
												
												</td>
											</tr>
											<tr>
											<td class="field">PHP Framework</td>
												<td>
													Computer Skill<br />
													<br />
													
												</td>
												<td>
												Laravel, Yii, Codeigniter<br />
												
												</td>
												
											</tr>
											<tr>
											<td class="field">Database</td>
												<td>
													Computer Skill<br />
													<br />
													
												</td>
												<td>
												Oracle 10g, MS Access, MYSQL, SQL Server<br />
												
												</td>
												
											</tr>
											<tr>
											<td class="field">Web and mobile Designing,  Editing Software’s</td>
												<td>
													Computer Skill<br />
													<br />
													
												</td>
												<td>
												Eclips for PHP,Visual Code, Visual Studio, Android studio, Dreamweaver, Github <br />
												
												</td>
												
											</tr>
											<tr>
											<td class="field">English Language</td>
												<td>
													Language Skill<br />
													<br />
													
												</td>
												<td>
												Everage<br />
												
												</td>
												
											</tr>
											<tr>
											<td class="field">Hima IT PENS-ITS</td>
												<td>
													Organization<br />
													<br />
													
												</td>
												<td>
												Member<br />
												
												</td>
												
											</tr>
											<tr>
											<td class="field">Pecinta Alam ITS</td>
												<td>
													Organization<br />
													<br />
													
												</td>
												<td>
												Member<br />
												
												</td>
												
											</tr>
											
										</tbody>
									</table>
									<!-- END table-product -->
								</div>
								<!-- END row -->
							</div>
							<!-- END #product-reviews -->
						</div>
						<!-- END #product-tab-content -->
					</div>
					<!-- END product-tab -->
				</div>
				<!-- END product -->
				<!-- BEGIN similar-product -->
		
				
				<!-- END similar-product -->
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
