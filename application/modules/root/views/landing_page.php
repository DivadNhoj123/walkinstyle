<!DOCTYPE html>
<html lang="en">

<head>
	<!-- basic -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- mobile metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1">
	<!-- site metas -->
	<title>Walk N Style</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- bootstrap css -->
	<link rel="stylesheet" href="<?= base_url('assets/template'); ?>/css/bootstrap.min.css">
	<!-- style css -->
	<link rel="stylesheet" href="<?= base_url('assets/template'); ?>/css/style.css">
	<!-- Responsive-->
	<link rel="stylesheet" href="<?= base_url('assets/template'); ?>/css/responsive.css">
	<!-- fevicon -->
	<link rel="icon" href="<?= base_url('assets/template'); ?>/images/fevicon.png" type="image/gif" />
	<!-- Scrollbar Custom CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/template'); ?>/css/jquery.mCustomScrollbar.min.css">
	<!-- Tweaks for older IEs-->
	<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
	<link rel="shortcut icon" href="<?= base_url('assets/landingTemplate'); ?>/img/logo.svg">
	<!-- owl stylesheets -->
	<link rel="stylesheet" href="<?= base_url('assets/template'); ?>/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/template'); ?>/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>
<!-- body -->

<body class="main-layout">
	<!-- header section start -->
	<div class="header_section">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="logo">
						<h1 class="text-white tes" style="font-size: 40px;">Walk <strong class="text-danger">N</strong> Style</strong>
					</div>
				</div>
				<div class="col-sm-6">
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
							<div class="navbar-nav">
								<a class="nav-item nav-link" href="index.html">Home</a>
								<a class="nav-item nav-link" data-toggle="modal" data-target="#login-modal">Login</a>
								<a class="nav-item nav-link" data-toggle="modal" data-target="#register-modal">Register</a>
								<a class="nav-item nav-link" data-toggle="modal" data-target="#register-modal">Courier</a>
							</div>
						</div>
					</nav>
				</div>
			</div>
		</div>
		<div class="banner_section">
			<div class="container-fluid">
				<section class="slide-wrapper">
					<div class="container-fluid">
						<div id="myCarousel" class="carousel slide" data-ride="carousel">
							<!-- Wrapper for slides -->
							<div class="carousel-inner">
								<div class="carousel-item active">
									<div class="row">
										<div class="col-sm-2 padding_0">

										</div>
										<div class="col-sm-4">
											<div class="banner_taital">
												<h1 class="banner_text">Quality Products</h1>
												<h1 class="mens_text"><strong>Men's Like Plex</strong></h1>
												<p class="lorem_text">Explore our latest shoe highlights, crafted with premium quality, comfort, and style in mind, ensuring you step into every stride with confidence and flair.</p>
												<!-- <button class="buy_bt" data-toggle="modal" data-target="#login-modal">Login</button> -->
											</div>
										</div>
										<div class="col-sm-5">
											<div class="shoes_img"><img src="<?= base_url('assets/template'); ?>/images/running-shoes.png"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
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
	<!-- header section end -->
	<!-- new collection section start -->
	<div class="layout_padding collection_section">
		<div class="container">
			<h1 class="new_text"><strong>New Collection</strong></h1>
			<p class="consectetur_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
			<div class="collection_section_2">
				<div class="row">
					<div class="col-md-6">
						<div class="about-img">
							<button class="new_bt">New</button>
							<div class="shoes-img"><img src="<?= base_url('assets/template'); ?>/images/shoes-img1.png"></div>
							<p class="sport_text">Men Sports</p>
							<div class="dolar_text">$<strong style="color: #f12a47;">90</strong> </div>
							<div class="star_icon">
								<ul>
									<li><a href="#"><img src="<?= base_url('assets/template'); ?>/images/star-icon.png"></a></li>
									<li><a href="#"><img src="<?= base_url('assets/template'); ?>/images/star-icon.png"></a></li>
									<li><a href="#"><img src="<?= base_url('assets/template'); ?>/images/star-icon.png"></a></li>
									<li><a href="#"><img src="<?= base_url('assets/template'); ?>/images/star-icon.png"></a></li>
									<li><a href="#"><img src="<?= base_url('assets/template'); ?>/images/star-icon.png"></a></li>
								</ul>
							</div>
						</div>
						<button class="seemore_bt">See More</button>
					</div>
					<div class="col-md-6">
						<div class="about-img2">
							<div class="shoes-img2"><img src="<?= base_url('assets/template'); ?>/images/shoes-img2.png"></div>
							<p class="sport_text">Men Sports</p>
							<div class="dolar_text">$<strong style="color: #f12a47;">90</strong> </div>
							<div class="star_icon">
								<ul>
									<li><a href="#"><img src="<?= base_url('assets/template'); ?>/images/star-icon.png"></a></li>
									<li><a href="#"><img src="<?= base_url('assets/template'); ?>/images/star-icon.png"></a></li>
									<li><a href="#"><img src="<?= base_url('assets/template'); ?>/images/star-icon.png"></a></li>
									<li><a href="#"><img src="<?= base_url('assets/template'); ?>/images/star-icon.png"></a></li>
									<li><a href="#"><img src="<?= base_url('assets/template'); ?>/images/star-icon.png"></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- new collection section end -->
	<!-- section footer start -->
	<div class="section_footer">
		<div class="container">
			<div class="mail_section">
				<div class="row">
					<div class="col-sm-6 col-lg-2">
						<div><a href="#"><img src="<?= base_url('assets/template'); ?>/images/footer-logo.png"></a></div>
					</div>
					<div class="col-sm-6 col-lg-2">
						<div class="footer-logo"><img src="<?= base_url('assets/template'); ?>/images/phone-icon.png"><span class="map_text">(71) 1234567890</span></div>
					</div>
					<div class="col-sm-6 col-lg-3">
						<div class="footer-logo"><img src="<?= base_url('assets/template'); ?>/images/email-icon.png"><span class="map_text">Demo@gmail.com</span></div>
					</div>
					<div class="col-sm-6 col-lg-3">
						<div class="social_icon">
							<ul>
								<li><a href="#"><img src="<?= base_url('assets/template'); ?>/images/fb-icon.png"></a></li>
								<li><a href="#"><img src="<?= base_url('assets/template'); ?>/images/twitter-icon.png"></a></li>
								<li><a href="#"><img src="<?= base_url('assets/template'); ?>/images/in-icon.png"></a></li>
								<li><a href="#"><img src="<?= base_url('assets/template'); ?>/images/google-icon.png"></a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2"></div>
				</div>
			</div>
			<div class="footer_section_2">
				<div class="row">
					<div class="col-sm-4 col-lg-2">
						<p class="dummy_text"> ipsum dolor sit amet, consectetur ipsum dolor sit amet, consectetur ipsum dolor sit amet,</p>
					</div>
					<div class="col-sm-4 col-lg-2">
						<h2 class="shop_text">Address </h2>
						<div class="image-icon"><img src="images/map-icon.png"><span class="pet_text">No 40 Baria Sreet 15/2 NewYork City, NY, United States.</span></div>
					</div>
					<div class="col-sm-4 col-md-6 col-lg-3">
						<h2 class="shop_text">Our Company </h2>
						<div class="delivery_text">
							<ul>
								<li>Delivery</li>
								<li>Legal Notice</li>
								<li>About us</li>
								<li>Secure payment</li>
								<li>Contact us</li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6 col-lg-3">
						<h2 class="adderess_text">Products</h2>
						<div class="delivery_text">
							<ul>
								<li>Prices drop</li>
								<li>New products</li>
								<li>Best sales</li>
								<li>Contact us</li>
								<li>Sitemap</li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6 col-lg-2">
						<h2 class="adderess_text">Newsletter</h2>
						<div class="form-group">
							<input type="text" class="enter_email" placeholder="Enter Your email" name="Name">
						</div>
						<button class="subscribr_bt">Subscribe</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<!-- section footer end -->
	<div class="copyright">2019 All Rights Reserved. <a href="https://html.design">Free html Templates</a></div>


	<!-- Javascript files-->
	<script src="<?= base_url('assets/template'); ?>/js/jquery.min.js"></script>
	<script src="<?= base_url('assets/template'); ?>/js/popper.min.js"></script>
	<script src="<?= base_url('assets/template'); ?>/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url('assets/template'); ?>/js/jquery-3.0.0.min.js"></script>
	<script src="<?= base_url('assets/template'); ?>/js/plugin.js"></script>
	<!-- sidebar -->
	<script src="<?= base_url('assets/template'); ?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="<?= base_url('assets/template'); ?>/js/custom.js"></script>
	<!-- javascript -->
	<script src="<?= base_url('assets/template'); ?>/js/owl.carousel.js"></script>
	<script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
	<script>
		$(document).ready(function() {
			$(".fancybox").fancybox({
				openEffect: "none",
				closeEffect: "none"
			});


			$('#myCarousel').carousel({
				interval: false
			});

			//scroll slides on swipe for touch enabled devices

			$("#myCarousel").on("touchstart", function(event) {

				var yClick = event.originalEvent.touches[0].pageY;
				$(this).one("touchmove", function(event) {

					var yMove = event.originalEvent.touches[0].pageY;
					if (Math.floor(yClick - yMove) > 1) {
						$(".carousel").carousel('next');
					} else if (Math.floor(yClick - yMove) < -1) {
						$(".carousel").carousel('prev');
					}
				});
				$(".carousel").on("touchend", function() {
					$(this).off("touchmove");
				});
			});
		});
	</script>
</body>

</html>