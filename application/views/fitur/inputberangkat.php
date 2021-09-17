<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" type="image/png" href="<?= base_url(); ?>assets/img/logo-stask.png">
	<title>
		Input Data Keberangkatan Kapal
	</title>
	<!--     Fonts and icons     -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<!-- Font Awesome Icons -->
	<link href="<?= base_url(); ?>assets/fontawesome/css/all.css" rel="stylesheet" />
	<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
	<!-- CSS Files -->
	<link id="pagestyle" href="<?= base_url(); ?>assets/css/soft-ui-dashboard.css" rel="stylesheet" />
	<link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">
</head>

<body class="g-sidenav-show">
	<!--Navbar Left-->
	<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3" id="sidenav-main">
		<div class="sidenav-header">
			<i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
			<a class="navbar-brand m-0" href="">
				<img src="<?= base_url(); ?>assets/img/logo-stask.png" class="navbar-brand-img h-100" alt="main_logo">
				<span class="ms-1 font-weight-bold text-dark">Syahbandar Task</span>
			</a>
		</div>
		<hr class="horizontal dark mt-0">
		<div class="collapse navbar-collapse  w-auto  max-height-vh-100 h-100" id="sidenav-collapse-main">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url(); ?>home">
						<div class="icon icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
							<i class="fas fa-home" style="color:#457B9D"></i>
						</div>
						<span class="nav-link-text ms-1">Dashboard</span>
					</a>
				</li>
				<li class="nav-item mt-3">
					<h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Pendataan Kapal</h6>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url(); ?>kedatangan">
						<div class="icon icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
							<i class="fas fa-anchor" style="color:#457B9D"></i>
						</div>
						<span class="nav-link-text ms-1">Kedatangan</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" href="<?= base_url(); ?>keberangkatan">
						<div class="icon icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
							<i class="fas fa-flag" style="color:#fff"></i>
						</div>
						<span class="nav-link-text ms-1">Keberangkatan</span>
					</a>
				</li>
				<li class="nav-item mt-3">
					<h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Data Tersimpan</h6>
				</li>
				<li class="nav-item">
					<a class="nav-link  " href="<?= base_url(); ?>user/datakapal_user">
						<div class="icon icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
							<i class="fas fa-ship " style="color:#457B9D"></i>
						</div>
						<span class="nav-link-text ms-1">Data Kapal</span>
					</a>
				</li>
				<li class="nav-item">
					<div class="nav-link navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbardata" aria-controls="navbardata" aria-expanded="false" aria-label="Toggle navigation">
						<div class="icon icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
							<i class="fas fa-folder" style="color:#457B9D"></i>
						</div>
						<span class="nav-link-text ms-1">Data Lapangan</span>
					</div>
					<div class="collapse ms-5" id="navbardata">
						<a class="nav-link" href="<?= base_url(); ?>dataout">
							<div class="icon icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
								<i class="fas fa-arrow-alt-circle-up" style="color:#457B9D"></i>
							</div>
							<span class="nav-link-text ms-1">Keberangkatan</span>
						</a>
						<a class="nav-link" href="<?= base_url(); ?>datain">
							<div class="icon icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
								<i class="fas fa-arrow-alt-circle-down" style="color:#457B9D"></i>
							</div>
							<span class="nav-link-text ms-1">Kedatangan</span>
						</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link  " href="<?= base_url(); ?>daftar_ikan">
						<div class="icon icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
							<i class="fas fa-fish" style="color:#457B9D"></i>
						</div>
						<span class="nav-link-text ms-1">Data Produksi</span>
					</a>
				</li>
			</ul>
		</div>
	</aside>
	<!-- Navbar Left End-->
	<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
		<!-- Navbar -->
		<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl mt-4 justify-content-end" id="navbarBlur" navbar-scroll="true">
			<!--Navbar Atas-->
			<div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4 justify-content-end" id="navbar">
				<ul class="navbar-nav justify-content-end">
					<li class="nav-item d-xl-none d-flex align-items-center">
						<a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
							<div class="sidenav-toggler-inner">
								<i class="sidenav-toggler-line"></i>
								<i class="sidenav-toggler-line"></i>
								<i class="sidenav-toggler-line"></i>
							</div>
						</a>
					</li>
					<li class="nav-item d-flex align-items-center px-3">
						<a href="<?= base_url(); ?>profile_user" class="nav-link text-body font-weight-bold px-0">
							<i class="fa fa-user me-sm-1"></i>
							<span class="d-sm-inline d-none">Profil</span>
						</a>
					</li>
					<li class="nav-item d-flex align-items-center">
						<a href="logout" class="nav-link text-body font-weight-bold px-0">
							<i class="fas fa-sign-out-alt me-sm-1"></i>
							<span class="d-sm-inline d-none me-3">Logout</span>
						</a>
					</li>
				</ul>
			</div>
		</nav>
		<!-- End Navbar -->
		<!--Content-->
		<div class="container-fluid py-4">
			<div class="row">
				<div class="card">
					<div class="card-header pb-0 p-sm-5">
						<h6 class="montserrat">Masukkan Data Keberangkatan Kapal</h6>
						<form action="<?php echo base_url().'user/insert_dataout'; ?>" method="post">
							<div class="container p-4 pe-0 pt-0">
								<div class="row">
									<div class="container-fluid">
										<div class="row border-bottom">
											<div class="card-profile-image mt-0">
												<input type="text" name="id_kapal" id="" class="form-control text-center border-0 m-0 p-0 opacity-0" style="pointer-events: none;" placeholder="" value="<?php echo $kapal->id_kapal; ?>">
												<div class="mb-5">
													<h2 class="text-center mt-2 mb-0 p-0"><?php echo $kapal->nama_kapal; ?></h2>
													<h3 class="text-center mt-0 p-0"><?php echo $kapal->GT; ?> GT</h3>
													<div class="text-center">
														<p class="mt-1 text-secondary text-xs font-weight-bolder opacity-7 mb-0">
															Nama Pemilik / Perusahaan :
															<p class="font-weight-bold opacity-8"><?php echo $kapal->nama_pemilik; ?></p>
														</p>
													</div>
												</div>
											</div>
										</div>
									</div>									
									<div class="row">
										<label for="" class="mt-4">Waktu Keberangkatan</label>
										<div class="col-md mb-3">
											<input type="date" class="form-control" name="tanggal_out" id="tanggal_out" placeholder="" required="">
										</div>
										<div class="col-md mb-3">
											<input type="time" class="form-control" name="waktu_out" id="waktu_out" placeholder="" required="">
										</div>
									</div>									
									<div class="row">
										<div class="col-md mb-3">
											<label for="no_SPB" class="">No SPB</label>
											<input type="text" class="form-control" name="no_SPB" id="no_SPB" placeholder="">
										</div>
									</div>
									<div class="row">
										<div class="col-md mb-3">
											<label for="tujuan_berangkat" class="">Tujuan Berangkat</label>
											<input type="text" class="form-control" name="tujuan_berangkat" id="tujuan_berangkat"
												placeholder="" required="">
										</div>
									</div>
									<div class="row mb-3">
										<div class="col-md-6">
											<label for="daerah_asal" class="">Daerah Asal</label>
											<input type="text" class="form-control" name="daerah_asal" id="daerah_asal" placeholder=""
												required="">
										</div>
										<div class="col-md-6">
											<label for="lokasi" class="">Lokasi</label>
											<select class="form-select" name="lokasi" placeholder="" required="">
												<option></option>
												<option value="Kolam 1">Kolam 1</option>
												<option value="Kolam 2">Kolam 2</option>
											</select>
										</div>
									</div>
									<div class="row mb-5">
										<div class="col-md-6">
											<label for="plb_tujuan" class="">Pelabuhan Tujuan</label>
											<input type="text" class="form-control" name="plb_tujuan" id="plb_tujuan" placeholder=""
												required="">
										</div>
									</div>
									<h6 class="mt-2 text-uppercase text-xs font-weight-bolder opacity-6">Perbekalan yang Dibawa</h6>
									<div class="row">
										<div class="col-md-6 mb-3">
											<div class="d-flex flex-row">
												<label for="bbm" class="mb-0">BBM</label>
												<p for="" class="abk">*Liter</p>
											</div>
											<input type="text" class="form-control px-0 ps-2" name="bbm" id="bbm" placeholder="">
										</div>
										<div class="col-md-6 mb-3">
											<div class="d-flex flex-row">
												<label for="solar" class="mb-0">Solar</label>
												<p for="" class="abk">*Liter</p>
											</div>
											<input type="text" class="form-control px-0 ps-2" name="solar" id="solar" placeholder="">
										</div>
									</div>
									<div class="row">
										<div class="col-md-6 mb-3">
											<div class="d-flex flex-row">
												<label for="minyak_or_gas" class="mb-0">Minyak Tanah / Gas</label>
												<p for="" class="abk">*Liter</p>
											</div>
											<input type="text" class="form-control px-0 ps-2" name="minyak_or_gas" id="minyak_or_gas"
												placeholder="">
										</div>
										<div class="col-md-6 mb-3">
											<div class="d-flex flex-row">
												<label for="es" class="mb-0">Es</label>
												<p for="" class="abk">*Kg</p>
											</div>
											<input type="text" class="form-control px-0 ps-2" name="es" id="es" placeholder="">
										</div>
									</div>
									<div class="row">
										<div class="col-md-6 mb-3">
											<div class="d-flex flex-row">
												<label for="air" class="mb-0">Air</label>
												<p for="" class="abk">*Liter</p>
											</div>
											<input type="text" class="form-control px-0 ps-2" name="air" id="air" placeholder="">
										</div>
										<div class="col-md-6 mb-3">
											<div class="d-flex flex-row">
												<label for="bensin" class="mb-0">Bensin</label>
												<p for="" class="abk">*Liter</p>
											</div>
											<input type="text" class="form-control px-0 ps-2" name="bensin" id="bensin" placeholder="">
										</div>
									</div>
									<div class="row">
										<div class="col-md-6 mb-3">
											<div class="d-flex flex-row">
												<label for="makanan" class="mb-0">Makanan</label>
												<p for="" class="abk">*Rp</p>
											</div>
											<input type="text" class="form-control px-0 ps-2" name="makanan" id="makanan"
												placeholder="Contoh : 500000">
										</div>
										<div class="col-md-6 mb-3">
											<div class="d-flex flex-row">
												<label for="oli" class="mb-0">Oli</label>
												<p for="" class="abk">*Liter</p>
											</div>
											<input type="text" class="form-control px-0 ps-2" name="oli" id="oli" placeholder="">
										</div>
									</div>
									<div class="row">
										<div class="col-md-6 mb-3">
											<div class="d-flex flex-row">
												<label for="garam" class="mb-0">Garam</label>
												<p for="" class="abk">*Kg</p>
											</div>
											<input type="text" class="form-control px-0 ps-2" name="garam" id="garam" placeholder="">
										</div>
										<div class="col-md-6 mb-3">
											<div class="d-flex flex-row">
												<label for="umpan" class="mb-0">Umpan</label>
												<p for="" class="abk">*Liter</p>
											</div>
											<input type="text" class="form-control px-0 ps-2" name="umpan" id="umpan" placeholder="">
										</div>
									</div>
									<div class="d-flex flex-row">
										<div class="">
											<label for="bekal_lainnya" class="label-lainnya me-2">Perbekalan Lainnya :</label>
										</div>
										<div class="col-md-4">
											<input type="text" class="form-login " name="bekal_lainnya" id="bekal_lainnya">
										</div>
									</div>
									<div class="col-md mb-3">
										<button class="btn bg-dark text-white mt-3 rounded-pill float-end" type="submit" value="" name="inputdataout1">SAVE</button>
										<button class="btn bt-reset mt-3 me-2 rounded-pill float-end" type="reset" value="reset" name="reset">RESET</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!--End Content-->
		<footer class="footer pt-3  ">
			<div class="container-fluid">
				<div class="row align-items-center">
					<div class=" mb-lg-0 mb-4">
						<div class="copyright text-center text-sm text-muted text-center">
							© <script>
								document.write(new Date().getFullYear())
							</script>,
							<a href="http://www.pipp.djpt.kkp.go.id/profil_pelabuhan/1174/informasi" class="font-weight-bold" target="_blank">Pelabuhan Perikanan Nusantara Palabuhanratu</a>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</main>
	<!--   Core JS Files   -->
	<script src="<?= base_url(); ?>assets/js/core/popper.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/core/bootstrap.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/plugins/perfect-scrollbar.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/plugins/smooth-scrollbar.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/plugins/chartjs.min.js"></script>
	</script>
	<script>
		var win = navigator.platform.indexOf('Win') > -1;
		if (win && document.querySelector('#sidenav-scrollbar')) {
			var options = {
				damping: '0.5'
			}
			Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
		}
	</script>
	<!-- Github buttons -->
	<script async defer src="https://buttons.github.io/buttons.js"></script>
	<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
	<script src="<?= base_url(); ?>assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
</body>

</html>
