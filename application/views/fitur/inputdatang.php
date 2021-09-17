<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" type="image/png" href="<?= base_url(); ?>assets/img/logo-stask.png">
	<title>
		Input Data Kedatangan Kapal
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
					<a class="nav-link active" href="<?= base_url(); ?>kedatangan">
						<div class="icon icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
							<i class="fas fa-anchor" style="color:#fff"></i>
						</div>
						<span class="nav-link-text ms-1">Kedatangan</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url(); ?>keberangkatan">
						<div class="icon icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
							<i class="fas fa-flag" style="color:#457B9D"></i>
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
					<a class="nav-link  " href="daftar_ikan">
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
						<h6 class="montserrat">Masukkan Data Kedatangan Kapal</h6>
						<form action="<?php echo base_url().'user/insert_datain'; ?>" method="post">
							<div class="container p-4 pe-0 pt-0">
								<div class="row">
									<div class="container-fluid">
										<div class="row border-bottom">
											<div class="row">
												<div class="col">
													<input type="text" name="id_out" id="" class="form-control text-center border-0 m-0 p-0 opacity-0" style="pointer-events: none;" placeholder="" value="<?php echo $berangkat->id_out; ?>">
												</div>
												<div class="col">
													<input type="text" name="id_kapal" id="" class="form-control text-center border-0 m-0 p-0 opacity-0" style="pointer-events: none;" placeholder="" value="<?php echo $berangkat->id_kapal; ?>">
												</div>
												<div class="col">
													<input type="text" name="status" id="" class="form-control text-center border-0 m-0 p-0 opacity-0" style="pointer-events: none;" placeholder="" value="Sudah">
												</div>
											</div>
											<div class="mb-4">
												<input type="text" name="nama_kapal" id="" class="form-control text-center fs-2 border-0 fw-bolder text-primary mt-2 p-0" style="pointer-events: none;" placeholder="" value="<?php echo $berangkat->nama_kapal; ?>">
												<input type="text" name="gt" id="" class="form-control text-center fs-3 border-0 fw-bolder text-primary mt-0 pt-1" style="pointer-events: none;" placeholder="" value="<?php echo $berangkat->GT; ?> GT">
												<div class="text-center">
													<p class="mt-1 text-secondary text-xs font-weight-bolder mb-1">
														Nama Pemilik / Perusahaan : <?php echo $berangkat->nama_pemilik; ?>
													</p>
													<p class=" text-secondary text-xs font-weight-bolder">
														Tanggal Keberangkatan : <?php echo $berangkat->tanggal_out; ?><?php echo $berangkat->waktu_out; ?>
													</p>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<label for="" class="mt-4">Waktu Kedatangan</label>
										<div class="col-md mb-3">
											<input type="date" class="form-control" name="tanggal_in" id="tanggal_in" placeholder="" required="">
										</div>
										<div class="col-md mb-3">
											<input type="time" class="form-control" name="waktu_in" id="waktu_in" placeholder="" required="">
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6 mb-3">
											<label for="jumlah_hari_trip" class="">Jumlah Hari Trip</label>
											<input type="text" class="form-control" name="jumlah_hari_trip" id="jumlah_hari_trip" placeholder="">
										</div>
										<div class="col-sm-6 mb-3">
											<label for="lokasi_in" class="">Lokasi Kedatangan</label>
											<select class="form-select" name="lokasi_in" placeholder="" required="">
												<option></option>
												<option value="Kolam 1">Kolam 1</option>
												<option value="Kolam 2">Kolam 2</option>
											</select>
										</div>
									</div>
									<h6 class="mt-3 text-uppercase text-xs font-weight-bolder opacity-6 mb-3">Kegiatan di Pelabuhan</h6>
									<div class="row">
										<div class="col-md-2">
											<div class="form-check">
												<input class="form-check-input" type="radio" name="kegiatan" id="kegiatan" value="Bongkar Ikan">
												<label class="form-check-label" for="kegiatan">
													Bongkar Ikan
												</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="radio" name="kegiatan" id="kegiatan" value="Labuh">
												<label class="form-check-label" for="kegiatan">
													Labuh
												</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="radio" name="kegiatan" id="kegiatan" value="Repair">
												<label class="form-check-label" for="kegiatan">
													Repair
												</label>
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-check">
												<input class="form-check-input" type="radio" name="kegiatan" id="kegiatan" value="Tambat">
												<label class="form-check-label" for="kegiatan">
													Tambat
												</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="radio" name="kegiatan" id="kegiatan" value="docking">
												<label class="form-check-label" for="kegiatan">
													Docking
												</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="radio" name="kegiatan" id="kegiatan" value="Perbekalan">
												<label class="form-check-label" for="kegiatan">
													Perbekalan
												</label>
											</div>
										</div>
									</div>
									<div class="col-md mb-3">
										<div class="">
											<label for="lainnya" class="label-lainnya me-2">Kegiatan Lainnya</label>
											<input type="text" class="form-login w-sm-20 w-50" name="lainnya" id="lainnya" placeholder="">
										</div>
									</div>
								</div>
								<div class="col-md mb-3">
									<button class="btn bg-dark text-white mt-3 rounded-pill float-end" type="submit" value="" name="inputdataout1">SAVE</button>
									<button class="btn bt-reset mt-3 me-2 rounded-pill float-end" type="reset" value="reset" name="reset">RESET</button>
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
		<!-- Modal -->
		<div class="modal fade" id="ikan" tabindex="-1" aria-labelledby="ikan" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-xl">
				<div class="modal-content">
					<div class="modal-body">
						<i class="fas fa-times float-end p-2" style="color:#355070" data-bs-dismiss="modal" aria-label="Close"></i>
						<img src="<?= base_url(); ?>assets/img/LOGO IKAN.png" alt="" width="10%" height="10%" class="d-inline-block align-text-top d-block mx-auto mt-3">
						<div class="mt-4">
							<div class="card h-100 mb-4">
								<div class="card-header pb-0 px-5">
									<div class="row">
										<div class="text-center mb-5">
											<h4 class="mb-0 fw-bolder">KEDATANGAN KAPAL BARU</h4>
										</div>
									</div>
									<div class="row">
										<div class="col-md">
											<h6 class="text-uppercase text-body text-xs font-weight-bolder mb-0 opacity-5">*Isi Form ini untuk
												Kedatangan Kapal Baru
											</h6>
										</div>
									</div>
								</div>
								<div class="card-body pb-0 px-5">
									<form action="<?php echo base_url().'user/insert_kapal'; ?>" method="post">
										<div class="row">
											<div class="col-sm-6 mb-3">
												<label for="nama_kapal" class="">Nama Kapal</label>
												<input type="text" class="form-control" name="nama_kapal" id="nama_kapal" placeholder="" aria-label="First name" required="">
											</div>
											<div class="col-sm-3 mb-3">
												<label for="gt" class="">GT Kapal</label>
												<input type="text" class="form-control" name="gt" id="gt" placeholder="" aria-label="Last name" required="">
											</div>
											<div class="col-sm-3 mb-3">
												<label for="kelompok_gt" class="">Kelompok GT</label>
												<select class="form-select" name="kelompok_gt">
													<option value="<5 GT"><5 GT</option> 
													<option value="5-10 GT">5-10 GT</option>
													<option value="20-30 GT">20-30 GT</option>
													<option value="30-50 GT">30-50 GT</option>
													<option value="50-100 GT">50-100 GT</option>
													<option value=">100 GT">>100 GT</option>
												</select>
											</div>
										</div>
										<div class="row">
										</div>
										<div class="row">
											<div class=" col-sm-6 mb-3">
												<label for="nama_pemilik" class="">Nama Pemilik</label>
												<input type="text" class="form-control" name="nama_pemilik" id="nama_pemilik" placeholder="" required="">
											</div>
											<div class="col-sm-6 mb-3">
												<label for="no_hp_pemilik" class="">No. HP Pemilik</label>
												<input type="text" class="form-control" name="no_hp_pemilik" id="no_hp_pemilik" placeholder="" required="">
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6 mb-3">
												<label for="jenis_kapal" class="">Jenis Kapal</label>
												<select class="form-select" name="jenis_kapal">
													<option value="Motor Tempel">Motor Tempel</option>
													<option value="Kapal Motor">Kapal Motor</option>
												</select>
											</div>
											<div class="col-sm-6 mb-3">
												<div class="d-flex flex-row">
													<label for="panjang_kapal" class="">Panjang Kapal</label>
													<p for="" class="abk">*Meter</p>
												</div>
												<input type="text" class="form-control" name="panjang_kapal" id="panjang_kapal" placeholder="">
											</div>
										</div>
										<div class="row ">
											<div class="col-sm-6 mb-3">
												<label for="status_kapal" class="">Status Kapal</label>
												<input type="text" class="form-control" name="status_kapal" id="status_kapal" placeholder="" required="">
											</div>
											<div class="col-sm-6 mb-3">
												<label for="mesin_utama" class="">Mesin Utama (PK)</label>
												<input type="text" class="form-control" name="mesin_utama" id="mesin_utama" placeholder="">
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6 mb-3">
												<label for="tanda_selar" class="">Tanda Selar</label>
												<input type="text" class="form-control" name="tanda_selar" id="tanda_selar" placeholder="">
											</div>
											<div class="col-sm-6 mb-3">
												<label for="izin_WPP" class="">Izin WPP</label>
												<input type="text" class="form-control" name="izin_WPP" id="izin_WPP" placeholder="">
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6 mb-3">
												<label for="izin_PP" class="">Izin Pelabuhan Pangkalan</label>
												<input type="text" class="form-control" name="izin_PP" id="izin_PP" placeholder="">
											</div>
											<div class="col-sm-6 mb-3">
												<label for="izin_AT" class="">Izin Alat Tangkap</label>
												<input type="text" class="form-control" name="izin_AT" id="izin_AT" placeholder="">
											</div>
										</div>
										<div me-3>
											<button class="btn bg-dark text-white mt-3 rounded-pill float-end" type="submit" value="" name="daftar_kapal" href="inputikan/<?= $row['id_out'];?>">SAVE</button>
										</div>
										<button class="btn bt-reset mt-3 me-2 rounded-pill float-end" type="reset" value="reset" name="reset">RESET</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--End modal-->
	</main>
	<!--   Core JS Files   -->
	<script src="<?= base_url(); ?>assets/js/core/popper.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/core/bootstrap.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/plugins/perfect-scrollbar.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/plugins/smooth-scrollbar.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/plugins/chartjs.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
