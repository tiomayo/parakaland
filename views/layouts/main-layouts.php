
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" /><script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(e,n,t){function r(t){if(!n[t]){var o=n[t]={exports:{}};e[t][0].call(o.exports,function(n){var o=e[t][1][n];return r(o||n)},o,o.exports)}return n[t].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<t.length;o++)r(t[o]);return r}({1:[function(e,n,t){function r(){}function o(e,n,t){return function(){return i(e,[c.now()].concat(u(arguments)),n?null:this,t),n?void 0:this}}var i=e("handle"),a=e(2),u=e(3),f=e("ee").get("tracer"),c=e("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var p=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],d="api-",l=d+"ixn-";a(p,function(e,n){s[n]=o(d+n,!0,"api")}),s.addPageAction=o(d+"addPageAction",!0),s.setCurrentRouteName=o(d+"routeName",!0),n.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(e,n){var t={},r=this,o="function"==typeof n;return i(l+"tracer",[c.now(),e,t],r),function(){if(f.emit((o?"":"no-")+"fn-start",[c.now(),r,o],t),o)try{return n.apply(this,arguments)}finally{f.emit("fn-end",[c.now()],t)}}}};a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,n){m[n]=o(l+n)}),newrelic.noticeError=function(e){"string"==typeof e&&(e=new Error(e)),i("err",[e,c.now()])}},{}],2:[function(e,n,t){function r(e,n){var t=[],r="",i=0;for(r in e)o.call(e,r)&&(t[i]=n(r,e[r]),i+=1);return t}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],3:[function(e,n,t){function r(e,n,t){n||(n=0),"undefined"==typeof t&&(t=e?e.length:0);for(var r=-1,o=t-n||0,i=Array(o<0?0:o);++r<o;)i[r]=e[n+r];return i}n.exports=r},{}],4:[function(e,n,t){n.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(e,n,t){function r(){}function o(e){function n(e){return e&&e instanceof r?e:e?f(e,u,i):i()}function t(t,r,o,i){if(!d.aborted||i){e&&e(t,r,o);for(var a=n(o),u=m(t),f=u.length,c=0;c<f;c++)u[c].apply(a,r);var p=s[y[t]];return p&&p.push([b,t,r,a]),a}}function l(e,n){v[e]=m(e).concat(n)}function m(e){return v[e]||[]}function w(e){return p[e]=p[e]||o(t)}function g(e,n){c(e,function(e,t){n=n||"feature",y[t]=n,n in s||(s[n]=[])})}var v={},y={},b={on:l,emit:t,get:w,listeners:m,context:n,buffer:g,abort:a,aborted:!1};return b}function i(){return new r}function a(){(s.api||s.feature)&&(d.aborted=!0,s=d.backlog={})}var u="nr@context",f=e("gos"),c=e(2),s={},p={},d=n.exports=o();d.backlog=s},{}],gos:[function(e,n,t){function r(e,n,t){if(o.call(e,n))return e[n];var r=t();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,n,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return e[n]=r,r}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],handle:[function(e,n,t){function r(e,n,t,r){o.buffer([e],r),o.emit(e,n,t)}var o=e("ee").get("handle");n.exports=r,r.ee=o},{}],id:[function(e,n,t){function r(e){var n=typeof e;return!e||"object"!==n&&"function"!==n?-1:e===window?0:a(e,i,function(){return o++})}var o=1,i="nr@id",a=e("gos");n.exports=r},{}],loader:[function(e,n,t){function r(){if(!x++){var e=h.info=NREUM.info,n=d.getElementsByTagName("script")[0];if(setTimeout(s.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&n))return s.abort();c(y,function(n,t){e[n]||(e[n]=t)}),f("mark",["onload",a()+h.offset],null,"api");var t=d.createElement("script");t.src="https://"+e.agent,n.parentNode.insertBefore(t,n)}}function o(){"complete"===d.readyState&&i()}function i(){f("mark",["domContent",a()+h.offset],null,"api")}function a(){return E.exists&&performance.now?Math.round(performance.now()):(u=Math.max((new Date).getTime(),u))-h.offset}var u=(new Date).getTime(),f=e("handle"),c=e(2),s=e("ee"),p=window,d=p.document,l="addEventListener",m="attachEvent",w=p.XMLHttpRequest,g=w&&w.prototype;NREUM.o={ST:setTimeout,SI:p.setImmediate,CT:clearTimeout,XHR:w,REQ:p.Request,EV:p.Event,PR:p.Promise,MO:p.MutationObserver};var v=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1044.min.js"},b=w&&g&&g[l]&&!/CriOS/.test(navigator.userAgent),h=n.exports={offset:u,now:a,origin:v,features:{},xhrWrappable:b};e(1),d[l]?(d[l]("DOMContentLoaded",i,!1),p[l]("load",r,!1)):(d[m]("onreadystatechange",o),p[m]("onload",r)),f("mark",["firstbyte",u],null,"api");var x=0,E=e(4)},{}]},{},["loader"]);</script>
	<meta name="author" content="mlnprst" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lora:400,400i|Roboto:300,400,500,700|Rubik:400,600" rel="stylesheet">
	<link rel="stylesheet" href="http://canvashtml-cdn.semicolonweb.com/main.css" type="text/css" />

	<!-- Real Estate Demo Specific Stylesheet -->
	<link rel="stylesheet" href="http://canvashtml-cdn.semicolonweb.com/demos/real-estate/real-estate.css" type="text/css" />
	<link rel="stylesheet" href="http://canvashtml-cdn.semicolonweb.com/demos/real-estate/css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="http://canvashtml-cdn.semicolonweb.com/demos/real-estate/fonts.css" type="text/css" />
	<!-- / -->

	<!-- Bootstrap Select CSS -->
	<link rel="stylesheet" href="http://canvashtml-cdn.semicolonweb.com/css/components/bs-select.css" type="text/css" />

	<!-- Bootstrap Switch CSS -->
	<link rel="stylesheet" href="http://canvashtml-cdn.semicolonweb.com/css/components/bs-switches.css" type="text/css" />

	<!-- Range Slider CSS -->
	<link rel="stylesheet" href="http://canvashtml-cdn.semicolonweb.com/css/components/ion.rangeslider.css" type="text/css" />

	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<link rel="stylesheet" href="css/colors.php?color=2C3E50" type="text/css" />

	<!-- Document Title
	============================================= -->
	<title>PARAKALAND | Griya Samawa</title>


</head>

<body class="stretched side-push-panel">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Top Bar
		============================================= -->
		<div id="top-bar" class="transparent-topbar hidden-sm hidden-xs">

			<div class="container clearfix">

				<div class="col_half nobottommargin clearfix">

				</div>

				<div class="col_half fright col_last clearfix nobottommargin">

					<!-- Top Links
					============================================= -->
					<div class="top-links">
						<ul>
							<li class="hidden-sm"><a href="#"><i class="icon-call"></i> +62-21-22102137</a></li>
							<li class="hidden-sm"><a href="#"><i class="icon-mail"></i> info.griyasamawa@parakaland.com</a></li>
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
						<a href="index.php" data-dark-logo="http://parakaland.com/images/logo3.png" class="standard-logo"><img src="http://parakaland.com/images/logo3.png" alt="Parakaland Logo"></a>
						<a href="index.php" data-dark-logo="#" class="retina-logo"><img src="#" alt="Parakaland Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu" class="with-arrows">

						<ul>
							<li class="current"><a href="#" data-scrollto="#header"><div>Home</div></a></li>
							<li><a href="#" data-scrollto="#about-us"><div>About Us</div></a></li>
							<li><a href="#"><div>Cluster</div></a></li>
							<li><a href="#"><div>Gallery</div></a></li>
							<li><a href="#" data-scrollto="#contact-us"><div>Contact</div></a></li>
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
							<div class="slide" style="background: url('http://canvashtml-cdn.semicolonweb.com/demos/real-estate/images/hero/3.jpg') center center; background-size: cover; height: 100% !important;"></div>
							<div class="slide" style="background: url('http://canvashtml-cdn.semicolonweb.com/demos/real-estate/images/hero/4.jpg') center center; background-size: cover; height: 100% !important;"></div>
							<div class="slide" style="background: url('http://canvashtml-cdn.semicolonweb.com/demos/real-estate/images/hero/5.jpg') center center; background-size: cover; height: 100% !important;"></div>
						</div>
					</div>
				</div>
				<div class="vertical-middle" style="z-index: 3;">
					<div class="container center clearfix">
						<div class="emphasis-title nomargin">
							<h1>PARAKALAND.</h1>
							<span class="t300 uppercase" style="font-size: 18px; letter-spacing: 10px; color: rgba(255,255,255,0.9);">Value Function and Modern.</span>
						</div>
					</div>
				</div>
				<div class="video-wrap" style="position: absolute; top: 0; left: 0; height: 100%; z-index:1;">
					<div class="video-overlay real-estate-video-overlay" style="z-index: 1;"></div>
				</div>
			</div>

		</section><!-- #slider end -->

		<div class="tabs advanced-real-estate-tabs clearfix">
			<div class="container clearfix">
				<ul class="tab-nav clearfix">
					<li><a href="#tab-properties" data-scrollto="#tab-properties" data-offset="133">Cluster</a></li>
				</ul>
			</div>
			<div class="tab-container">
				<div class="container clearfix">
					<div class="tab-content clearfix" id="tab-properties">
						<form action="#" method="post" class="nobottommargin">
							<div class="row">
								<div class="col-md-2 col-sm-12 bottommargin-sm">
									<label for="" style="display:block;">Type</label>
									<input class="bt-switch" type="checkbox" checked data-on-text="Buy" data-off-text="Rent" data-on-color="themecolor" data-off-color="themecolor">
								</div>
								<div class="col-md-3 col-sm-6 col-xs-12 bottommargin-sm">
									<label for="">Choose Locations</label>
									<select class="selectpicker form-control" multiple data-live-search="true" data-size="6" style="width:100%;">
										<optgroup label="Alaskan/Hawaiian Time Zone">
											<option value="AK">Alaska</option>
											<option value="HI">Hawaii</option>
										</optgroup>
										<optgroup label="Pacific Time Zone">
											<option value="CA">California</option>
											<option value="NV">Nevada</option>
											<option value="OR">Oregon</option>
											<option value="WA">Washington</option>
										</optgroup>
										<optgroup label="Mountain Time Zone">
											<option value="AZ">Arizona</option>
											<option value="CO">Colorado</option>
											<option value="ID">Idaho</option>
											<option value="MT">Montana</option>
											<option value="NE">Nebraska</option>
											<option value="NM">New Mexico</option>
											<option value="ND">North Dakota</option>
											<option value="UT">Utah</option>
											<option value="WY">Wyoming</option>
										</optgroup>
										<optgroup label="Central Time Zone">
											<option value="AL">Alabama</option>
											<option value="AR">Arkansas</option>
											<option value="IL">Illinois</option>
											<option value="IA">Iowa</option>
											<option value="KS">Kansas</option>
											<option value="KY">Kentucky</option>
											<option value="LA">Louisiana</option>
											<option value="MN">Minnesota</option>
											<option value="MS">Mississippi</option>
											<option value="MO">Missouri</option>
											<option value="OK">Oklahoma</option>
											<option value="SD">South Dakota</option>
											<option value="TX">Texas</option>
											<option value="TN">Tennessee</option>
											<option value="WI">Wisconsin</option>
										</optgroup>
										<optgroup label="Eastern Time Zone">
											<option value="CT">Connecticut</option>
											<option value="DE">Delaware</option>
											<option value="FL">Florida</option>
											<option value="GA">Georgia</option>
											<option value="IN">Indiana</option>
											<option value="ME">Maine</option>
											<option value="MD">Maryland</option>
											<option value="MA">Massachusetts</option>
											<option value="MI">Michigan</option>
											<option value="NH">New Hampshire</option>
											<option value="NJ">New Jersey</option>
											<option value="NY">New York</option>
											<option value="NC">North Carolina</option>
											<option value="OH">Ohio</option>
											<option value="PA">Pennsylvania</option>
											<option value="RI">Rhode Island</option>
											<option value="SC">South Carolina</option>
											<option value="VT">Vermont</option>
											<option value="VA">Virginia</option>
											<option value="WV">West Virginia</option>
										</optgroup>
									</select>
								</div>
								<div class="col-md-3 col-sm-6 col-xs-12 bottommargin-sm">
									<label for="">Property Type</label>
									<select class="selectpicker form-control" data-size="6" style="width:100%; line-height: 30px;">
										<option value="Any">Any</option>
										<optgroup label="Residential">
											<option value="Apartment">Apartment</option>
											<option value="Condo">Condo</option>
											<option value="Villa">Villa</option>
											<option value="Building">Building</option>
										</optgroup>
										<optgroup label="Commercial">
											<option value="Shop">Shop</option>
											<option value="Office">Office</option>
											<option value="Warehouse">Warehouse</option>
										</optgroup>
									</select>
								</div>
								<div class="col-md-2 col-sm-6 col-xs-6 bottommargin-sm">
									<label for="">Beds</label>
									<select class="selectpicker form-control" multiple data-size="6" data-placeholder="Any" style="width:100%; line-height: 30px;">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5+">5+</option>
									</select>
								</div>
								<div class="col-md-2 col-sm-6 col-xs-6 bottommargin-sm">
									<label for="">Baths</label>
									<select class="selectpicker form-control" multiple data-size="6" data-placeholder="Any" style="width:100%; line-height: 30px;">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5+">5+</option>
									</select>
								</div>
								<div class="clear"></div>
								<div class="col-md-4 col-sm-6 col-xs-12">
									<label for="" style="margin-bottom: 20px !important;">Price Range</label>
									<input class="price-range-slider" />
								</div>
								<div class="clear visible-xs bottommargin-sm"></div>
								<div class="col-md-4 col-md-offset-1 col-sm-6 col-xs-12">
									<label for="" style="margin-bottom: 20px !important;">Property Area</label>
									<input class="area-range-slider" />
								</div>
								<div class="col-md-offset-1 col-md-2 col-sm-12 clearfix">
									<button class="button button-3d button-rounded btn-block nomargin" style="margin-top: 35px !important;">Search</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>

		</div>

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="col_one_third">
						<div class="feature-box fbox-plain">
							<div class="fbox-icon">
								<a href="#"><i class="icon-realestate-my-house"></i></a>
							</div>
							<h3 class="t400">Hassle Free</h3>
							<p>Canvas provides support for Native HTML5 Videos that can be added to a Full Width Background.</p>
						</div>
					</div>

					<div class="col_one_third">
						<div class="feature-box fbox-plain">
							<div class="fbox-icon">
								<a href="#"><i class="icon-realestate-hammer"></i></a>
							</div>
							<h3 class="t400">Well Constructed</h3>
							<p>Display your Content attractively using Parallax Sections that have unlimited customizable areas.</p>
						</div>
					</div>

					<div class="col_one_third col_last">
						<div class="feature-box fbox-plain">
							<div class="fbox-icon">
								<a href="#"><i class="icon-realestate-garage"></i></a>
							</div>
							<h3 class="t400">Free Utilites</h3>
							<p>You have complete easy control on each &amp; every element that provides endless customization possibilities.</p>
						</div>
					</div>

					<div class="clear"></div>

					<div class="col_one_third">
						<div class="feature-box fbox-plain">
							<div class="fbox-icon">
								<a href="#"><i class="icon-realestate-rent"></i></a>
							</div>
							<h3 class="t400">Flexible Rentals</h3>
							<p>Canvas provides support for Native HTML5 Videos that can be added to a Full Width Background.</p>
						</div>
					</div>

					<div class="col_one_third">
						<div class="feature-box fbox-plain">
							<div class="fbox-icon">
								<a href="#"><i class="icon-realestate-credit"></i></a>
							</div>
							<h3 class="t400">Easy Financing</h3>
							<p>Display your Content attractively using Parallax Sections that have unlimited customizable areas.</p>
						</div>
					</div>

					<div class="col_one_third col_last">
						<div class="feature-box fbox-plain">
							<div class="fbox-icon">
								<a href="#"><i class="icon-realestate-doc"></i></a>
							</div>
							<h3 class="t400">Solid Paperwork</h3>
							<p>You have complete easy control on each &amp; every element that provides endless customization possibilities.</p>
						</div>
					</div>

					<div class="clear"></div><div class="line topmargin-sm bottommargin-lg"></div>

					<div style="position: relative;">
						<div class="heading-block nobottomborder">
							<h3>Featured Properties</h3>
						</div>

						<a href="#" class="button button-small button-rounded button-border button-border-thin t500 nomargin" style="position: absolute; top: 7px; right: 0;">Check All</a>

						<div class="real-estate owl-carousel image-carousel carousel-widget bottommargin-lg" data-margin="10" data-nav="true" data-loop="true" data-pagi="false" data-items-xxs="1" data-items-xs="1" data-items-sm="2" data-items-md="3" data-items-lg="3">

							<div class="oc-item">
								<div class="real-estate-item">
									<div class="real-estate-item-image">
										<div class="label label-danger bgcolor-2">For Sale</div>
										<a href="#">
											<img src="http://canvashtml-cdn.semicolonweb.com/demos/real-estate/images/items/1.jpg" alt="Image 1">
										</a>
										<div class="real-estate-item-price">
											$1.2m<span>Leasehold</span>
										</div>
										<div class="real-estate-item-info clearfix">
											<a href="#"><i class="icon-line-stack-2"></i></a>
											<a href="#"><i class="icon-line-heart"></i></a>
										</div>
									</div>

									<div class="real-estate-item-desc">
										<h3><a href="#">3 Bedroom Villa</a></h3>
										<span>Seminyak Area</span>

										<a href="#" class="real-estate-item-link"><i class="icon-info"></i></a>

										<div class="line" style="margin-top: 15px; margin-bottom: 15px;"></div>

										<div class="real-estate-item-features t500 font-primary clearfix">
											<div class="col-md-4 nopadding">Beds: <span class="color">3</span></div>
											<div class="col-md-4 nopadding">Baths: <span class="color">3</span></div>
											<div class="col-md-4 nopadding">Area: <span class="color">150 sqm</span></div>
											<div class="col-md-4 nopadding">Pool: <span class="text-success"><i class="icon-check-sign"></i></span></div>
											<div class="col-md-4 nopadding">Internet: <span class="text-success"><i class="icon-check-sign"></i></span></div>
											<div class="col-md-4 nopadding">Cleaning: <span class="text-danger"><i class="icon-minus-sign-alt"></i></span></div>
										</div>
									</div>
								</div>
							</div>
							<div class="oc-item">
								<div class="real-estate-item">
									<div class="real-estate-item-image">
										<div class="label label-success">Hot Deal</div>
										<a href="#">
											<img src="http://canvashtml-cdn.semicolonweb.com/demos/real-estate/images/items/2.jpg" alt="Image 2">
										</a>
										<div class="real-estate-item-price">
											$200,000<span>bi-annually</span>
										</div>
										<div class="real-estate-item-info clearfix">
											<a href="#"><i class="icon-line-stack-2"></i></a>
											<a href="#"><i class="icon-line-heart"></i></a>
										</div>
									</div>

									<div class="real-estate-item-desc">
										<h3><a href="#">3 Bedroom Villa</a></h3>
										<span>Seminyak Area</span>

										<a href="#" class="real-estate-item-link"><i class="icon-info"></i></a>

										<div class="line" style="margin-top: 15px; margin-bottom: 15px;"></div>

										<div class="real-estate-item-features t500 clearfix">
											<div class="col-md-4 nopadding">Beds: <span class="color">3</span></div>
											<div class="col-md-4 nopadding">Baths: <span class="color">3</span></div>
											<div class="col-md-4 nopadding">Area: <span class="color">150 sqm</span></div>
											<div class="col-md-4 nopadding">Pool: <span class="text-success"><i class="icon-check-sign"></i></span></div>
											<div class="col-md-4 nopadding">Internet: <span class="text-success"><i class="icon-check-sign"></i></span></div>
											<div class="col-md-4 nopadding">Cleaning: <span class="text-success"><i class="icon-check-sign"></i></span></div>
										</div>
									</div>
								</div>
							</div>
							<div class="oc-item">
								<div class="real-estate-item">
									<div class="real-estate-item-image">
										<div class="label label-danger">Long Term Rental</div>
										<a href="#">
											<img src="http://canvashtml-cdn.semicolonweb.com/demos/real-estate/images/items/4.jpg" alt="Image 3">
										</a>
										<div class="real-estate-item-price">
											$1600<span>per month</span>
										</div>
										<div class="real-estate-item-info clearfix">
											<a href="#"><i class="icon-line-stack-2"></i></a>
											<a href="#"><i class="icon-line-heart"></i></a>
										</div>
									</div>

									<div class="real-estate-item-desc">
										<h3><a href="#">3 Bedroom Villa</a></h3>
										<span>Seminyak Area</span>

										<a href="#" class="real-estate-item-link"><i class="icon-info"></i></a>

										<div class="line" style="margin-top: 15px; margin-bottom: 15px;"></div>

										<div class="real-estate-item-features t500 clearfix">
											<div class="col-md-4 nopadding">Beds: <span class="color">3</span></div>
											<div class="col-md-4 nopadding">Baths: <span class="color">3</span></div>
											<div class="col-md-4 nopadding">Area: <span class="color">150 sqm</span></div>
											<div class="col-md-4 nopadding">Pool: <span class="text-success"><i class="icon-check-sign"></i></span></div>
											<div class="col-md-4 nopadding">Internet: <span class="text-success"><i class="icon-check-sign"></i></span></div>
											<div class="col-md-4 nopadding">Cleaning: <span class="text-success"><i class="icon-check-sign"></i></span></div>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>

					<div class="clear"></div>

					<div class="promo promo-dark promo-flat bottommargin-lg">
						<h3 class="t400 ls1">Special Offers on Villa Long Term Rentals &amp; Lease Agreements</h3>
						<a href="#" class="button button-dark button-large button-rounded">Contact Now</a>
					</div>

					<div class="row real-estate-properties clearfix">

						<div class="col-md-7">
							<a href="#" style="background: url('http://canvashtml-cdn.semicolonweb.com/demos/real-estate/images/cities/4.jpg') no-repeat bottom center; background-size: cover;">
								<div class="vertical-middle dark center">
									<div class="heading-block nomargin noborder">
										<h3 class="capitalize t500">California</h3>
										<span style="margin-top: 5px; font-size: 17px;">23 Properties</span>
									</div>
								</div>
							</a>
						</div>
						<div class="col-md-5">
							<a href="#" style="background: url('http://canvashtml-cdn.semicolonweb.com/demos/real-estate/images/cities/2.jpg') no-repeat center center; background-size: cover;">
								<div class="vertical-middle dark center">
									<div class="heading-block nomargin noborder">
										<h3 class="capitalize t500">New York</h3>
										<span style="margin-top: 5px; font-size: 17px;">12 Properties</span>
									</div>
								</div>
							</a>
						</div>

						<div class="col-md-4">
							<a href="#" style="background: url('http://canvashtml-cdn.semicolonweb.com/demos/real-estate/images/cities/3.jpg') no-repeat center center; background-size: cover;">
								<div class="vertical-middle dark center">
									<div class="heading-block nomargin noborder">
										<h3 class="capitalize t500">San Francisco</h3>
										<span style="margin-top: 5px; font-size: 17px;">8 Properties</span>
									</div>
								</div>
							</a>
						</div>
						<div class="col-md-4">
							<a href="#" style="background: url('http://canvashtml-cdn.semicolonweb.com/demos/real-estate/images/cities/1.jpg') no-repeat center center; background-size: cover;">
								<div class="vertical-middle dark center">
									<div class="heading-block nomargin noborder">
										<h3 class="capitalize t500">Texas</h3>
										<span style="margin-top: 5px; font-size: 17px;">31 Properties</span>
									</div>
								</div>
							</a>
						</div>
						<div class="col-md-4">
							<a href="#" style="background: url('http://canvashtml-cdn.semicolonweb.com/demos/real-estate/images/cities/5.jpg') no-repeat center center; background-size: cover;">
								<div class="vertical-middle dark center">
									<div class="heading-block nomargin noborder">
										<h3 class="capitalize t500">New Orleans</h3>
										<span style="margin-top: 5px; font-size: 17px;">19 Properties</span>
									</div>
								</div>
							</a>
						</div>

					</div>

				</div>

				<div id="contact-us" class="row norightmargin topmargin bottommargin-lg common-height">
					<div id="headquarters-map" class="col-md-5 gmap hidden-xs"></div>
					<div class="col-md-3" style="background-color: #E5E5E5;">
						<div style="padding: 40px;">
							<h4 class="font-body t600 ls1">Our Headquarters</h4>

							<div style="font-size: 15px; line-height: 1.7;">
								<address style="line-height: 1.7;">
									<strong>North America:</strong><br>
									795 Folsom Ave, Suite 600<br>
									San Francisco, CA 94107.<br><br>
									<abbr title="Phone Number"><strong>Phone:</strong></abbr> (91) 8547 632521<br>
									<abbr title="Email Address"><strong>Email:</strong></abbr> real-estate@canvas.com
								</address>

								<div class="clear topmargin-sm"></div>

								<h4 class="font-body t500" style="font-size: 17px; margin-bottom: 10px;">Working Hours:</h4>

								<abbr title="Mondays to Fridays"><strong>Mon-Fri:</strong></abbr> 10AM to 6PM<br>
								<abbr title="Saturday"><strong>Saturday:</strong></abbr> 11AM to 3PM<br>
								<abbr title="Sunday"><strong>Sunday:</strong></abbr> Closed
							</div>
						</div>
					</div>
					<div class="col-md-4 bgcolor">
						<div class="col-padding">
							<div class="quick-contact-widget dark clearfix">

								<h3 class="capitalize ls1 t400">Get a Quick Quote</h3>

								<div class="quick-contact-form-result"></div>

								<form id="quick-contact-form" name="quick-contact-form" action="include/quickcontact.php" method="post" class="quick-contact-form nobottommargin">

									<div class="form-process"></div>

									<input type="text" class="required sm-form-control input-block-level not-dark" id="quick-contact-form-name" name="quick-contact-form-name" value="" placeholder="Full Name" />

									<input type="email" class="required sm-form-control email input-block-level not-dark" id="quick-contact-form-email" name="quick-contact-form-email" value="" placeholder="Email Address" />

									<input type="text" class="required sm-form-control input-block-level not-dark" id="quick-contact-form-phone" name="quick-contact-form-phone" value="" placeholder="Phone Number (+1-555-2221)" />

									<textarea class="required sm-form-control input-block-level not-dark short-textarea" id="quick-contact-form-message" name="quick-contact-form-message" rows="5" cols="30" placeholder="What are you Looking for? (Ex: Villa on the Beach)"></textarea>

									<input type="text" class="hidden" id="quick-contact-form-botcheck" name="quick-contact-form-botcheck" value="" />

									<button type="submit" id="quick-contact-form-submit" name="quick-contact-form-submit" class="button button-small button-rounded button-light button-white nomargin" value="submit">Send Email</button>

								</form>

							</div>
						</div>
					</div>
				</div>

				<div id="about-us" class="container clear-bottommargin clearfix">

					<div class="col_two_third">

						<div class="tabs tabs-justify tabs-tb tabs-alt nobottommargin clearfix" id="realestate-tabs" data-active="2">

							<ul class="tab-nav clearfix">
								<li><a href="#realestate-tab-1">Why Us?</a></li>
								<li><a href="#realestate-tab-2">Properties</a></li>
								<li><a href="#realestate-tab-3">Legal</a></li>
							</ul>

							<div class="tab-container">

								<div class="tab-content clearfix" id="realestate-tab-1">
									<p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.
									<div class="col_one_fourth nobottommargin center">
										<div class="counter ls1 t600" style="color: #D2D2D2;"><span data-from="100" data-to="964" data-refresh-interval="50" data-speed="2000"></span></div>
										<h5>Floors Built</h5>
									</div>

									<div class="col_one_fourth nobottommargin center">
										<div class="counter ls1 t600" style="color: #D2D2D2;"><span data-from="100" data-to="8514" data-refresh-interval="50" data-speed="2500"></span></div>
										<h5>Employees</h5>
									</div>

									<div class="col_one_fourth nobottommargin center">
										<div class="counter ls1 t600" style="color: #D2D2D2;"><span data-from="100" data-to="458" data-refresh-interval="50" data-speed="3500"></span></div>
										<h5>Happy Clients</h5>
									</div>

									<div class="col_one_fourth nobottommargin center col_last">
										<div class="counter ls1 t600" style="color: #D2D2D2;"><span data-from="14" data-to="159" data-refresh-interval="15" data-speed="2700"></span></div>
										<h5>Cities Served</h5>
									</div>
								</div>
								<div class="tab-content clearfix" id="realestate-tab-2">
									<p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
									<div class="row clearfix">
										<div class="col-sm-4">
											<ul class="iconlist nobottommargin">
												<li><i class="icon-ok"></i> 100% Assurance</li>
												<li><i class="icon-ok"></i> Hard Working</li>
												<li><i class="icon-ok"></i> Trustworthy</li>
											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="iconlist nobottommargin">
												<li><i class="icon-ok"></i> Intelligent</li>
												<li><i class="icon-ok"></i> Always Curious</li>
												<li><i class="icon-ok"></i> Perfectionists</li>
											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="iconlist nobottommargin">
												<li><i class="icon-ok"></i> Friendly &amp; Helpful</li>
												<li><i class="icon-ok"></i> Accomodating Nature</li>
												<li><i class="icon-ok"></i> Available 24x7</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="tab-content clearfix" id="realestate-tab-3">

									<div class="clear-bottommargin-sm">
										<div class="row clearfix">
											<div class="col-sm-7 bottommargin-sm">
												<p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor.</p>
												<div class="clear-bottommargin-sm">
													<div class="row clearfix">
														<div class="col-sm-6 bottommargin-sm">
															<address>
																<strong>Headquarters:</strong><br>
																795 Folsom Ave, Suite 600<br>
																San Francisco, CA 94107<br>
															</address>
														</div>
														<div class="col-sm-6 bottommargin-sm">
															<abbr title="Phone Number"><strong>Phone:</strong></abbr> (91) 8547 632521<br>
															<abbr title="Fax"><strong>Fax:</strong></abbr> (91) 11 4752 1433<br>
															<abbr title="Email Address"><strong>Email:</strong></abbr> info@canvas.com
														</div>
													</div>
												</div>
											</div>
											<div class="col-sm-5 bottommargin-sm">
												<img src="https://maps.googleapis.com/maps/api/staticmap?center=-37.814107,144.963280&zoom=12&markers=-37.814107,144.963280&size=300x180" alt="Google Map" class="img-thumbnail">
											</div>
										</div>
									</div>

								</div>

							</div>

						</div>

					</div>

					<div class="col_one_third col_last">

						<h4 class="center">Top Builders</h4>

						<ul class="clients-grid grid-2 nobottommargin clearfix">
							<li style="padding: 20px;"><a href="#" style="opacity: 0.9"><img src="http://canvashtml-cdn.semicolonweb.com/demos/real-estate/images/builders/1.png" alt="Clients"></a></li>
							<li style="padding: 20px;"><a href="#" style="opacity: 0.9"><img src="http://canvashtml-cdn.semicolonweb.com/demos/real-estate/images/builders/2.png" alt="Clients"></a></li>
							<li style="padding: 20px;"><a href="#" style="opacity: 0.9"><img src="http://canvashtml-cdn.semicolonweb.com/demos/real-estate/images/builders/3.png" alt="Clients"></a></li>
							<li style="padding: 20px;"><a href="#" style="opacity: 0.9"><img src="http://canvashtml-cdn.semicolonweb.com/demos/real-estate/images/builders/4.png" alt="Clients"></a></li>
						</ul>

					</div>

					<div class="clear"></div>

				</div>

			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap clearfix">

					<div class="col_two_fifth">

						<div class="widget clearfix">

							<img src="http://canvashtml-cdn.semicolonweb.com/demos/real-estate/images/logo@2x.png" style="position: relative; opacity: 0.85; left: -10px; max-height: 80px; margin-bottom: 20px;" alt="Footer Logo">

							<p>We believe in <strong>Simple</strong>, <strong>Creative</strong> &amp; <strong>Flexible</strong> Design Standards with a Retina &amp; Responsive Approach. Browse the amazing Features this template offers.</p>

							<div class="line" style="margin: 30px 0;"></div>

							<p class="ls1 t300" style="opacity: 0.6; font-size: 13px;">Copyrights &copy; 2017 Canvas: Real Estate</p>

						</div>

					</div>

					<div class="col_three_fifth col_last">

						<div class="col_half">
							<div class="row">

								<h4 class="ls1 t400 uppercase">Popular Locations</h4>

								<div class="col-xs-6 bottommargin-sm widget_links widget_real_estate_popular">
									<ul>
										<li><a href="#"><i class="icon-map-marker2"></i> California</a></li>
										<li><a href="#"><i class="icon-map-marker2"></i> Nevada</a></li>
										<li><a href="#"><i class="icon-map-marker2"></i> Hawaii</a></li>
										<li><a href="#"><i class="icon-map-marker2"></i> Washington</a></li>
										<li><a href="#"><i class="icon-map-marker2"></i> Ottawa</a></li>
										<li><a href="#"><i class="icon-map-marker2"></i> Virginia</a></li>
										<li><a href="#"><i class="icon-map-marker2"></i> Ohio</a></li>
									</ul>
								</div>

								<div class="col-xs-6 bottommargin-sm widget_links widget_real_estate_popular">
									<ul>
										<li><a href="#"><i class="icon-map-marker2"></i> Oregon</a></li>
										<li><a href="#"><i class="icon-map-marker2"></i> Colorado</a></li>
										<li><a href="#"><i class="icon-map-marker2"></i> Kentucky</a></li>
										<li><a href="#"><i class="icon-map-marker2"></i> Texas</a></li>
										<li><a href="#"><i class="icon-map-marker2"></i> Miami</a></li>
										<li><a href="#"><i class="icon-map-marker2"></i> New York</a></li>
										<li><a href="#"><i class="icon-map-marker2"></i> New Jersey</a></li>
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

							<div class="widget subscribe-widget subscribe-form clearfix" data-loader="button">
								<div class="widget-subscribe-form-result"></div>
								<form action="include/subscribe.php" role="form" method="post" class="nobottommargin">
									<input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="sm-form-control not-dark required email" placeholder="Enter your Email">
									<button class="button button-3d button-black noleftmargin norightmargin" style="margin-top: 15px;" type="submit">Subscribe</button>
								</form>
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
	<script type="text/javascript" src="http://canvashtml-cdn.semicolonweb.com/js/jquery.js"></script>

	<!-- Google Map JavaScripts
	============================================= -->
	<script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyAO2BYvn4xyrdisvP8feA4AS_PGZFxJDp4"></script>
	<script type="text/javascript" src="http://canvashtml-cdn.semicolonweb.com/js/jquery.gmap.js"></script>

	<!-- Bootstrap Select Plugin -->
	<script type="text/javascript" src="http://canvashtml-cdn.semicolonweb.com/js/components/bs-select.js"></script>

	<!-- Bootstrap Switch Plugin -->
	<script type="text/javascript" src="http://canvashtml-cdn.semicolonweb.com/js/components/bs-switches.js"></script>

	<!-- Range Slider Plugin -->
	<script type="text/javascript" src="http://canvashtml-cdn.semicolonweb.com/js/components/rangeslider.min.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="http://canvashtml-cdn.semicolonweb.com/js/functions.js"></script>


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

		jQuery(window).load(function(){

			// Google Map
			jQuery('#headquarters-map').gMap({
				address: 'New York, USA',
				maptype: 'ROADMAP',
				zoom: 13,
				markers: [
					{
						address: "New York, USA",
						html: "New York, USA",
						icon: {
							image: "http://canvashtml-cdn.semicolonweb.com/images/icons/map-icon-red.png",
							iconsize: [32, 36],
							iconanchor: [14,44]
						}
					}
				],
				doubleclickzoom: false,
				controls: {
					panControl: false,
					zoomControl: false,
					mapTypeControl: false,
					scaleControl: false,
					streetViewControl: false,
					overviewMapControl: false
				},
				styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"color":"#F0AD4E"},{"lightness":60}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#2C3E50"},{"visibility":"on"}]}]
			});

		});

	</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-23255544-12', 'auto');
  ga('send', 'pageview');
</script><script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"839484a19a","applicationID":"5289971","transactionName":"ZQEDZxZUD0FZVkxfX1xLNEENGglGVVkXVVFcEgBAS1EEX1cYSlNRXkkEQBBUFVcVBxZGWEI=","queueTime":0,"applicationTime":0,"atts":"SUYAEV5OHE8=","errorBeacon":"bam.nr-data.net","agent":""}</script></body>
</html>