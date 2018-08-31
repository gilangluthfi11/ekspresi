<!-- About -->
	<div id="about" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Section header -->
			<div class="section-header text-center">
				<img class="logo" src="<?php echo asset_url();?>frontend/img/logo/logo.png" alt="logo">
				<br>
				<br>
				<h2 class="heading2">Ekspresi Coworking Space</h2>
				<p class="tag-line">Explore yourself, Be imaginative</p>
			</div>
			<!-- /Section header -->

			<!-- Row -->
			<div class="row">

				<!-- about -->
				<div class="col-md-8 col-md-offset-2">
					<div class="about">
						<h3>Tentang Ekspresi Coworking Space</h3>
						<p class="justify">
						<strong>Kenapa Ekspresi?</strong> 
						<br>
						Semua berawal dari kata ekspresi yang dapat di artikan sebagai proses menyatakan dengan, memperlihatkan dan menyatakan maksud, gagasan, ide, perasaan, dan sebagainya. Dari situlah kami berfikiran membuat sebuah ruang dimana dapat dijadikan sebagai wadah dalam mengekspresikan ide dan gagasan dari individu atau kelompok untuk saling berkolaborasi, mendukung satu sama lain, dan bertukar ide kreatif.
						<br>
						Ruang kami dapat kalian gunakan sebagai tempat untuk menuangkan segala kegiatan kalian. Kami mendukung para <em>creator</em> inspiratif untuk mengembangkan karyanya. Ruangan kami juga mendukung sebagai tempat untuk diskusi serta mengadakan <em>event</em>.
						<br>
						<br>
						Kami berharap Ekspresi Coworking Space dapat menjadi salah satu ruang yang dapat mendukung kegiatan mahasiswa, <em>freelancer</em>, <em>startup</em> dan <em>enterpreneur</em>.
						Ayo bersama kami mendukung dan mengembangkan industri kreatif di Yogyakarta. Kami akan selalu ada buat kamu wahai para <em>creative people</em>.
						</p>
						<br>
						<div class="text-center">
							<h5>Jam Oprasional</h5>
							<p>Senin - Sabtu : 10.00 - 24.00</p>
							<p>Minggu : 16.00 - 24.00</p>
						</div>
					</div>
				</div>
				<!-- /about -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /About -->

	<!-- Why Choose Us -->
	<div id="facilities" class="section md-padding bg-grey">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- why choose us content -->
				<div class="col-md-6">
					<div class="section-header">
						<h2 class="title">Fasilitas</h2>
					</div>
					<p class="justify">Ekspresi Coworking Space menyediakan fasilitas untuk mendukung kegiatan kamu, apa aja sih fasilitas yang kami sediakan?</p>
					<div class="row">
						<div class="col-md-6">
							<div class="feature">
								<i class="fa fa-laptop"></i>
								<p>Meja Kerja</p>
							</div>
							<div class="feature">
								<i class="fa fa-wifi"></i>
								<p>Internet Berkecepatan Tinggi</p>
							</div>
							<div class="feature">
								<i class="fa fa-coffee"></i>
								<p>Free Flow Snacks & Minuman</p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="feature">
								<i class="fa fa-cutlery"></i>
								<p>Pantry</p>
							</div>
							<div class="feature">
								<i class="fa fa-gamepad"></i>
								<p>Ruang Santai & Area Bermain</p>
							</div>
							<div class="feature">
								<i class="fa fa-group"></i>
								<p>Ruang Meeting & Ruang Event</p>
							</div>
						</div>
					</div>
				</div>
				<!-- /why choose us content -->

				<!-- About slider -->
				<div class="col-md-6">
					<div id="about-slider" class="owl-carousel owl-theme">
						<img class="img-responsive" src="<?php echo asset_url();?>frontend/img/fclt/f1.jpg" alt="">
						<img class="img-responsive" src="<?php echo asset_url();?>frontend/img/fclt/f2.jpg" alt="">
						<img class="img-responsive" src="<?php echo asset_url();?>frontend/img/fclt/f3.jpg" alt="">
						<img class="img-responsive" src="<?php echo asset_url();?>frontend/img/fclt/f4.jpg" alt="">
						<img class="img-responsive" src="<?php echo asset_url();?>frontend/img/fclt/f5.jpg" alt="">
						<img class="img-responsive" src="<?php echo asset_url();?>frontend/img/fclt/f6.jpg" alt="">
					</div>
				</div>
				<!-- /About slider -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Why Choose Us -->

	<!-- Pricing -->
	<div id="pricing" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Paket Harga</h2>
				</div>
				<!-- /Section header -->
				
				<div class="row">
					<!-- Personal Package -->
					<div class="col-md-4 col-sm-4">
						<a class="package text-center" href="javascript:void(0)">
							<h4 onclick="price_personal()">Paket Personal</h4>
						</a>
					</div>
					<!-- End Personal Package -->
					<!-- Grup Package -->
					<div class="col-md-4 col-sm-4">
						<a class="package text-center" href="javascript:void(0)">
							<h4 onclick="price_grup()">Paket Grup</h4>
						</a>
					</div>
					<!-- End Grup Package -->
					<!-- Space Package -->
					<div class="col-md-4 col-sm-4">
						<a class="package text-center" href="javascript:void(0)">
							<h4 onclick="price_space()">Paket Space</h4>
						</a>
					</div>
					<!-- End Space Package -->
				</div>
				
				<!-- List Personal Price -->
				<div id="personal" style="display:block;">
				<!-- pricing -->
				<div class="col-md-3 col-sm-6">
					<div class="pricing">
						<div class="price-head">
							<span class="price-title">Daily Personal</span>
							<div class="price">
								<h3>35K<span class="duration">/ hari</span></h3>
							</div>
						</div>
						<ul class="price-content">
							<li>
								<p>Meja Kerja</p>
							</li>
							<li>
								<p>Akses Internet</p>
							</li>
							<li>
								<p>Free Print 10 Lembar</p>
							</li>
							<li>
								<p>Free Flow Snacks & Minuman</p>
							</li>
							<li>
								<p>Akses Pantry, Ruang Santai, & Area Bermain</p>
							</li>
						</ul>
					</div>
				</div>
				<!-- /pricing -->

				<!-- pricing -->
				<div class="col-md-3 col-sm-6">
					<div class="pricing">
						<div class="price-head">
							<span class="price-title">Weekly Personal</span>
							<div class="price">
								<h3>125K<span class="duration">/ minggu</span></h3>
							</div>
						</div>
						<ul class="price-content">
							<li>
								<p>Meja Kerja</p>
							</li>
							<li>
								<p>Akses Internet</p>
							</li>
							<li>
								<p>Free Print 10 Lembar/hari</p>
							</li>
							<li>
								<p>Free Flow Snacks & Minuman</p>
							</li>
							<li>
								<p>Akses Pantry, Ruang Santai, & Area Bermain</p>
							</li>
						</ul>
					</div>
				</div>
				<!-- /pricing -->

				<!-- pricing -->
				<div class="col-md-3 col-sm-6">
					<div class="pricing">
						<div class="price-head">
							<span class="price-title">Monthly Personal</span>
							<div class="price">
								<h3>450K<span class="duration">/ bulan</span></h3>
							</div>
						</div>
						<ul class="price-content">
							<li>
								<p>Meja Kerja</p>
							</li>
							<li>
								<p>Akses Internet</p>
							</li>
							<li>
								<p>Free Print 10 Lembar/hari</p>
							</li>
							<li>
								<p>Free Flow Snacks & Minuman</p>
							</li>
							<li>
								<p>Akses Pantry, Ruang Santai, & Area Bermain</p>
							</li>
						</ul>
					</div>
				</div>
				<!-- /pricing -->

				<!-- pricing -->
				<div class="col-md-3 col-sm-6">
					<div class="pricing">
						<div class="price-head">
							<span class="price-title">Night Shift Personal</span>
							<div class="price">
								<h3>20K<span class="duration">/ hari</span></h3>
							</div>
						</div>
						<ul class="price-content">
							<li>
								<p>Mulai 18.00 - 24.00</p>
							</li>
							<li>
								<p>Meja Kerja</p>
							</li>
							<li>
								<p>Akses Internet</p>
							</li>
							<li>
								<p>Free Flow Snacks & Minuman</p>
							</li>
							<li>
								<p>Akses Pantry, Ruang Santai, & Area Bermain</p>
							</li>
						</ul>
					</div>
				</div>
				<!-- /pricing -->
				</div>
				
				<!-- List Grup Price -->
				<div id="grup" style="display:none;">
				<!-- pricing -->
				<div class="col-md-3 col-sm-6">
					<div class="pricing">
						<div class="price-head">
							<span class="price-title">Daily Grup</span>
							<div class="price">
								<h3>120K<span class="duration">/ hari</span></h3>
							</div>
						</div>
						<ul class="price-content">
							<li>
								<p>Akses 4 Orang</p>
							</li>
							<li>
								<p>Meja Kerja</p>
							</li>
							<li>
								<p>Akses Internet</p>
							</li>
							<li>
								<p>Free Print 30 Lembar</p>
							</li>
							<li>
								<p>Free Flow Snacks & Minuman</p>
							</li>
							<li>
								<p>Akses Pantry, Ruang Santai, & Area Bermain</p>
							</li>
						</ul>
					</div>
				</div>
				<!-- /pricing -->

				<!-- pricing -->
				<div class="col-md-3 col-sm-6">
					<div class="pricing">
						<div class="price-head">
							<span class="price-title">Weekly Grup</span>
							<div class="price">
								<h3>400K<span class="duration">/ minggu</span></h3>
							</div>
						</div>
						<ul class="price-content">
							<li>
								<p>Akses 4 Orang</p>
							</li>
							<li>
								<p>Meja Kerja</p>
							</li>
							<li>
								<p>Akses Internet</p>
							</li>
							<li>
								<p>Free Print 30 Lembar/hari</p>
							</li>
							<li>
								<p>Free Flow Snacks & Minuman</p>
							</li>
							<li>
								<p>Akses Pantry, Ruang Santai, & Area Bermain</p>
							</li>
						</ul>
					</div>
				</div>
				<!-- /pricing -->

				<!-- pricing -->
				<div class="col-md-3 col-sm-6">
					<div class="pricing">
						<div class="price-head">
							<span class="price-title">Monthly Grup</span>
							<div class="price">
								<h3>1400K<span class="duration">/ bulan</span></h3>
							</div>
						</div>
						<ul class="price-content">
							<li>
								<p>Akses 4 Orang</p>
							</li>
							<li>
								<p>Meja Kerja</p>
							</li>
							<li>
								<p>Akses Internet</p>
							</li>
							<li>
								<p>Free Print 30 Lembar/hari</p>
							</li>
							<li>
								<p>Free Flow Snacks & Minuman</p>
							</li>
							<li>
								<p>Akses Pantry, Ruang Santai, & Area Bermain</p>
							</li>
						</ul>
					</div>
				</div>
				<!-- /pricing -->

				<!-- pricing -->
				<div class="col-md-3 col-sm-6">
					<div class="pricing">
						<div class="price-head">
							<span class="price-title">Night Shift Grup</span>
							<div class="price">
								<h3>120K<span class="duration">/ hari</span></h3>
							</div>
						</div>
						<ul class="price-content">
							<li>
								<p>Akses 4 Orang</p>
							</li>
							<li>
								<p>Mulai 18.00 - 24.00</p>
							</li>
							<li>
								<p>Meja Kerja</p>
							</li>
							<li>
								<p>Akses Internet</p>
							</li>
							<li>
								<p>Free Flow Snacks & Minuman</p>
							</li>
							<li>
								<p>Akses Pantry, Ruang Santai, & Area Bermain</p>
							</li>
						</ul>
					</div>
				</div>
				<!-- /pricing -->
				</div>
				
				<!-- List Space Price -->
				<div id="space" style="display:none;">
				<!-- pricing -->
				<div class="col-md-3 col-md-offset-3 col-sm-6">
					<div class="pricing">
						<div class="price-head">
							<span class="price-title">Meeting Space</span>
							<div class="price">
								<h3>65K<span class="duration">/ jam</span></h3>
							</div>
						</div>
						<ul class="price-content">
							<li>
								<p>Reservasi Dahulu</p>
							</li>
							<li>
								<p>Akses 8 - 12 Orang</p>
							</li>
							<li>
								<p>Ruang Meeting</p>
							</li>
							<li>
								<p>Akses Internet</p>
							</li>
							<li>
								<p>Free Flow Snacks & Minuman</p>
							</li>
							<li>
								<p>Akses Pantry, Ruang Santai, & Area Bermain</p>
							</li>
							<li>
								<p>Papan Tulis, Proyektor, & Layar</p>
							</li>
						</ul>
					</div>
				</div>
				<!-- /pricing -->

				<!-- pricing -->
				<div class="col-md-3 col-sm-6">
					<div class="pricing">
						<div class="price-head">
							<span class="price-title">Event Space</span>
							<div class="price">
								<h3>120K<span class="duration">/ jam</span></h3>
							</div>
						</div>
						<ul class="price-content">
							<li>
								<p>Reservasi Dahulu</p>
							</li>
							<li>
								<p>Akses 15 - 25 Orang</p>
							</li>
							<li>
								<p>Ruang Event</p>
							</li>
							<li>
								<p>Akses Internet</p>
							</li>
							<li>
								<p>Free Flow Snacks & Minuman</p>
							</li>
							<li>
								<p>Akses Pantry, Ruang Santai, & Area Bermain</p>
							</li>
							<li>
								<p>Papan Tulis, Proyektor, & Layar</p>
							</li>
						</ul>
					</div>
				</div>
				<!-- /pricing -->
				</div>

			</div>
			<!-- Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Pricing -->

	<!-- Blog -->
	<div id="blog" class="section md-padding bg-grey">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Artikel Kami</h2>
				</div>
				<!-- /Section header -->

				<!-- blog -->
				<div class="col-md-4">
					<div class="blog">
						<div class="blog-img">
							<img class="img-responsive" src="<?php echo asset_url();?>frontend/img/blog/blog_1.jpg" alt="">
						</div>
						<div class="blog-content">
							<ul class="blog-meta">
								<li><i class="fa fa-user"></i>Admin</li>
								<li><i class="fa fa-clock-o"></i>15 Agustus 2018</li>
							</ul>
							<h3>5 Alasan Mengapa Coworking Space Membuatmu Lebih Produktif Dibanding dengan Cafe.</h3>
							<p class="text-justify">“Fleksibilitas” kata yang kini sedang marak digemakan dalam mendefinisikan makna model bekerja kekinian.</p>
							<a href="<?php echo base_url();?>blog">Selengkapnya</a>
						</div>
					</div>
				</div>
				<!-- /blog -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Blog -->

	<!-- Numbers -->
	<div id="partners" class="section sm-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">'

				<!-- Section-header -->
				<div class="section-header text-center">
					<h2 class="title">Partner Kami</h2>
				</div>

				<!-- partner -->
				<div class="col-sm-2 col-xs-6">
					<div class="partner">
						<div class="blog-img">
							<img class="img-responsive" src="" alt="">
						</div>
					</div>
				</div>
				<!-- /partner -->

				<!-- partner -->
				<div class="col-sm-2 col-xs-6">
					<div class="partner">
						<div class="blog-img">
							<img class="img-responsive" src="<?php echo asset_url();?>frontend/img/partner/dcc.png" alt="">
						</div>
					</div>
				</div>
				<!-- /partner -->

				<!-- partner -->
				<div class="col-sm-2 col-xs-6">
					<div class="partner">
						<div class="blog-img">
							<img class="img-responsive" src="<?php echo asset_url();?>frontend/img/partner/de.png" alt="">
						</div>
					</div>
				</div>
				<!-- /partner -->

				<!-- partner -->
				<div class="col-sm-2 col-xs-6">
					<div class="partner">
						<div class="blog-img">
							<img class="img-responsive" src="<?php echo asset_url();?>frontend/img/partner/wsx.png" alt="">
						</div>
					</div>
				</div>
				<!-- /partner -->

				<!-- partner -->
				<div class="col-sm-2 col-xs-6">
					<div class="partner">
						<div class="blog-img">
							<img class="img-responsive" src="<?php echo asset_url();?>frontend/img/partner/rrj.png" alt="">
						</div>
					</div>
				</div>
				<!-- /partner -->

								<!-- partner -->
				<div class="col-sm-2 col-xs-6">
					<div class="partner">
						<div class="blog-img">
							<img class="img-responsive" src="" alt="">
						</div>
					</div>
				</div>
				<!-- /partner -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Numbers -->

	<!-- Contact -->
	<div id="contact" class="section md-padding bg-grey">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section-header -->
				<div class="section-header text-center">
					<h2 class="title">Kontak Kami</h2>
					<p>Jangan malu untuk kontak kami.</p>
				</div>
				<!-- /Section-header -->

				<!-- contact -->
				<div class="col-md-4">
					<div class="contact contact-bot">
						<i class="fa fa-phone"></i>
						<h3>No Kontak</h3>
						<p>+62-856-9430-0032</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact -->
				<div class="col-md-4">
					<div class="contact contact-bot">
						<i class="fa fa-envelope"></i>
						<h3>Email</h3>
						<p>ekspresi.cowork@gmail.com</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact -->
				<div class="col-md-4">
					<div class="contact contact-bot">
						<i class="fa fa-map-marker"></i>
						<h3>Alamat Kita</h3>
						<p>Jalan Kaliurang KM 9.3
						<br>Desa Gandok-Tambakan no 777
						<br>Sinduharjo, Ngaglik, Sleman, DIY
						</p>
					</div>
				</div>
				<!-- /contact -->
				
				<div class="row">
				<!-- maps -->
				<div class="col-md-8 col-md-offset-2">
					<div class="contact map-responsive">
						<h2>Dimana Kita?</h2>
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2182.0776223625626!2d110.39979832699098!3d-7.7286097765952455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a593f6ac7f2e7%3A0x6234fa74810fb36c!2sEkspresi+Coworking+Space!5e0!3m2!1sid!2sid!4v1526993385513" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
				<!-- end maps -->
				</div>

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->