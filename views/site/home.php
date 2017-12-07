<?php

use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = $model->company_name;
$theme = \yii::$app->view->theme->baseUrl;
?>

<div class="content-wrap">

	<section id="about-us" class="page-section">
		
		<div class="container clearfix">

			<div class="heading-block center">
				<img src="<?= Url::base() ?>/images/logo_normal_dark.png" alt="Griya Samawa Logo" style="width: 700px;margin-bottom: 15px;">
				<h5>
					Secara garis besar <span>GRIYA SAMAWA</span> dapat diartikan sebagai <i>&quot;rumah yang selalu diberikan ketentraman juga kedamaian, dipenuhi dengan cinta dan harapan, serta dinaungi oleh kasih sayang&quot;.</i> Tentu hal tersebut merupakan harapan besar dari <span>PARAKALAND</span> untuk seluruh penghuni <span>Cluster GRIYA SAMAWA</span> baik bagi yang sudah berkeluarga, maupun untuk pasangan yang baru menikah, ataupun bagi insan yang baru berencana untuk menjalin sebuah rumah tangga.
				</h5>
			</div>

			<div class="col_one_third">
				<div class="feature-box fbox-plain">
					<div class="fbox-icon">
						<a href="#"><i class="icon-realestate-my-house"></i></a>
					</div>
					<h3 class="t400">Variasi Tipe</h3>
					<p>Griya Samawa memiliki variasi tipe cluster sesuai dengan keinginan anda agar tercipta keluarga yang sakinah, mawadah dan warahmah.</p>
				</div>
			</div>

			<div class="col_one_third">
				<div class="feature-box fbox-plain">
					<div class="fbox-icon">
						<a href="#"><i class="icon-realestate-plan3"></i></a>
					</div>
					<h3 class="t400">Kemudahan & Keamanan</h3>
					<p>Keunggulan yang kami persembahkan untuk para penghuni cluster adalah yang terbaik di kelasnya.</p>
				</div>
			</div>

			<div class="col_one_third col_last">
				<div class="feature-box fbox-plain">
					<div class="fbox-icon">
						<a href="#"><i class="icon-realestate-credit"></i></a>
					</div>
					<h3 class="t400">Konsep Syariah</h3>
					<p>Cluster pertama di Tambun Selatan yang menerapkan konsep syariah secara harfiah.</p>
				</div>
			</div>

		</div>

	</section>

	<section id="cluster" class="page-section">

		<div class="container clearfix">

			<div class="fancy-title title-double-border center">
				<h1>
					<span>CLUSTER</span>
				</h1>
			</div>

			<div id="cluster_a">

				<div class="container clearfix">

					<div class="col_one_third bottommargin-sm center">
						<img data-animate="fadeInLeft" src="<?= Url::base() ?>/images/tipe_A.png" alt="Tipe A" class="fadeInLeft animated">
					</div>

					<div class="col_two_third bottommargin-sm col_last">

						<div class="heading-block topmargin-sm">
							<h3>Type 41/72 A</h3>
						</div>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero quod consequuntur quibusdam, enim expedita sed quia nesciunt incidunt accusamus necessitatibus modi adipisci officia libero accusantium esse hic, obcaecati, ullam, laboriosam!</p>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti vero, animi suscipit id facere officia. Aspernatur, quo, quos nisi dolorum aperiam fugiat deserunt velit rerum laudantium cum magnam.</p>

						<a href="#" class="button button-border button-dark button-rounded button-large noleftmargin topmargin-sm">Lihat Detail</a>

					</div>

				</div>

			</div>

			<div id="cluster_c">

				<div class="container clearfix">

					<div class="col_two_third bottommargin-sm">
						<div class="heading-block topmargin-sm">
							<h3>Type 41/72 C</h3>
						</div>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero quod consequuntur quibusdam, enim expedita sed quia nesciunt incidunt accusamus necessitatibus modi adipisci officia libero accusantium esse hic, obcaecati, ullam, laboriosam!</p>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti vero, animi suscipit id facere officia. Aspernatur, quo, quos nisi dolorum aperiam fugiat deserunt velit rerum laudantium cum magnam.</p>

						<a href="#" class="button button-border button-dark button-rounded button-large noleftmargin topmargin-sm">Lihat Detail</a>
					</div>

					<div class="col_one_third bottommargin-sm col_last center">
						<img data-animate="fadeInRight" src="<?= Url::base() ?>/images/tipe_B.png" alt="Tipe B" class="fadeInRight animated">
					</div>

				</div>

			</div>

		</div>

	</section>

	<div class="clear"></div>

	<div class="promo promo-dark promo-flat bottommargin-lg">
		<h3 class="t400 ls1">Special Offers on Villa Long Term Rentals &amp; Lease Agreements</h3>
		<a href="#" class="button button-dark button-large button-rounded">Contact Now</a>
	</div>

	<section id="contact" class="page-section">

		<div class="row norightmargin topmargin common-height">

			<div id="headquarters-map" class="col-md-5 gmap hidden-xs"></div>
			<div class="col-md-3" style="background-color: #E5E5E5;">
				<div style="padding: 40px;">
					<h4 class="font-body t600 ls1">Our Headquarters</h4>

					<div style="font-size: 15px; line-height: 1.7;">
						<address style="line-height: 1.7;">
							<strong>Indonesia:</strong><br>
							Jl. Borobudur Raya<br>
							Blok E4 No. 9 RT. 8 RW. 4<br>
							Kelurahan Aren Jaya<br>
							Bekasi, 17111.<br><br>
							<abbr title="Phone Number"><strong>Phone:</strong></abbr><br> <?= ($model->phone) ? $model->phone : 'Nomor Telepon'  ?><br>
							<abbr title="Email Address"><strong>Email:</strong></abbr><br> <?= ($model->email) ? $model->email : 'Alamat Email'  ?>
						</address>
					</div>
				</div>
			</div>
			<div class="col-md-4 bgcolor">
				<div style="padding: 40px;">
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

	</section>

</div>