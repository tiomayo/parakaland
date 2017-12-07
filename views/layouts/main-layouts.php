<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

$theme = \yii::$app->view->theme->baseUrl;
$model = app\models\Organization::find()->one();

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="mlnprst" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lora:400,400i|Roboto:300,400,500,700|Rubik:400,600" rel="stylesheet">
	<link rel="stylesheet" href="<?= $theme ?>/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="<?= $theme ?>/style.css" type="text/css" />
	<link rel="stylesheet" href="<?= $theme ?>/css/dark.css" type="text/css" />

	<!-- Real Estate Demo Specific Stylesheet -->
	<link rel="stylesheet" href="<?= $theme ?>/demos/real-estate/real-estate.css" type="text/css" />
	<link rel="stylesheet" href="<?= $theme ?>/demos/real-estate/css/font-icons.css" type="text/css" />
	<!-- / -->

	<link rel="stylesheet" href="<?= $theme ?>/css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="<?= $theme ?>/css/animate.css" type="text/css" />
	<link rel="stylesheet" href="<?= $theme ?>/css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="<?= $theme ?>/demos/real-estate/fonts.css" type="text/css" />

	<!-- Bootstrap Select CSS -->
	<link rel="stylesheet" href="<?= $theme ?>/css/components/bs-select.css" type="text/css" />

	<!-- Bootstrap Switch CSS -->
	<link rel="stylesheet" href="<?= $theme ?>/css/components/bs-switches.css" type="text/css" />

	<!-- Range Slider CSS -->
	<link rel="stylesheet" href="<?= $theme ?>/css/components/ion.rangeslider.css" type="text/css" />

	<link rel="stylesheet" href="<?= $theme ?>/css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="stylesheet" href="<?= $theme ?>/css/colors.php?color=1ABC9C" type="text/css" />

	<!-- Document Title
	============================================= -->
	<title>PARAKALAND</title>

	<?php $this->head() ?>

</head>

