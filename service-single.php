<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<title>LifeGuide</title>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css" id="color-switcher-link">
	<link rel="stylesheet" href="css/animations.css">
	<link rel="stylesheet" href="css/fonts.css">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>

	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<![endif]-->

</head>

<body>
	<!--[if lt IE 9]>
		<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
	<![endif]-->

	<div class="preloader">
		<div class="preloader_image"></div>
	</div>


	<!-- search modal -->
	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
		<div class="widget widget_search">
			<form method="get" class="searchform form-inline" action="/">
				<div class="form-group">
					<input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
				</div>
				<button type="submit" class="theme_button">
					<span class="sr-only">Search</span>
					<i class="fa fa-search highlight"></i>
				</button>
			</form>
		</div>
	</div>

	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">

			<!-- template sections -->


			<header class="page_header header_white affix-header table_section columns_padding_0 toggle_menu_right">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<a href="./" class="logo">
								<svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60">
									<path class="logo-svg" d="M85.938,42.272A28.53,28.53,0,0,0,80,60c0,14.752,11.876,30,30.186,30S140,74.565,140,60.122,128.99,30,110.309,30C97.072,30,94.1,35.949,94.1,38.8s2.845,7.066,9.4,7.066h8.041c7.794,0,14.1,5.579,14.1,14.256S118.6,74.131,111.3,74.131h-9.031a4.223,4.223,0,0,1-4.454-4.587c0-3.1,2.722-3.967,4.7-3.967h8.413c2.165,0,6.185-1.3,6.185-5.579s-3.525-5.578-5.814-5.578h-8.536c-2.722,0-8.784-1.178-12.248-4.463A17.864,17.864,0,0,1,85.938,42.272Z"
													transform="translate(-80 -30)" />
								</svg>
								<!-- <img src='images/logo.png' alt=""> -->
								<span class="logo_text">Lifeguide</span>
							</a>
							<span class="toggle_menu">
								<span></span>
							</span>
						</div>
						<div class="col-md-6 text-center">
							<!-- main nav start -->
							<nav class="mainmenu_wrapper">
								<ul class="mainmenu nav sf-menu">
									<li class="active">
										<a href="index.html">Home</a>
									</li>

									<li>
										<a href="about.html">Pages</a>
										<ul>
											<!-- features -->
											<li>
												<a href="shortcodes_teasers.html">shortcodes&amp;widgets</a>
												<ul>

													<li>
														<a href="shortcodes_teasers.html">teasers</a>
													</li>
													<li>
														<a href="shortcodes_buttons.html">buttons</a>
													</li>
													<li>
														<a href="shortcodes_progress.html">progress</a>
													</li>
													<li>
														<a href="shortcodes_pricing.html">pricing</a>
													</li>
													<li>
														<a href="shortcodes_socialicons.html">social icons</a>
													</li>
													<li>
														<a href="shortcodes_tabs.html">tabs &amp; collapse</a>
													</li>
													<li>
														<a href="shortcodes_bootstrap.html">bootstrap elements</a>
													</li>
													<li>
														<a href="shortcodes_typography.html">typography</a>
													</li>
													<li>
														<a href="shortcodes_widgets.html">widgets</a>
													</li>
													<li>
														<a href="shortcodes_animation.html">animation</a>
													</li>
													<li>
														<a href="shortcodes_icons.html">template icons</a>
													</li>
												</ul>
											</li>
											<!-- eof features -->

											<!-- header -->
											<li>
												<a href="header1.html">headers</a>
												<ul>
													<li>
														<a href="header1.html">header 1</a>
													</li>
													<li>
														<a href="header2.html">header 2</a>
													</li>
													<li>
														<a href="header3.html">header 3</a>
													</li>
													<li>
														<a href="header4.html">header 4</a>
													</li>
													<li>
														<a href="header5.html">header 5</a>
													</li>
													<li>
														<a href="header6.html">header 6</a>
													</li>
													<li>
														<a href="header7.html">header 7</a>
													</li>
													<li>
														<a href="header_side1.html">side headers</a>
														<ul>
															<li>
																<a href="header_side1.html">side left header</a>
															</li>
															<li>
																<a href="header_side2.html">side right header</a>
															</li>
															<li>
																<a href="header_side3.html">side push left header</a>
															</li>
															<li>
																<a href="header_side4.html">side push right header</a>
															</li>
														</ul>
													</li>

												</ul>
											</li>
											<!-- eof header -->

											<!-- breadcrumbs -->
											<li>
												<a href="breadcrumbs1.html">breadcrumbs</a>
												<ul>
													<li>
														<a href="breadcrumbs1.html">breadcrumbs 1</a>
													</li>
													<li>
														<a href="breadcrumbs2.html">breadcrumbs 2</a>
													</li>
													<li>
														<a href="breadcrumbs3.html">breadcrumbs 3</a>
													</li>
													<li>
														<a href="breadcrumbs4.html">breadcrumbs 4</a>
													</li>
													<li>
														<a href="breadcrumbs5.html">breadcrumbs 5</a>
													</li>
													<li>
														<a href="breadcrumbs6.html">breadcrumbs 6</a>
													</li>
												</ul>
											</li>
											<!-- eof breadcrumbs -->

											<!-- footer -->
											<li>
												<a href="footer1.html">footer</a>
												<ul>
													<li>
														<a href="footer1.html">footer 1</a>
													</li>
													<li>
														<a href="footer2.html">footer 2</a>
													</li>
													<li>
														<a href="footer3.html">footer 3</a>
													</li>
													<li>
														<a href="footer4.html">footer 4</a>
													</li>
													<li>
														<a href="footer5.html">footer 5</a>
													</li>
													<li>
														<a href="footer6.html">footer 6</a>
													</li>
												</ul>
											</li>
											<!-- eof footer -->

											<!-- copyright -->
											<li>
												<a href="copyright1.html">copyright</a>
												<ul>
													<li>
														<a href="copyright1.html">copyright 1</a>
													</li>
													<li>
														<a href="copyright2.html">copyright 2</a>
													</li>
													<li>
														<a href="copyright3.html">copyright 3</a>
													</li>
													<li>
														<a href="copyright4.html">copyright 4</a>
													</li>
													<li>
														<a href="copyright5.html">copyright 5</a>
													</li>
													<li>
														<a href="copyright6.html">copyright 6</a>
													</li>
												</ul>
											</li>
											<!-- eof copyright -->

											<!-- events -->
											<li>
												<a href="events-left.html">events</a>
												<ul>
													<li>
														<a href="events-left.html">left sidebar</a>
													</li>
													<li>
														<a href="events-right.html">right sidebar</a>
													</li>
													<li>
														<a href="events-full.html">full width</a>
													</li>
													<li>
														<a href="event-single-left.html">single event</a>
														<ul>
															<li>
																<a href="event-single-left.html">left sidebar</a>
															</li>
															<li>
																<a href="event-single-right.html">right sidebar</a>
															</li>
															<li>
																<a href="event-single-full.html">full width</a>
															</li>
														</ul>
													</li>
												</ul>
											</li>
											<!-- eof events -->

											<li>
												<a href="about.html">about</a>
											</li>

											<li>
												<a href="team.html">team</a>
												<ul>
													<li>
														<a href="team.html">team</a>
													</li>
													<li>
														<a href="team-single.html">Team single</a>
													</li>
												</ul>
											</li>

											<li>
												<a href="testimonials.html">Testimonials</a>
											</li>

											<li>
												<a href="services.html">services</a>
												<ul>
													<li>
														<a href="services.html">services</a>
													</li>
													<li>
														<a href="service-single.html">Single service</a>
													</li>
												</ul>
											</li>

											<li>
												<a href="comingsoon1.html">comingsoon</a>
												<ul>
													<li>
														<a href="comingsoon1.html">comingsoon</a>
													</li>
													<li>
														<a href="comingsoon2.html">comingsoon 2</a>
													</li>
												</ul>
											</li>

											<li>
												<a href="typography.html">Typography</a>
											</li>

											<li>
												<a href="timetable.html">timetable</a>
											</li>

											<li>
												<a href="faq.html">faq</a>
												<ul>
													<li>
														<a href="faq.html">faq</a>
													</li>
													<li>
														<a href="faq2.html">faq 2</a>
													</li>
												</ul>
											</li>

											<li>
												<a href="404.html">404</a>
											</li>

										</ul>
									</li>
									<!-- eof pages -->

									<!-- blog -->
									<li>
										<a href="blog-right.html">Blog</a>
										<ul>

											<li>
												<a href="blog-right.html">Right Sidebar</a>
											</li>
											<li>
												<a href="blog-left.html">Left Sidebar</a>
											</li>
											<li>
												<a href="blog-full.html">No Sidebar</a>
											</li>
											<li>
												<a href="blog-mosaic.html">Blog Grid</a>
											</li>

											<li>
												<a href="blog-single-right.html">Post</a>
												<ul>
													<li>
														<a href="blog-single-right.html">Right Sidebar</a>
													</li>
													<li>
														<a href="blog-single-left.html">Left Sidebar</a>
													</li>
													<li>
														<a href="blog-single-full.html">No Sidebar</a>
													</li>
												</ul>
											</li>

											<li>
												<a href="blog-single-video-right.html">Video Post</a>
												<ul>
													<li>
														<a href="blog-single-video-right.html">Right Sidebar</a>
													</li>
													<li>
														<a href="blog-single-video-left.html">Left Sidebar</a>
													</li>
													<li>
														<a href="blog-single-video-full.html">No Sidebar</a>
													</li>
												</ul>
											</li>

										</ul>
									</li>
									<!-- eof blog -->

									<!-- gallery -->
									<li>
										<a href="gallery-regular.html">Gallery</a>
										<ul>
											<!-- Gallery regular -->
											<li>
												<a href="gallery-regular.html">Gallery Regular</a>
												<ul>
													<li>
														<a href="gallery-regular.html">1 column</a>
													</li>
													<li>
														<a href="gallery-regular-2-cols.html">2 columns</a>
													</li>
													<li>
														<a href="gallery-regular-3-cols.html">3 columns</a>
													</li>
													<li>
														<a href="gallery-regular-4-cols.html">4 columns</a>
													</li>
												</ul>
											</li>
											<!-- eof Gallery regular -->

											<!-- Gallery full width -->
											<li>
												<a href="gallery-fullwidth.html">Gallery Full Width</a>
												<ul>
													<li>
														<a href="gallery-fullwidth.html">2 column</a>
													</li>
													<li>
														<a href="gallery-fullwidth-3-cols.html">3 columns</a>
													</li>
													<li>
														<a href="gallery-fullwidth-4-cols.html">4 columns</a>
													</li>
												</ul>
											</li>
											<!-- eof Gallery full width -->

											<!-- Gallery extended -->
											<li>
												<a href="gallery-extended.html">Gallery Extended</a>
												<ul>
													<li>
														<a href="gallery-extended.html">1 column</a>
													</li>
													<li>
														<a href="gallery-extended-2-cols.html">2 columns</a>
													</li>
													<li>
														<a href="gallery-extended-3-cols.html">3 columns</a>
													</li>
												</ul>
											</li>
											<!-- eof Gallery extended -->

											<!-- Gallery carousel -->
											<li>
												<a href="gallery-carousel.html">Gallery Carousel</a>
												<ul>
													<li>
														<a href="gallery-carousel.html">1 column</a>
													</li>
													<li>
														<a href="gallery-carousel-2-cols.html">2 columns</a>
													</li>
													<li>
														<a href="gallery-carousel-3-cols.html">3 columns</a>
													</li>
												</ul>
											</li>
											<!-- eof Gallery carousel -->

											<!-- Gallery tile -->
											<li>
												<a href="gallery-tile.html">Gallery Tile</a>
											</li>
											<!-- eof Gallery tile -->

											<!-- Gallery left sidebar -->
											<li>
												<a href="gallery-left.html">Gallery Left Sidebar</a>
												<ul>
													<li>
														<a href="gallery-left.html">1 column</a>
													</li>
													<li>
														<a href="gallery-left-2-cols.html">2 columns</a>
													</li>
												</ul>
											</li>
											<!-- eof Gallery left sidebar -->

											<!-- Gallery right sidebar -->
											<li>
												<a href="gallery-right.html">Gallery Right Sidebar</a>
												<ul>
													<li>
														<a href="gallery-right.html">1 column</a>
													</li>
													<li>
														<a href="gallery-right-2-cols.html">2 columns</a>
													</li>
												</ul>
											</li>
											<!-- eof Gallery right sidebar -->

											<!-- Gallery item -->
											<li>
												<a href="gallery-single.html">Gallery Item</a>
												<ul>
													<li>
														<a href="gallery-single.html">Style 1</a>
													</li>
													<li>
														<a href="gallery-single2.html">Style 2</a>
													</li>
													<li>
														<a href="gallery-single3.html">Style 3</a>
													</li>
												</ul>
											</li>
											<!-- eof Gallery item -->
										</ul>
									</li>
									<!-- eof Gallery -->

									<!-- shop -->
									<li>
										<a href="shop-right.html">Shop</a>
										<ul>
											<li>
												<a href="shop-right.html">Shop</a>
											</li>
											<li>
												<a href="product-right.html">Single Product</a>
											</li>
											<li>
												<a href="cart-right.html">Shopping Cart</a>
											</li>
											<li>
												<a href="checkout-right.html">Checkout</a>
											</li>
											<li>
												<a href="register.html">Registration</a>
											</li>
										</ul>
									</li>
									<!-- eof shop -->

									<li>
										<a href="#">Features</a>
										<div class="mega-menu">
											<ul class="mega-menu-row">
												<li class="mega-menu-col">
													<a href="#">Headers</a>
													<ul>
														<li>
															<a href="header1.html">Header Type 1</a>
														</li>
														<li>
															<a href="header2.html">Header Type 2</a>
														</li>
														<li>
															<a href="header3.html">Header Type 3</a>
														</li>
														<li>
															<a href="header4.html">Header Type 4</a>
														</li>
														<li>
															<a href="header5.html">Header Type 5</a>
														</li>
														<li>
															<a href="header6.html">Header Type 6</a>
														</li>
														<li>
															<a href="header7.html">Header Type 7</a>
														</li>
													</ul>
												</li>
												<li class="mega-menu-col">
													<a href="#">Side Menus</a>
													<ul>
														<li>
															<a href="header_side1.html">Slide Left Light</a>
														</li>
														<li>
															<a href="header_side2.html">Slide Right Light</a>
														</li>
														<li>
															<a href="header_side3.html">Push Left Light</a>
														</li>
														<li>
															<a href="header_side4.html">Push Right Light</a>
														</li>
														<li>
															<a href="header_side5.html">Slide Left Dark</a>
														</li>
														<li>
															<a href="header_side6.html">Slide Right Dark</a>
														</li>
														<li>
															<a href="header_side7.html">Push Left Dark</a>
														</li>
														<li>
															<a href="header_side8.html">Push Right Dark</a>
														</li>
														<li>
															<a href="header_side_superfish.html">Superfish Menu</a>
														</li>
													</ul>
												</li>
												<li class="mega-menu-col">
													<a href="breadcrumbs1.html">Breadcrumbs</a>
													<ul>
														<li>
															<a href="breadcrumbs1.html">Breadcrumbs 1</a>
														</li>
														<li>
															<a href="breadcrumbs2.html">Breadcrumbs 2</a>
														</li>
														<li>
															<a href="breadcrumbs3.html">Breadcrumbs 3</a>
														</li>
														<li>
															<a href="breadcrumbs4.html">Breadcrumbs 4</a>
														</li>
														<li>
															<a href="breadcrumbs5.html">Breadcrumbs 5</a>
														</li>
														<li>
															<a href="breadcrumbs6.html">Breadcrumbs 6</a>
														</li>
													</ul>
												</li>
												<li class="mega-menu-col">
													<a href="footer1.html">Footers</a>
													<ul>
														<li>
															<a href="footer1.html">Footer Type 1</a>
														</li>
														<li>
															<a href="footer2.html">Footer Type 2</a>
														</li>
														<li>
															<a href="footer3.html">Footer Type 3</a>
														</li>
														<li>
															<a href="footer4.html">Footer Type 4</a>
														</li>
														<li>
															<a href="footer5.html">Footer Type 5</a>
														</li>
														<li>
															<a href="footer6.html">Footer Type 6</a>
														</li>
													</ul>
												</li>
												<li class="mega-menu-col">
													<a href="copyright1.html">Copyrights</a>

													<ul>
														<li>
															<a href="copyright1.html">Copyrights 1</a>
														</li>
														<li>
															<a href="copyright2.html">Copyrights 2</a>
														</li>
														<li>
															<a href="copyright3.html">Copyrights 3</a>
														</li>
														<li>
															<a href="copyright4.html">Copyrights 4</a>
														</li>
														<li>
															<a href="copyright5.html">Copyrights 5</a>
														</li>
														<li>
															<a href="copyright6.html">Copyrights 6</a>
														</li>
													</ul>
												</li>

											</ul>
										</div>
										<!-- eof mega menu -->
									</li>
									<!-- eof features -->

									<!-- contacts -->
									<li>
										<a href="contact.html">Contact</a>
										<ul>
											<li>
												<a href="appointment.html">Appointment</a>
											</li>
											<li>
												<a href="contact.html">Contact 1</a>
											</li>
											<li>
												<a href="contact2.html">Contact 2</a>
											</li>
											<li>
												<a href="contact3.html">Contact 3</a>
											</li>
										</ul>
									</li>
									<!-- eof contacts -->

									<!-- eof contacts -->
								</ul>
							</nav>
							<!-- eof main nav -->

						</div>
						<div class="col-md-3 text-right">

							<span class="hidden-xs">
								<a href="#" class="social-icon border-icon rounded-icon color-icon soc-facebook"></a>
								<a href="#" class="social-icon border-icon rounded-icon color-icon soc-twitter"></a>
								<a href="#" class="social-icon border-icon rounded-icon color-icon soc-google"></a>
								<a href="#" class="social-icon border-icon rounded-icon color-icon soc-youtube"></a>
							</span>
						</div>
					</div>
				</div>
			</header>

			<section class="page_breadcrumbs ds parallax section_padding_75">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h1 class="weight-black">About</h1>
							<ol class="breadcrumb darklinks grey">
								<li>
									<a href="./">
										HomePage
									</a>
								</li>
								<li>
									<a href="#">Pages</a>
								</li>
								<li class="active">About</li>
							</ol>
						</div>
					</div>
				</div>
			</section>

			<section class="ls section_padding_150 columns_padding_30">
				<div class="container">
					<div class="row">
						<div class="col-sm-7 col-md-8 col-sm-push-5 col-md-push-4">
							<img src="images/gallery/20.jpg" alt="">
							<h2 class="section_header topmargin_60">Counselling Clients</h2>
							<p>
								Short ribs pork chop pork, shank tail hamburger pork belly. Tenderloin pastrami sirloin, alcatra jowl pork chop strip steak. Short ribs doner pancetta ribeye bresaola turkey swine spare ribs beef ribs tongue shank. Tail leberkas tenderloin bresaola alcatra
								rump meatloaf jowl. Pork kevin chuck sausage shankle venison filet mignon pork chop tongue ribeye.
							</p>
							<ul class="list2 grey">
								<li>Fatback picanha spare ribs bresaola</li>
								<li>Shoulder turkey kevin drumstick turduc</li>
								<li>Andouille sausage spare ribs frankfurter</li>
								<li>Frankfurter chicken andouille tongue</li>
							</ul>
							<p>
								Burgdoggen swine meatloaf shankle. Pork loin short loin short ribs, shankle andouille rump venison tongue beef brisket hamburger sirloin pork chop cow jerky. Bacon frankfurter burgdoggen swine. Pork loin shank brisket venison tongue ham hock pork kevin
								rump capicola. Landjaeger prosciutto meatloaf shank pork hamburger. Rump tail venison landjaeger ground round doner turducken. Boudin cupim strip steak, picanha pork loin alcatra meatball bresaola.
							</p>
						</div>
						<aside class="col-sm-5 col-md-4 col-sm-pull-7 col-md-pull-8">
							<div class="widget widget_search">
								<h3 class="widget-title">Search on
									<strong>Website</strong>
								</h3>
								<form method="get" class="searchform form-inline" action="./">
									<div class="form-group">
										<label class="sr-only" for="page_search">Search for:</label>
										<input type="text" id="page_search" value="" name="search" class="form-control" placeholder="Keyword">
									</div>
									<button type="submit" class="theme_button">
										<span class="sr-only">Search</span>
										<i class="fa fa-search highlight"></i>
									</button>
								</form>
							</div>

							<div class="widget">
								<h3 class="widget-title">Our
									<strong>Services</strong>
								</h3>
								<ul class="list2 greylinks">
									<li>
										<a href="#">Prosciutto ham burgdoggen</a>
									</li>
									<li>
										<a href="#">Ribeye doner meatball andouille</a>
									</li>
									<li>
										<a href="#">Shankle jowl drumstick</a>
									</li>
									<li>
										<a href="#">Porchetta shank tail</a>
									</li>
									<li>
										<a href="#">Chuck boudin tongue</a>
									</li>
									<li>
										<a href="#">Turducken fatback porchetta</a>
									</li>
								</ul>
							</div>
						</aside>
					</div>
				</div>
			</section>

			<footer class="page_footer ds section_padding_110 columns_padding_25">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-6">
							<div class="widget widget_text">
								<a href="./" class="logo bottommargin_20">
									<svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60">
										<path class="logo-svg" d="M85.938,42.272A28.53,28.53,0,0,0,80,60c0,14.752,11.876,30,30.186,30S140,74.565,140,60.122,128.99,30,110.309,30C97.072,30,94.1,35.949,94.1,38.8s2.845,7.066,9.4,7.066h8.041c7.794,0,14.1,5.579,14.1,14.256S118.6,74.131,111.3,74.131h-9.031a4.223,4.223,0,0,1-4.454-4.587c0-3.1,2.722-3.967,4.7-3.967h8.413c2.165,0,6.185-1.3,6.185-5.579s-3.525-5.578-5.814-5.578h-8.536c-2.722,0-8.784-1.178-12.248-4.463A17.864,17.864,0,0,1,85.938,42.272Z"
														transform="translate(-80 -30)" />
									</svg>
									<!-- <img src='images/logo.png' alt=""> -->
									<span class="logo_text">Lifeguide</span>
								</a>
								<div class="media thin-media">
									<div class="media-left fontsize_16">
										<i class="fa fa-map-marker"></i>
									</div>
									<div class="media-body">
										Baker st. 567, San Diego, CA
									</div>
								</div>
								<div class="media thin-media">
									<div class="media-left fontsize_16">
										<i class="fa fa-phone"></i>
									</div>
									<div class="media-body">
										8 (800) 695-2686
									</div>
								</div>
								<div class="media thin-media">
									<div class="media-left fontsize_16">
										<i class="fa fa-pencil"></i>
									</div>
									<div class="media-body darklinks">
										<a href="#">support@lifeguide.com</a>
									</div>
								</div>
								<div class="topmargin_25">
									<a href="#" class="social-icon color-bg-icon rounded-icon soc-facebook"></a>
									<a href="#" class="social-icon color-bg-icon rounded-icon soc-twitter"></a>
									<a href="#" class="social-icon color-bg-icon rounded-icon soc-google"></a>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="widget widget_recent_news">
								<h3 class="widget-title">Latest News</h3>
								<ul class="greylinks">
									<li>
										<a href="#">Sit amet consetetur sadipscing tempor invidunt dolore.</a>
										<time datetime="2015-11-08T15:05:23+00:00" class="entry-date small-text highlight">November 1, 2016</time>
									</li>
									<li>
										<a href="#">At vero eos eit accusam et justo clita kasd.</a>
										<time datetime="2015-11-08T15:05:23+00:00" class="entry-date small-text highlight">November 1, 2016</time>
									</li>
									<li>
										<a href="#">At vero eos eit accusam et justo clita kasd.</a>
										<time datetime="2015-11-08T15:05:23+00:00" class="entry-date small-text highlight">November 1, 2016</time>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="widget widget_mailchimp">

								<h3 class="widget-title">Newsletter</h3>

								<p>Subscribe to our latest news to be updated, we promise not to spam!</p>

								<form class="signup form-inline" action="./" method="get">
									<div class="form-group">
										<input name="email" type="email" class="mailchimp_email form-control" placeholder="Email address">
									</div>
									<button type="submit" class="theme_button">
										<span class="sr-only">Send</span>
										<i class="fa fa-pencil"></i>
									</button>
									<div class="response"></div>
								</form>

							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="widget widget_gallery">
								<h3 class="widget-title">Gallery</h3>
								<ul id="gallery">
									<li class="vertical-item">
										<div class="item-media">
											<img src="images/gallery/01.jpg" alt="">
											<div class="media-links">
												<a class="abs-link prettyPhoto" title="" data-gal="prettyPhoto[gal]" href="images/gallery/01.jpg"></a>
											</div>
										</div>
									</li>
									<li class="vertical-item">
										<div class="item-media">
											<img src="images/gallery/02.jpg" alt="">
											<div class="media-links">
												<a class="abs-link prettyPhoto" title="" data-gal="prettyPhoto[gal]" href="images/gallery/02.jpg"></a>
											</div>
										</div>
									</li>
									<li class="vertical-item">
										<div class="item-media">
											<img src="images/gallery/03.jpg" alt="">
											<div class="media-links">
												<a class="abs-link prettyPhoto" title="" data-gal="prettyPhoto[gal]" href="images/gallery/03.jpg"></a>
											</div>
										</div>
									</li>
									<li class="vertical-item">
										<div class="item-media">
											<img src="images/gallery/04.jpg" alt="">
											<div class="media-links">
												<a class="abs-link prettyPhoto" title="" data-gal="prettyPhoto[gal]" href="images/gallery/04.jpg"></a>
											</div>
										</div>
									</li>
									<li class="vertical-item">
										<div class="item-media">
											<img src="images/gallery/05.jpg" alt="">
											<div class="media-links">
												<a class="abs-link prettyPhoto" title="" data-gal="prettyPhoto[gal]" href="images/gallery/05.jpg"></a>
											</div>
										</div>
									</li>
									<li class="vertical-item">
										<div class="item-media">
											<img src="images/gallery/06.jpg" alt="">
											<div class="media-links">
												<a class="abs-link prettyPhoto" title="" data-gal="prettyPhoto[gal]" href="images/gallery/06.jpg"></a>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</footer>

			<section class="page_copyright ls section_padding_40">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<p class="lato small-text">&copy; copyright 2016 all rights reserved</p>
						</div>
					</div>
				</div>
			</section>

		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->

	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>


</body>

</html>