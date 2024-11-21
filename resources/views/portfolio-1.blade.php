@extends('layouts.app')
@section('title', 'Portfolio-1')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>Portfolio - AKAD - Creative Digital Agency HTML Template</title>
	<!-- META TAGS -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
	<meta name="author" content="Amine Akhouad">
	<meta name="description" content="AKAD is a creative and modern template for digital agencies">

	<!-- STYLES -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/ionicons.min.css">
	<link rel="stylesheet" href="assets/css/animsition.min.css">
	<link rel="stylesheet" href="assets/css/animate.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="animsition">
	<!-- HEADER  -->
	<header class="main-header">
		<div class="container">
			<div class="logo">
				<a href="/"><img src="assets/img/logo.png" alt="logo"></a>
			</div>
			<div class="menu">
				<!-- desktop navbar -->
				<nav class="desktop-nav">
					<ul class="first-level">
						<li><a href="/" class="animsition-link">Home</a></li>
						<li><a href="/about" class="animsition-link">about us</a></li>
						<li><a href="/services" class="animsition-link">services</a></li>
						<li><a href="">portfolio</a>
							<ul class="second-level">
								<li><a href="/portfolio-1" class="animsition-link">portfolio list</a></li>
								<li><a href="/single-project" class="animsition-link">single project 1</a></li>
								<li><a href="/single-project-2" class="animsition-link">single project 2</a></li>
							</ul>
						</li>
						<li><a href="">blog</a>
							<ul class="second-level">
								<li><a href="/blog-1" class="animsition-link">posts list</a></li>
								<li><a href="/single-post" class="animsition-link">single post</a></li>
							</ul>
						</li>
						<li><a href="/contact" class="animsition-link">contact us</a></li>
					</ul>
				</nav>
				<!-- mobile navbar -->
				<nav class="mobile-nav"></nav>
				<div class="menu-icon">
					<div class="line"></div>
					<div class="line"></div>
					<div class="line"></div>
				</div>
			</div>
		</div>
	</header>

	<!-- HERO SECTION  -->
	<div class="site-hero_2">
		<div class="page-title">
			<div class="big-title montserrat-text uppercase">our work</div>
			<div class="small-title montserrat-text uppercase">home / portfolio</div>
		</div>
	</div>


	<!-- PORTFOLIO -->
	<section class="portfolio">
		<div class="container">
			<!-- categories  -->
			<div class="col-md-3">
				<div class="row categories-grid wow fadeInLeft">
					<span class="montserrat-text uppercase">choose category</span>

					<nav class="categories">
						<ul class="portfolio_filter">
							<li><a href="" class="active" data-filter="*">all</a></li>
							<li><a href="" data-filter=".photography">photography</a></li>
							<li><a href="" data-filter=".web">webdesign</a></li>
							<li><a href="" data-filter=".logo">logo</a></li>
							<li><a href="" data-filter=".graphics">graphics</a></li>
							<li><a href="" data-filter=".ads">advertising</a></li>
							<li><a href="" data-filter=".fashion">fashion</a></li>
						</ul>
					</nav>
				</div>
			</div>

			<!-- all works -->
			<div class="col-md-9">
				<div class="row portfolio_container">
					<!-- single work -->
					<div class="col-md-4 photography">
						<a href="single-project.html" class="portfolio_item wow fadeInUp">
							<img src="assets/img/work-1.jpg" alt="image">
							<div class="portfolio_item_hover">
								<div class="item_info">
									<span>Brave man</span>
									<em>photography</em>
								</div>
							</div>
						</a>
					</div>
					<!-- end single work -->

					<!-- single work -->
					<div class="col-md-4 fashion logo">
						<a href="single-project.html" class="portfolio_item wow fadeInUp" data-wow-delay=".1s">
							<img src="assets/img/work-2.jpg" alt="image">
							<div class="portfolio_item_hover">
								<div class="item_info">
									<span>super man</span>
									<em>photography</em>
								</div>
							</div>
						</a>
					</div>
					<!-- end single work -->

					<!-- single work -->
					<div class="col-md-4 ads graphics">
						<a href="single-project.html" class="portfolio_item wow fadeInUp" data-wow-delay=".2s">
							<img src="assets/img/work-3.jpg" alt="image">
							<div class="portfolio_item_hover">
								<div class="item_info">
									<span>bat man</span>
									<em>photography</em>
								</div>
							</div>
						</a>
					</div>
					<!-- end single work -->

					<!-- single work -->
					<div class="col-md-4  fashion ads">
						<a href="single-project.html" class="portfolio_item wow fadeInUp" data-wow-delay=".3s">
							<img src="assets/img/work-3.jpg" alt="image">
							<div class="portfolio_item_hover">
								<div class="item_info">
									<span>spider man</span>
									<em>photography</em>
								</div>
							</div>
						</a>
					</div>
					<!-- end single work -->

					<!-- single work -->
					<div class="col-md-4 graphics ads">
						<a href="single-project.html" class="portfolio_item wow fadeInUp" data-wow-delay=".4s">
							<img src="assets/img/work-1.jpg" alt="image">
							<div class="portfolio_item_hover">
								<div class="item_info">
									<span>iron man</span>
									<em>photography</em>
								</div>
							</div>
						</a>
					</div>
					<!-- end single work -->

					<!-- single work -->
					<div class="col-md-4 logo web photography">
						<a href="single-project.html" class="portfolio_item wow fadeInUp" data-wow-delay=".5s">
							<img src="assets/img/work-2.jpg" alt="image">
							<div class="portfolio_item_hover">
								<div class="item_info">
									<span>iron man</span>
									<em>photography</em>
								</div>
							</div>
						</a>
					</div>
					<!-- end single work -->

					<!-- single work -->
					<div class="col-md-4 ads graphics">
						<a href="single-project.html" class="portfolio_item wow fadeInUp" data-wow-delay=".6s">
							<img src="assets/img/work-2.jpg" alt="image">
							<div class="portfolio_item_hover">
								<div class="item_info">
									<span>iron man</span>
									<em>photography</em>
								</div>
							</div>
						</a>
					</div>
					<!-- end single work -->

					<!-- single work -->
					<div class="col-md-4 web fashion photography">
						<a href="single-project.html" class="portfolio_item wow fadeInUp" data-wow-delay=".7s">
							<img src="assets/img/work-1.jpg" alt="image">
							<div class="portfolio_item_hover">
								<div class="item_info">
									<span>iron man</span>
									<em>photography</em>
								</div>
							</div>
						</a>
					</div>
					<!-- end single work -->

					<!-- single work -->
					<div class="col-md-4 fashion logo">
						<a href="single-project.html" class="portfolio_item wow fadeInUp" data-wow-delay=".8s">
							<img src="assets/img/work-1.jpg" alt="image">
							<div class="portfolio_item_hover">
								<div class="item_info">
									<span>iron man</span>
									<em>photography</em>
								</div>
							</div>
						</a>
					</div>
					<!-- end single work -->

					<!-- single work -->
					<div class="col-md-4 fashion logo">
						<a href="single-project.html" class="portfolio_item wow fadeInUp" data-wow-delay=".9s">
							<img src="assets/img/work-3.jpg" alt="image">
							<div class="portfolio_item_hover">
								<div class="item_info">
									<span>iron man</span>
									<em>photography</em>
								</div>
							</div>
						</a>
					</div>
					<!-- end single work -->

					<!-- single work -->
					<div class="col-md-4 fashion logo">
						<a href="single-project.html" class="portfolio_item wow fadeInUp" data-wow-delay="1s">
							<img src="assets/img/work-2.jpg" alt="image">
							<div class="portfolio_item_hover">
								<div class="item_info">
									<span>iron man</span>
									<em>photography</em>
								</div>
							</div>
						</a>
					</div>
					<!-- end single work -->

					<!-- single work -->
					<div class="col-md-4 fashion logo">
						<a href="single-project.html" class="portfolio_item wow fadeInUp" data-wow-delay="1.1s">
							<img src="assets/img/work-1.jpg" alt="image">
							<div class="portfolio_item_hover">
								<div class="item_info">
									<span>iron man</span>
									<em>photography</em>
								</div>
							</div>
						</a>
					</div>
					<!-- end single work -->

					<!-- single work -->
					<div class="col-md-4 fashion logo">
						<a href="single-project.html" class="portfolio_item wow fadeInUp" data-wow-delay="1.2s">
							<img src="assets/img/work-3.jpg" alt="image">
							<div class="portfolio_item_hover">
								<div class="item_info">
									<span>iron man</span>
									<em>photography</em>
								</div>
							</div>
						</a>
					</div>
					<!-- end single work -->

					<!-- single work -->
					<div class="col-md-4 fashion logo">
						<a href="single-project.html" class="portfolio_item wow fadeInUp" data-wow-delay="1.3s">
							<img src="assets/img/work-1.jpg" alt="image">
							<div class="portfolio_item_hover">
								<div class="item_info">
									<span>iron man</span>
									<em>photography</em>
								</div>
							</div>
						</a>
					</div>
					<!-- end single work -->
				</div>
				<!-- end row -->
			</div>
			<!-- all works end -->
		</div>
		<!-- end container -->
	</section>
	<!-- portfolio -->


	<!-- newsletter -->
	<section class="green-section wow fadeInUp" style="padding:50px 0">
		<div class="container">
			<div class="col-md-6 col-sm-12">
				<div class="row">
					<span class="white-text montserrat-text uppercase" style="font-size:30px;display:block;">
						you think we're cool? let's work together
					</span>
					<a href="#" class="btn white" style="margin-top:30px"><span>get in touch</span></a>
				</div>
			</div>

			<div class="col-md-6 col-sm-12">
				<div class="row">
					<div class="white-section" style="padding:20px">
						<span class="montserrat-text uppercase" style="font-size:24px">stay informed with our newsletter</span>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.
						</p>
						<form action="#" method="post">
							<div class="input_1">
								<input type="text" name="email">
								<span>your email</span>
							</div>
							<button type="submit" class="btn green" style="margin-top:20px"><span>send</span></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- FOOTER -->
	<footer class="main-footer wow fadeInUp">
		<div class="container">
			<div class="col-md-8 col-sm-12">
				<div class="row">
					<nav class="footer-nav">
						<ul>
							<li><a href="/" class="animsition-link link">Home</a></li>
							<li><a href="/about" class="animsition-link link">about us</a></li>
							<li><a href="/services" class="animsition-link link">services</a></li>
							<li><a href="/portfolio-1" class="animsition-link link">portfolio</a></li>
							<li><a href="/blog-1" class="animsition-link link">blog</a></li>
							<li><a href="/contact" class="animsition-link link">contact us</a></li>
						</ul>
					</nav>
				</div>
			</div>

			<div class="col-md-4 col-sm-12" style="text-align:right">
				<div class="row">
					<div class="uppercase gray-text">
						created by akhouad &copy;2016. all rights reserved.
					</div>
					<ul class="social-icons" style="margin-top:30px;float:right">
						<li><a href="#"><i class="icon ion-social-facebook"></i></a></li>
						<li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
						<li><a href="#"><i class="icon ion-social-youtube"></i></a></li>
						<li><a href="#"><i class="icon ion-social-linkedin"></i></a></li>
						<li><a href="#"><i class="icon ion-social-pinterest"></i></a></li>
						<li><a href="#"><i class="icon ion-social-instagram"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>

	<!-- SCRIPTS -->
	<script type="text/javascript" src="assets/js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="assets/js/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="assets/js/smoothScroll.js"></script>
	<script type="text/javascript" src="assets/js/jquery.animsition.min.js"></script>
	<script type="text/javascript" src="assets/js/wow.min.js"></script>
	<script type="text/javascript" src="assets/js/main.js"></script>

	<script type="text/javascript" charset="utf-8">
		$(window).load(function() {
			new WOW().init();
			// initialize isotope
			var $container = $('.portfolio_container');
			$container.isotope({
				filter: '*',
			});
		 
			$('.portfolio_filter a').click(function(){
				$('.portfolio_filter .active').removeClass('active');
				$(this).addClass('active');
		 
				var selector = $(this).attr('data-filter');
				$container.isotope({
					filter: selector,
					animationOptions: {
						duration: 500,
						animationEngine : "jquery"
					}
				});
				return false;
			}); 
		});
	</script>
</body>
</html>
@endsection