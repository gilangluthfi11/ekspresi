	<!-- Member -->
	<div id="team" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Profile Member</h2>
				</div>
				<!-- /Section header -->

				<!-- Profile -->
				<div class="col-sm-3 col-sm-offset-1">
					<div class="profile">
						<div class="profile-img">
							<img class="img-responsive" src="<?php echo asset_url();?>frontend/img/foto_member/team1.jpg" alt="">
						</div>
						<div class="profile-content">
							<h3>Nama</h3>
							<span>Nama Paket</span>
							<br>
							<span><strong>Aktif sampai :</strong> 2 September 2018</span>
						</div>
					</div>
					<div>
						<button class="blue-btn" onclick="paket_member()">pilih paket</button>
					</div>
				</div>
				<!-- /profile -->

				<!-- Biodata -->
				<div class="col-sm-8 mt-15">
					<table class="style1">
						<thead>
						  <tr>
							<th colspan="3">Data Membership</th>
						  </tr>
						</thead>
						<tbody>
						  <tr>
							<td width="20%">No Member</td>
							<td width="5%">:</td>
							<td>000000</td>	
						  </tr>
						  <tr>
							<td>Nama</td>
							<td>:</td>
							<td>Nama</td>
						  </tr>
						  <tr>
							<td>Tempat Lahir</td>
							<td>:</td>
							<td>Tempat Lahir</td>
						  </tr>
						  <tr>
							<td>Tanggal Lahir</td>
							<td>:</td>
							<td>00/00/0000</td>
						  </tr>
						  <tr>
							<td>Alamat</td>
							<td>:</td>
							<td>Alamat</td>
						  </tr>
						  <tr>
							<td>Kota</td>
							<td>:</td>
							<td>Kota</td>
						  </tr>
						  <tr>
							<td>Provinsi</td>
							<td>:</td>
							<td>Provinsi</td>
						  </tr>
						  <tr>
							<td>Nomer Telepon</td>
							<td>:</td>
							<td>000000000000</td>
						  </tr>
						  <tr>
							<td>Jenis Kelamin</td>
							<td>:</td>
							<td>Pria</td>
						  </tr>
						  <tr>
							<td>Status</td>
							<td>:</td>
							<td>Pelajar</td>
						  </tr>
						</tbody>
					</table>
				</div>
				<!-- /biodata-->
			</div>
			<!-- /Row -->

			<br>

			<div class="row">
				<div class="col-sm-5 col-sm-offset-4">
					<button class="blue-btn"><a href="<?php echo base_url();?>edit_membership">edit</a></button>
				</div>
			</div>

		</div>
		<!-- /Container -->
	</div>
	<!-- /member -->

	<!-- Paket -->
	<div id="paket" class="section md-padding" style="display:none;">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Paket Membership</h2>
				</div>
				<!-- /Section header -->

				<div class="text-center">
					<h3>Paket Personal</h3>
				</div>

				<!-- pricing -->
				<div class="col-sm-3">
					<div class="pricing">
						<div class="price-head">
							<span class="price-title">Daily Personal</span>
							<div>
								<h3>35K / hari</h3>
							</div>
						</div>
						<div class="price-btn">
							<button class="blue-btn">Gabung sekarang!</button>
						</div>
					</div>
				</div>
				<!-- /pricing -->
				<!-- pricing -->
				<div class="col-sm-3">
					<div class="pricing">
						<div class="price-head">
							<span class="price-title">Weekly Personal</span>
							<div>
								<h3>125K / minggu</h3>
							</div>
						</div>
						<div class="price-btn">
							<button class="blue-btn">Gabung sekarang!</button>
						</div>
					</div>
				</div>
				<!-- /pricing -->
				<!-- pricing -->
				<div class="col-sm-3">
					<div class="pricing">
						<div class="price-head">
							<span class="price-title">Monthly Personal</span>
							<div>
								<h3>450K / bulan</h3>
							</div>
						</div>
						<div class="price-btn">
							<button class="blue-btn">Gabung sekarang!</button>
						</div>
					</div>
				</div>
				<!-- /pricing -->
				<!-- pricing -->
				<div class="col-sm-3">
					<div class="pricing">
						<div class="price-head">
							<span class="price-title">Night Shift Personal</span>
							<div>
								<h3>20K / hari</h3>
							</div>
						</div>
						<div class="price-btn">
							<button class="blue-btn">Gabung sekarang!</button>
						</div>
					</div>
				</div>
				<!-- /pricing -->

			</div>
			<!-- Row -->

			<br>

			<!-- Row -->
			<div class="row">

				<div class="text-center">
					<h3>Paket Grup</h3>
				</div>

				<!-- pricing -->
				<div class="col-sm-3">
					<div class="pricing">
						<div class="price-head">
							<span class="price-title">Daily Grup</span>
							<div>
								<h3>120K / hari</h3>
							</div>
						</div>
						<div class="price-btn">
							<button class="blue-btn">Gabung sekarang!</button>
						</div>
					</div>
				</div>
				<!-- /pricing -->
				<!-- pricing -->
				<div class="col-sm-3">
					<div class="pricing">
						<div class="price-head">
							<span class="price-title">Weekly Grup</span>
							<div>
								<h3>400K / minggu</h3>
							</div>
						</div>
						<div class="price-btn">
							<button class="blue-btn">Gabung sekarang!</button>
						</div>
					</div>
				</div>
				<!-- /pricing -->
				<!-- pricing -->
				<div class="col-sm-3">
					<div class="pricing">
						<div class="price-head">
							<span class="price-title">Monthly Grup</span>
							<div>
								<h3>1400K / bulan </h3>
							</div>
						</div>
						<div class="price-btn">
							<button class="blue-btn">Gabung sekarang!</button>
						</div>
					</div>
				</div>
				<!-- /pricing -->
				<!-- pricing -->
				<div class="col-sm-3">
					<div class="pricing">
						<div class="price-head">
							<span class="price-title">Night Shift Grup</span>
							<div>
								<h3>120K / hari </h3>
							</div>
						</div>
						<div class="price-btn">
							<button class="blue-btn">Gabung sekarang!</button>
						</div>
					</div>
				</div>
				<!-- /pricing -->

			</div>
			<!-- Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Paket -->