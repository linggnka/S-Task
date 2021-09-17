<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="assets/img/favicon.png">
	<title>
		Welcome to S-Task
	</title>
	<!--     Fonts and icons     -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<!-- Font Awesome Icons -->
	<link href="assets/fontawesome/css/all.css" rel="stylesheet" />
	<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
	<!-- CSS Files -->
	<link id="pagestyle" href="assets/css/soft-ui-dashboard.css" rel="stylesheet" />
	<link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
	<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
		<!-- Navbar -->
		<nav class="navbar navbar-main navbar-expand px-0 mx-4 shadow-none border-radius-xl mt-4 justify-content-end" id="navbarBlur" navbar-scroll="true">
			<!--Navbar Atas-->
			<ul class="mb-0 ps-1 ps-md-4">
				<img src="assets/img/logo-stask.png" alt="" width="15%" height="15%" class="d-inline-block align-text-top mb-0">
			</ul>
			<div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4 justify-content-end" id="navbar">
				<ul class="navbar-nav justify-content-end">
					<li class="nav-item d-flex align-items-center px-3">
						<a href="<?= base_url(); ?>" class="nav-link text-body font-weight-bold px-0">
							<span class="d-sm-inline d-none">Beranda</span>
						</a>
					</li>
					<li class="nav-item pe-3">
						<a class="nav-link text-body" data-bs-toggle="modal" data-bs-target="#loginModal" href="">Masuk</a>
					</li>
				</ul>
			</div>
		</nav>
		<!-- End Navbar -->
		<div class="container-fluid mt-3">
			<div class="container">
				<div class="row">
					<div class="col-md-6 ">
						<h1 id="judul" class="text-dark">Syahbandar Task (Pencatatan Data Lapangan).</h1>
					</div>
					<div class="col-md-6">
						<div class="row">
							<div class="col-3" style="color:#457B9D; font-size:40px; font-weight:bold">
								<?php echo $count_user->id_user ?>
							</div>
							<div class="col-3" style="color:#457B9D; font-size:40px; font-weight:bold">
								<?php echo $count_kapal->id_kapal ?>
							</div>
							<div class="col-3" style="color:#457B9D; font-size:40px; font-weight:bold">
								<?php echo $hasil->volume_ikan ?>
							</div>
						</div>
						<div class="row">
							<div class="col-3">
								<p>Petugas <br> Lapang</p>
							</div>
							<div class="col-3">
								<p>Kapal <br> Terdaftar</p>
							</div>
							<div class="col-3">
								<p>Hasil <br> Tangkapan</p>
							</div>
						</div>
						<div class="row me-auto mt-2" style="color:#000;">
							<p>
								<b>Syahbandar Task</b> adalah Website Pencatatan Data Lapangan khusus digunakan untuk petugas lapang
								dalam mencatat data keberangkatan dan kedatangan kapal.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="carouselExampleControls" class="carousel slide mt-3 mt-sm-5" data-bs-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="assets/img/dokumentasi.png" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
					<img src="assets/img/dokumentasi.png" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
					<img src="assets/img/dokumentasi.png" class="d-block w-100" alt="...">
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
		<footer class="text-center p-4">
			<a href="http://www.pipp.djpt.kkp.go.id/profil_pelabuhan/1174/informasi">Pelabuhan Perikanan Nusantara Palabuhanratu</a>
		</footer>

		<!-- Modal -->
		<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModal" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-body">
						<i class="fas fa-times float-end p-sm-2" style="color:#355070" data-bs-dismiss="modal" aria-label="Close"></i>
						<div class="container-fluid">
							<img src="assets/img/logo-stask.png" alt="" width="15%" height="15%" class="d-inline-block align-text-top d-block mx-auto mt-3">
							<div class="login-content">
								<h3 class="mt-5">Selamat Datang,</h3>
								<div class="form-loginlabel">Log in untuk melanjutkan</div>
									<form action="login" method="post" class="needs-validation">
										<td>
											<input type="hidden" name="id_user">
										</td>
										<div class="mb-3 mt-4">
											<label for="username" class="ms-0">Username</label>
											<input type="text" class="form-login row mx-auto" name="username" id="username" placeholder="">
										</div>
										<div class="mb-3 mt-4">
											<label for="password" class="ms-0">Password</label>
											<input type="password" class="form-login row mx-auto" name="password" id="password" placeholder="">
											<p class="">
												<a class="lupa-pass mt-1" data-bs-toggle="collapse" href="#lupapass" role="button" aria-expanded="false" aria-controls="lupapass">
													Lupa Password?
												</a>
											</p>
											<div class="collapse lupa-pass" id="lupapass">
												<img src="assets/img/customer-service.png" alt="" width="25%" height="25%" class="d-inline-block align-text-top d-block mx-auto mt-3">
												<div class="d-flex flex-row align-items-center justify-content-center pt-1 text-danger">
													Silahkan Hubungi
													<a href="https://wa.me/6285778344670" class="fw-bolder">
														&nbsp Admin &nbsp
													</a>
													<i class="far fa-comment" style="color:#457B9D">
													</i>
												</div>
											</div>
											<div class="d-grid gap-2 col-6 mx-auto">
												<button class="btn bg-dark text-white mt-3 rounded-pill position-relative mb-0" type="submit" value="login" name="login">LOG IN</button>
											</div>
											<p class="d-grid gap-2 col-6 mx-auto">
												<a class="lupa-pass mt-1 text-center" data-bs-toggle="collapse" href="#lupapass" role="button" aria-expanded="false" aria-controls="lupapass">
													Belum Punya Akun?
												</a>
											</p>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Modal -->
	</main>
	<!--   Core JS Files   -->
	<script src="assets/js/core/popper.min.js"></script>
	<script src="assets/js/core/bootstrap.min.js"></script>
	<script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
	<script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
	<script src="assets/js/plugins/chartjs.min.js"></script>
	<script>
		var win = navigator.platform.indexOf('Win') > -1;
		if (win && document.querySelector('#sidenav-scrollbar')) {
			var options = {
				damping: '0.5'
			}
			Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
		} <
		!--Github buttons-- >
		<
		script async defer src = "https://buttons.github.io/buttons.js" >
	</script>
	<script src="assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
</body>

</html>
