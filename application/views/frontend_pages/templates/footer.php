	</div>
	<!-- /Contact -->


	<!-- Footer -->
	<footer id="footer" class="sm-padding bg-dark">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<div class="col-md-6">
					<!-- footer logo -->
					<div class="footer-logo">
						<a href="index.html"><img src="<?php echo asset_url();?>frontend/img/logo/logo-alt.png" alt="logo"></a>
						<br>
						<br>
						<div>
							<p>Jam Operasional</p> 
							<p>Senin - Sabtu : 10.00 - 24.00 | Minggu: 16.00 - 24.00</p>
							<p>Jalan Kaliurang KM 9.3
							<br>Desa Gandok-Tambakan no 777
							<br>Sinduharjo, Ngaglik, Sleman, DIY</p>
						</div>
					</div>
					<!-- /footer logo -->
				</div>
				<div class="col-md-6">
					<!-- footer follow -->
					<br>
					<br>
					<br>
					<ul class="footer-follow">
						<li><h5>Follow Us</h5></li>
						<li><a href="https://www.facebook.com/ekspresi.cowork/"><i class="fa fa-facebook"></i></a></li>
						<li><a href="https://plus.google.com/communities/113081184061002383204"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="https://www.instagram.com/eks.pre.si/"><i class="fa fa-instagram"></i></a></li>
						<li><a href="https://www.linkedin.com/company/ekspresi-coworking-space/"><i class="fa fa-linkedin"></i></a></li>
					</ul>
					<!-- /footer follow -->
				</div>

					<!-- footer copyright -->
					<div class="footer-copyright">
						<p>Copyright © 2018. Ekspresi.Co</p>
					</div>
					<!-- /footer copyright -->

					<!-- footer copyright -->
					<!-- <div class="footer-copyright">
						<p>Copyright © 2017. All Rights Reserved. Designed by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
					</div>
					/footer copyright -->


			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</footer>
	<!-- /Footer -->

	<!-- Back to top -->
	<div id="back-to-top"></div>
	<!-- /Back to top -->

	<!-- Preloader -->
	<div id="preloader">
		<div class="preloader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<!-- /Preloader -->

	<!-- jQuery Plugins -->
	<script type="text/javascript" src="<?php echo asset_url();?>frontend/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo asset_url();?>frontend/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo asset_url();?>frontend/js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="<?php echo asset_url();?>frontend/js/jquery.magnific-popup.js"></script>
	<script type="text/javascript" src="<?php echo asset_url();?>frontend/js/main.js"></script>

	<!-- Script Tab Pricing -->
	<script>
		function price_personal(){
				document.getElementById('personal').style.display="block";
				document.getElementById('grup').style.display="none";
				document.getElementById('space').style.display="none";
			}
		function price_grup(){
				document.getElementById('personal').style.display="none";
				document.getElementById('grup').style.display="block";
				document.getElementById('space').style.display="none";
			}
		function price_space(){
				document.getElementById('personal').style.display="none";
				document.getElementById('grup').style.display="none";
				document.getElementById('space').style.display="block";
			}	
	</script>
	<!-- End Script Tab Pricing -->

	<!-- Script Tab Join Us -->
	<script>
		function tab_regis(){
				document.getElementById('register').style.display="block";
				document.getElementById('login').style.display="none";
			}
		function tab_login(){
				document.getElementById('register').style.display="none";
				document.getElementById('login').style.display="block";
			}	
	</script>
	<!-- End Script Tab Join Us -->

	<!-- Script Tab Paket -->
	<script>
		function paket_member() {
		    var x = document.getElementById("paket");
		    if (x.style.display === "none") {
		        x.style.display = "block";
		    } else {
		        x.style.display = "none";
		    }
		}
	</script>
	<!-- End Script Tab paket -->

	</body>

</html>