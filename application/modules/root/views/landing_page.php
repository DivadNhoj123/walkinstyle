<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="<?= base_url('assets/landingTemplate'); ?>/img/logo.svg">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Walk N Style Shop</title>
	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="<?= base_url('assets/landingTemplate'); ?>/css/linearicons.css">
	<link rel="stylesheet" href="<?= base_url('assets/landingTemplate'); ?>/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/landingTemplate'); ?>/css/themify-icons.css">
	<link rel="stylesheet" href="<?= base_url('assets/landingTemplate'); ?>/css/bootstrap.css">
	<link rel="stylesheet" href="<?= base_url('assets/landingTemplate'); ?>/css/owl.carousel.css">
	<link rel="stylesheet" href="<?= base_url('assets/landingTemplate'); ?>/css/nice-select.css">
	<link rel="stylesheet" href="<?= base_url('assets/landingTemplate'); ?>/css/nouislider.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/landingTemplate'); ?>/css/ion.rangeSlider.css" />
	<link rel="stylesheet" href="<?= base_url('assets/landingTemplate'); ?>/css/ion.rangeSlider.skinFlat.css" />
	<link rel="stylesheet" href="<?= base_url('assets/landingTemplate'); ?>/css/magnific-popup.css">
	<link rel="stylesheet" href="<?= base_url('assets/landingTemplate'); ?>/css/main.css">
</head>

