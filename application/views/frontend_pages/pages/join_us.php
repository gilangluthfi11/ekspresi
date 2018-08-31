<!-- Contact -->
	<div id="contact" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section-header -->
				<div class="section-header text-center">
					<h2 class="title">Bergabung dengan kami sekarang!</h2>
				</div>
				<!-- /Section-header -->

				<div class="row">
					<!-- tab regis -->
					<div class="col-md-5 col-sm-5 col-xs-5">
						<a class="package text-right" href="javascript:void(0)">
							<h4 onclick="tab_regis()">Registrasi</h4>
						</a>
					</div>
					<!-- /end tab regis -->
					<!-- tab regis -->
					<div class="text-center col-md-2 col-sm-2 col-xs-2">						
						<h4>|</h4>
					</div>
					<!-- /end tab regis -->
					<!-- tab login -->
					<div class="col-md-5 col-sm-5 col-xs-5">
						<a class="package text-left" href="javascript:void(0)">
							<h4 onclick="tab_login()">Login</h4>
						</a>
					</div>
					<!-- /end tab login -->
				</div>

				<!-- tab regis -->
				<div id="register" style="display:block;">
					<div class="text-center">
						<!-- contact -->
							<div class="contact">
								<!-- contact form -->
								<div class="row">
									<form class="contact-form">
										<div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1">
											<input type="email" class="input" placeholder="email">
										</div>
										<div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1">
											<input type="password" class="input" placeholder="password">
										</div>
										<div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1">
											<input type="password" class="input" placeholder="ulangi password">
											<br>
										</div>
										<div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1">
											<label>Data Member</label>
											<br>
										</div>
										<div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1">

										</div>
										<div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1">
											<input type="text" class="input" placeholder="nama lengkap">
										</div>
										<div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1">
											<input type="text" class="input" placeholder="tempat lahir">
										</div>
										<div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1">
											<input type="date" class="input" placeholder="tanggal lahir">
										</div>
										<div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1">
											<input type="text" class="input" placeholder="alamat">
										</div>
										<div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1">
											<input type="text" class="input" placeholder="kota">
										</div>
										<div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1">
											<input type="text" class="input" placeholder="provinsi">
										</div>
										<div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1">
											<input type="text" class="input" placeholder="no telepon">
										</div>
										<div class="row">
											<div class="text-right col-xs-5 col-xs-offset-1 col-md-3 col-md-offset-2">
												<label>Jenis Kelamin:</label>
											</div>
											<div>
												<select class="text-left col-xs-4 col-md-3">
											        <option>Laki-Laki</option>
											        <option>Perempuan</option>
											     </select>
											</div>
										</div>
										<br>
										<div class="row">
											<div class="text-right col-xs-5 col-xs-offset-1 col-md-3 col-md-offset-2">
												<label>Status:</label>
											</div>
											<div>
												<select class="text-left col-xs-4 col-md-3">
											        <option>Pelajar</option>
											        <option>Mahasiswa</option>
											        <option>Freelancer</option>
											        <option>Wirausaha</option>
											        <option>Pegawai Negri Sipil</option>
											        <option>Lainnya..</option>
											     </select>
											</div>
										</div>
										<br>
										<div class="row">
											<div class="text-right col-xs-5 col-xs-offset-1 col-md-3 col-md-offset-2">
												<label>Foto:</label>
											</div>
											<div class="col-xs-4 col-md-3">
												<input type="file" name="pic" accept="image/*">
											</div>
										</div>
										<br>
										<div class="col-sm-10 col-sm-offset-1">
											<button class="main-btn">Selesai</button>
										</div>
									</form>
								</div>
								<!-- /contact form -->
							</div>
						<!-- /contact -->
					</div>
				</div>
				<!-- /tab regis -->


				<!-- tab login -->
				<div id="login" style="display:none;">
					<div class="text-center">
						<!-- contact -->
							<div class="contact">
								<!-- contact form -->
								<div class="row">
									<form class="contact-form">
										<div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1">
											<input type="email" class="input" placeholder="email">
										</div>
										<div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1">
											<input type="password" class="input" placeholder="password">
										</div>
										<div class="col-sm-9">
											<a href="<?php echo base_url();?>lupa_password"><span>Aduh aku lupa password :(</span></a>
											<br>
											<br>
										</div>
										<div class="col-sm-10 col-sm-offset-1">
											<button class="main-btn">Masuk</button>
										</div>
									</form>
								</div>
								<!-- /contact form -->
							</div>
						<!-- /contact -->
					</div>
				</div>
				<!-- /tab login -->


			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Contact -->