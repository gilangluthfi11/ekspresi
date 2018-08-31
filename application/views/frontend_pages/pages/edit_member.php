<!-- Member -->
	<div id="team" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Edit Profile Member</h2>
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
							<td><input type="text" name="no_mem" value="000000" /></td>	
						  </tr>
						  <tr>
							<td>Nama</td>
							<td>:</td>
							<td><input type="text" name="nama" placeholder="Nama panjang" /></td>
						  </tr>
						  <tr>
							<td>Tempat Lahir</td>
							<td>:</td>
							<td><input type="text" name="tempat_lahir" placeholder="Tempat lahir" /></td>
						  </tr>
						  <tr>
							<td>Tanggal Lahir</td>
							<td>:</td>
							<td><input type="date" name="tanggal_lahir" placeholder="Tanggal lahir" /></td>
						  </tr>
						  <tr>
							<td>Alamat</td>
							<td>:</td>
							<td><input type="text" name="alamat" placeholder="Alamat" /></td>
						  </tr>
						  <tr>
							<td>Kota</td>
							<td>:</td>
							<td><input type="text" name="kota" placeholder="Kota" /></td>
						  </tr>
						  <tr>
							<td>Provinsi</td>
							<td>:</td>
							<td><input type="text" name="provinsi" placeholder="Provinsi" /></td>
						  </tr>
						  <tr>
							<td>Nomer Telepon</td>
							<td>:</td>
							<td><input type="text" name="no_telp" placeholder="Nomer Telepon" /></td>
						  </tr>
						  <tr>
							<td>Jenis Kelamin</td>
							<td>:</td>
							<td>
								<select>
							        <option>Laki-Laki</option>
							        <option>Perempuan</option>
							     </select>
							</td>
						  </tr>
						  <tr>
							<td>Status</td>
							<td>:</td>
							<td>
								<select>
							        <option>Pelajar</option>
							        <option>Mahasiswa</option>
							        <option>Freelancer</option>
							        <option>Wirausaha</option>
							        <option>Pegawai Negri Sipil</option>
							        <option>Lainnya..</option>
							     </select>
							</td>
						  </tr>
						  <tr>
							<td>Photo</td>
							<td>:</td>
							<td><input type="file" name="pic" accept="image/*"></td>
						  </tr>
						</tbody>
					</table>
				</div>
				<!-- /biodata-->

			</div>
			<!-- /Row -->

			<div class="row">
				<div class="col-sm-5 col-sm-offset-4">
					<button class="blue-btn"><a href="<?php echo base_url();?>membership">selesai</a></button>
				</div>
			</div>

		</div>
		<!-- /Container -->
	</div>
	<!-- /member -->