<body>
	<!-- Start Header Area -->
	<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
							<li class="nav-item "><a class="nav-link" href="<?= base_url('root/shop'); ?>">Shop</a></li>
							<li class="nav-item"><a class="nav-link" data-toggle="modal" data-target="#login-modal">Login</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="nav-item"><a href="#" class="cart"><span class="ti-bag"></span></a></li>
							<li class="nav-item">
								<button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="search_input" id="search_input_box">
			<div class="container">
				<form class="d-flex justify-content-between">
					<input type="text" class="form-control" id="search_input" placeholder="Search Here">
					<button type="submit" class="btn"></button>
					<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
				</form>
			</div>
		</div>
	</header>
	<!-- End Header Area -->
	<?php $this->load->view('modals/login-modal.php'); ?>
	<div class="modal fade" id="register-modal">
		<div class="modal-dialog modal-lg">
			<div class="modal-body">
				<div class="modal-content">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-lg-12">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<i class="ti-close text-warning fw-bold"></i>
									</button>
									<h1 class="fw-bold text-center mt-5"> WALK <strong class="text-warning">N</strong> STYLE</h1>
									<div class="register_form_inner">
										<h3>Type your credentials</h3>
										<form class="login_form" action="<?= base_url('root/registration_process/') ?>" method="post">
											<div class="row">
												<div class="col-md-4">
													<div class=" form-group">
														<input type="text" class="form-control" placeholder="Firstname" name="fname" required>
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<input type="text" class="form-control" placeholder="Middlename" name="mi" required>
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<input type="text" class="form-control" placeholder="Lastname" name="lname" required>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class=" form-group">
														<input type="email" class="form-control" placeholder="Email" name="email" required>
													</div>
												</div>
												<div class="col-md-6">
													<div class=" form-group">
														<input type="number" class="form-control" placeholder="Phone" name="phone" required>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-12">
													<div class="form-group">
														<input type="text" class="form-control" placeholder="Address" name="address" required>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<input type="number" class="form-control" placeholder="Zipcode" name="zcode" required>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<input type="text" class="form-control" placeholder="Country" name="country" required>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<input type="password" class="form-control" placeholder="Password" name="password" required>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<input type="password" class="form-control" placeholder="Confirm password" name="re_pass" required>
													</div>
												</div>
											</div>
											<div class="col-md-12 form-group">
												<button type="submit" value="submit" class="primary-btn">register</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- start banner Area -->
	<section class="banner-area">
		<div class="container">
			<div class="row fullscreen align-items-center justify-content-start">
				<div class="col-lg-12">
					<!-- single-slide -->
					<div class="row single-slide align-items-center d-flex">
						<div class="col-lg-5 col-md-6">
							<div class="banner-content">
								<h1>Walk N Style <br>Collection!</h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
									dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
								<div class="add-bag d-flex align-items-center">
									<a class="add-btn" href=""><span class="lnr lnr-cross"></span></a>
									<span class="add-text text-uppercase">Shop Now</span>
								</div>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="banner-img">
								<img class="img-fluid" src="<?= base_url('assets/landingTemplate'); ?>/img/banner/banner-img.png" alt="">
							</div>
						</div>
					</div>
					<!-- single-slide -->
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- start features Area -->
	<section class="features-area section_gap">
		<div class="container">
			<div class="row features-inner">
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="<?= base_url('assets/landingTemplate'); ?>/img/features/f-icon1.png" alt="">
						</div>
						<h6>Free Delivery</h6>
						<p>Free Shipping on all order</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="<?= base_url('assets/landingTemplate'); ?>/img/features/f-icon2.png" alt="">
						</div>
						<h6>Return Policy</h6>
						<p>Free Shipping on all order</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="<?= base_url('assets/landingTemplate'); ?>/img/features/f-icon3.png" alt="">
						</div>
						<h6>24/7 Support</h6>
						<p>Free Shipping on all order</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="<?= base_url('assets/landingTemplate'); ?>/img/features/f-icon4.png" alt="">
						</div>
						<h6>Secure Payment</h6>
						<p>Free Shipping on all order</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end features Area -->

	<!-- start product Area -->
	<!-- end product Area -->

	<!-- start footer Area -->
	<footer class="footer-area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>About Us</h6>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore
							magna aliqua.
						</p>
					</div>
				</div>
				<div class="col-lg-4  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Newsletter</h6>
						<p>Stay update with our latest</p>
						<div class="" id="mc_embed_signup">

							<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">

								<div class="d-flex flex-row">

									<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">


									<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
									<div style="position: absolute; left: -5000px;">
										<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
									</div>

									<!-- <div class="col-lg-4 col-md-4">
												<button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
											</div>  -->
								</div>
								<div class="info"></div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget mail-chimp">
						<h6 class="mb-20">Instragram Feed</h6>
						<ul class="instafeed d-flex flex-wrap">
							<li><img src="img/i1.jpg" alt=""></li>
							<li><img src="img/i2.jpg" alt=""></li>
							<li><img src="img/i3.jpg" alt=""></li>
							<li><img src="img/i4.jpg" alt=""></li>
							<li><img src="img/i5.jpg" alt=""></li>
							<li><img src="img/i6.jpg" alt=""></li>
							<li><img src="img/i7.jpg" alt=""></li>
							<li><img src="img/i8.jpg" alt=""></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Follow Us</h6>
						<p>Let us be social</p>
						<div class="footer-social d-flex align-items-center">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
				<p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Copyright &copy;<script>
						document.write(new Date().getFullYear());
					</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</p>
			</div>
		</div>
	</footer>
	<!-- End footer Area -->

	<script src="<?= base_url('assets/landingTemplate'); ?>/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="<?= base_url('assets/landingTemplate'); ?>/js/vendor/bootstrap.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="<?= base_url('assets/landingTemplate'); ?>/js/jquery.nice-select.min.js"></script>
	<script src="<?= base_url('assets/landingTemplate'); ?>/js/jquery.sticky.js"></script>
	<script src="<?= base_url('assets/landingTemplate'); ?>/js/nouislider.min.js"></script>
	<script src="<?= base_url('assets/landingTemplate'); ?>/js/countdown.js"></script>
	<script src="<?= base_url('assets/landingTemplate'); ?>/js/jquery.magnific-popup.min.js"></script>
	<script src="<?= base_url('assets/landingTemplate'); ?>/js/owl.carousel.min.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="<?= base_url('assets/landingTemplate'); ?>/js/gmaps.min.js"></script>
	<script src="<?= base_url('assets/landingTemplate'); ?>/js/main.js"></script>
</body>

</html>