<body class="stretched side-push-panel">

	<?php $this->beginBody() ?>

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Top Bar
		============================================= -->
		<div id="top-bar" class="transparent-topbar hidden-sm hidden-xs">

			<div class="container clearfix">

				<div class="col_half fright col_last clearfix nobottommargin">

					<!-- Top Links
					============================================= -->
					<div class="top-links">
						<ul>
							<li class="hidden-sm"><a href="#"><i class="icon-call"></i> <?= ($model->phone) ? $model->phone : 'Nomor Telepon'  ?></a></li>
							<li class="hidden-sm"><a href="#"><i class="icon-mail"></i> <?= ($model->email) ? $model->email : 'Alamat Email'  ?></a></li>
						</ul>
					</div><!-- .top-links end -->

				</div>

			</div>

		</div><!-- #top-bar end -->

		<!-- Header
		============================================= -->
		<header id="header" class="static-sticky transparent-header dark">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="<?= Url::base() ?>" data-dark-logo="<?= Url::base() ?>/images/logo_normal.png" class="standard-logo"><img src="<?= Url::base() ?>/images/logo_normal_dark.png" alt="Griya Samawa Logo"></a>
						<a href="<?= Url::base() ?>" data-dark-logo="<?= Url::base() ?>/images/logo_small_dark.png" class="retina-logo"><img src="<?= Url::base() ?>/images/logo_small_dark.png" alt="Griya Samawa Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu" class="with-arrows">

						<ul class="one-page-menu" data-easing="easeInOutExpo" data-speed="1500">
							<li class="current"><a href="#" data-href="#header"><div>Home</div></a></li>
							<li><a href="#" data-href="#about-us"><div>About Us</div></a></li>
							<li><a href="#" data-href="#cluster"><div>Cluster</div></a>
								<ul>
									<li><a href="#" data-href="#cluster_a"><div>Type 41/72 A</div></a></li>
									<li><a href="#" data-href="#cluster_c"><div>Type 41/72 C</div></a></li>
								</ul>
							</li>
							<li><a href="<?= Url::to(['gallery']) ?>"><div>Gallery</div></a></li>
							<li><a href="#" data-href="#contact"><div>Contact</div></a></li>
						</ul>

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->

		<!-- Slider
		============================================= -->
		<section id="slider" class="force-full-screen full-screen dark clearfix">

			<div class="force-full-screen full-screen">
				<div class="fslider" data-speed="3000" data-pause="7500" data-animation="fade" data-arrows="false" data-pagi="false" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; background-color: #333; z-index: 1;">
					<div class="flexslider" style="height: 100% !important;">
						<div class="slider-wrap" style="height: inherit;">
							<div class="slide" style="background: url('<?= Url::base() ?>/images/gambar_1.jpg') center center; background-size: cover; height: 100% !important;"></div>
							<div class="slide" style="background: url('<?= Url::base() ?>/images/gambar_2.jpg') center center; background-size: cover; height: 100% !important;"></div>
							<div class="slide" style="background: url('<?= Url::base() ?>/images/bird_view.jpg') center center; background-size: cover; height: 100% !important;"></div>
						</div>
					</div>
				</div>
				<div class="vertical-middle" style="z-index: 3;">
					<div class="container center clearfix">
						<div class="emphasis-title nomargin">
							<h1>PARAKA<span>LAND</span></h1>
							<span class="t300 uppercase" style="font-size: 18px; letter-spacing: 10px; color: rgba(255,255,255,0.9);">Value Function and Modern.</span>
						</div>
					</div>
				</div>
				<div class="video-wrap" style="position: absolute; top: 0; left: 0; height: 100%; z-index:1;">
					<div class="video-overlay real-estate-video-overlay" style="z-index: 1;"></div>
				</div>
			</div>

		</section><!-- #slider end -->

		<!-- Content
		============================================= -->
		<section id="content">
			<?= $content ?>
		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap clearfix" style="padding-bottom: 50px;">

					<div class="col_two_fifth">

						<div class="widget clearfix">

							<img src="<?= Url::base() ?>/images/logo_normal.png" style="position: relative; opacity: 0.85; left: -10px; max-height: 80px; margin-bottom: 20px;" alt="Footer Logo">
							<p>GRIYA SAMAWA merupakan perumahan cluster persembahan dari PARAKALAND untuk insan yang baru membangun sebuah keluarga ataupun yang sedang merencanakan membangun sebuah keluarga.</p>
							<div class="line" style="margin: 30px 0;"></div>

							<p class="ls1 t300 nobottommargin" style="opacity: 0.6; font-size: 13px;">Copyrights &copy; 2017 PARAKALAND.</p>
							<p class="ls1 t300 nobottommargin" style="opacity: 0.6; font-size: 13px;"><i class="icon-call"></i> <?= ($model->phone) ? $model->phone : 'Nomor Telepon'  ?></p>
							<p class="ls1 t300 nobottommargin" style="opacity: 0.6; font-size: 13px;"><i class="icon-mail"></i> <?= ($model->email) ? $model->email : 'Alamat Email'  ?></p>

						</div>

					</div>

					<div class="col_three_fifth col_last">

						<div class="col_half">
							<div class="row">

								<h4 class="ls1 t400 uppercase">Sitemap</h4>

								<div class="bottommargin-sm widget_links widget_real_estate_popular">
									<ul>
										<li><a href="#"><i class="icon-map-marker2"></i> Home</a></li>
										<li><a href="#"><i class="icon-map-marker2"></i> About Us</a></li>
										<li><a href="#"><i class="icon-map-marker2"></i> Cluster</a></li>
										<li><a href="#"><i class="icon-map-marker2"></i> Gallery</a></li>
										<li><a href="#"><i class="icon-map-marker2"></i> Contact</a></li>
									</ul>
								</div>

							</div>
						</div>

						<div class="col_half col_last">

							<h4 class="ls1 t400 uppercase">Connect Socially</h4>

							<div class="bottommargin-sm clearfix">
								<a href="#" class="social-icon si-colored si-small si-rounded si-facebook" title="Facebook">
									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>

								<a href="#" class="social-icon si-colored si-small si-rounded si-twitter" title="Twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>

								<a href="#" class="social-icon si-colored si-small si-rounded si-instagram" title="Instagram">
									<i class="icon-instagram"></i>
									<i class="icon-instagram"></i>
								</a>

								<a href="#" class="social-icon si-colored si-small si-rounded si-apple" title="App Store">
									<i class="icon-apple"></i>
									<i class="icon-apple"></i>
								</a>

								<a href="#" class="social-icon si-colored si-small si-rounded si-android" title="Play Store">
									<i class="icon-android"></i>
									<i class="icon-android"></i>
								</a>

								<a href="#" class="social-icon si-colored si-small si-rounded si-skype" title="Skype">
									<i class="icon-skype"></i>
									<i class="icon-skype"></i>
								</a>
							</div>

						</div>

					</div>

				</div><!-- .footer-widgets-wrap end -->

			</div>

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="<?= $theme ?>/js/jquery.js"></script>
	<script type="text/javascript" src="<?= $theme ?>/js/plugins.js"></script>

	<!-- Bootstrap Select Plugin -->
	<script type="text/javascript" src="<?= $theme ?>/js/components/bs-select.js"></script>

	<!-- Bootstrap Switch Plugin -->
	<script type="text/javascript" src="<?= $theme ?>/js/components/bs-switches.js"></script>

	<!-- Range Slider Plugin -->
	<script type="text/javascript" src="<?= $theme ?>/js/components/rangeslider.min.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="<?= $theme ?>/js/functions.js"></script>

	<script type="text/javascript">

		jQuery(document).on('ready', function(){

			$(".price-range-slider").ionRangeSlider({
				type: "double",
				prefix: "$",
				min: 200,
				max: 10000,
				max_postfix: "+"
			});

			$(".area-range-slider").ionRangeSlider({
				type: "double",
				min: 50,
				max: 20000,
				from: 50,
				to: 20000,
				postfix: " sqm.",
				max_postfix: "+"
			});

			jQuery(".bt-switch").bootstrapSwitch();

		});
	</script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>