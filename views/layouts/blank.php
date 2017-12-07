<?php
use yii\helpers\Url;
$theme = \yii::$app->view->theme->baseUrl;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="mlnprst" />

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?= $theme ?>/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="<?= $theme ?>/style.css" type="text/css" />
	<link rel="stylesheet" href="<?= $theme ?>/css/dark.css" type="text/css" />
	<link rel="stylesheet" href="<?= $theme ?>/css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="<?= $theme ?>/demos/real-estate/css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="<?= $theme ?>/css/animate.css" type="text/css" />
	<link rel="stylesheet" href="<?= $theme ?>/css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="<?= $theme ?>/css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>Coming Soon | PARAKALAND</title>

	<?php $this->head() ?>

</head>

<body class="stretched full-screen">

	<?php $this->beginBody() ?>

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="no-sticky noborder" style="margin-top: 15px;">

			<div id="header-wrap">

				<div class="container clearfix">

					<!-- Logo
					============================================= -->
					<div id="logo" class="divcenter">
						<a href="<?= Url::base() ?>" class="standard-logo" data-dark-logo="<?= Url::base() ?>/images/logo_normal_dark.png"><img class="divcenter" src="<?= Url::base() ?>/images/logo_normal_dark.png" alt="Parakaland Logo"></a>
					</div><!-- #logo end -->

				</div>

			</div>

		</header><!-- #header end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="feature-box fbox-center fbox-effect nobottomborder fadeIn animated" data-animate="fadeIn" data-delay="200">
						<div class="fbox-icon">
							<a href="#"><i class="icon-realestate-exchange"></i></a>
						</div>
					</div>

					<div class="heading-block title-center nobottomborder">
						<h1>We are currently Under Construction</h1>
						<span>Please check back again within Some Days as We're Pretty Close</span>
					</div>

				</div>

			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_half">
						Copyrights &copy; 2017 All Rights Reserved by PARAKALAND.
					</div>

					<div class="col_half col_last tright">

						<i class="icon-envelope2"></i> info.griyasamawa@parakaland.com <span class="middot">&middot;</span> <i class="icon-call"></i> +62-21-2210-2173

					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="<?= $theme ?>/js/jquery.js"></script>
	<script type="text/javascript" src="<?= $theme ?>/js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="<?= $theme ?>/js/functions.js"></script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>