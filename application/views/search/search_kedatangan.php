<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" type="image/png" href="<?= base_url(); ?>assets/img/logo-stask.png">
	<title>
		Cari Kapal (<?php echo $key ?>)
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
		<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl mt-4 justify-content-end"
			id="navbarBlur" navbar-scroll="true">
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
						<a href="" class="nav-link text-body font-weight-bold px-0" data-bs-toggle="modal"
							data-bs-target="#kapal_baru">
							<i class="fa fa-ship me-sm-1"></i>
							<span class="d-sm-inline d-none">Kedatangan Kapal Baru</span>
						</a>
					</li>
					<li class="nav-item d-flex align-items-center px-3">
						<a href="<?= base_url(); ?>" class="nav-link text-body font-weight-bold px-0">
							<i class="fa fa-user me-sm-1"></i>
							<span class="d-sm-inline d-none">Profil</span>
						</a>
					</li>
					<li class="nav-item d-flex align-items-center">
						<a href="<?= base_url(); ?>" class="nav-link text-body font-weight-bold px-0">
							<i class="fas fa-sign-out-alt me-sm-1"></i>
							<span class="d-sm-inline d-none me-3">Logout</span>
						</a>
					</li>
				</ul>
			</div>
		</nav>
		<!-- End Navbar -->
		<div class="container-fluid py-4">
			<div class="row">
				<!--Fitur Search-->
				<?php echo form_open('user/search_kedatangan')?>
				<div class="row">
					<div class="col-auto">
						<div class="input-group mb-0">
							<span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
							<input type="text" name="key" id="carikapal" autocomplete="off" class="form-control" placeholder="Cari Kapal">
						</div>
					</div>
					<div class="col-auto">
						<div class="">
							<button type="submit" name="submit" id="carikapal" class="btn bg-dark text-white" value="search">Cari</button>
						</div>
					</div>
					<h6 class=" text-sm font-weight-bolder">Search For : <?php echo $key ?>
						<a href="<?= base_url(); ?>user/kedatangan" class="ms-2">
							<i class="far fa-times-circle" style="color: #E63946"></i>
						</a>
					</h6>
				</div>
				<?php echo form_close()?>
				<!--End Search-->
				<div class="col-12 mt-3">
					<div class="card mb-4">
						<div class="card-header pb-0 p-5">
							<h6 class="mb-4">Catat Kedatangan Berdasarkan Data Keberangkatan</h6>
							<ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
								<li>
									<a class="dropdown-item border-radius-md" href="<?= base_url(); ?>inputkolam2">Kolam 2</a>
								</li>
							</ul>
							<div class="card-body px-0 pt-0 pb-2">
								<div class="table-responsive p-0">
									<table class="table table-hover align-items-center mb-0">
										<thead>
											<tr>
												<th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
													No
												</th>
												<th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
													Nama Kapal
												</th>
												<th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">
													Pemilik
												</th>
												<th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">
													GT Kapal
												</th>
												<th class="text-secondary opacity-7"></th>
											</tr>
										</thead>
										<tbody>
											<?php 
											$no=$row+1;
											foreach ($result as $row) : ?>
											<tr>
												<td class="px-4">
													<div class="d-flex">
														<div class="d-flex flex-column">
															<p class="mb-0 text-sm font-weight-bold"><?php echo $no++ ?></p>
														</div>
													</div>
												</td>
												<td class="px-4">
													<div class="d-flex">
														<div class="d-flex flex-column">
															<p class="mb-0 text-sm font-weight-bold"><?php echo $row['nama_kapal'] ?></p>
															<span class="text-xs">
																Tanggal Keberangkatan:<span class="text-dark ms-sm-2 font-weight-bold"><?php echo $row['tanggal_out'] ?><?php echo $row['waktu_out'] ?></span>
															</span>
															<a href="inputdatang/<?= $row['id_out'];?>" class="btn btn-link text-dark p-0 pt-2 mb-0 text-start">
																<i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Catat Kedatangan
															</a>
														</div>
													</div>
												</td>
												<td>
													<p class="mb-0 text-sm font-weight-bold"><?php echo $row['nama_pemilik'] ?> GT</p>
												</td>
												<td class="">
													<p class="mb-0 text-sm font-weight-bold"><?php echo $row['GT'] ?> GT</p>
												</td>
												<td class="align-middle text-center text-sm">
													<span class="badge badge-sm bg-gradient-secondary"><?php echo $row['status'] ?> Melakukan
														Kedatangan
													</span>
												</td>
											</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
									<?= $this->pagination->create_links(); ?>
								</div>
							</div>
						</div>
						<div class="card-body px-0 pt-0 pb-2">
						</div>
					</div>
				</div>
			</div>
		</div>
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
		<div class="modal fade" id="kapal_baru" tabindex="-1" aria-labelledby="kapal_baru" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-xl">
				<div class="modal-content">
					<div class="modal-body">
						<i class="fas fa-times float-end p-2" style="color:#355070" data-bs-dismiss="modal" aria-label="Close"></i>
						<img src="<?= base_url(); ?>assets/img/logo-stask.png" alt="" width="10%" height="10%" class="d-inline-block align-text-top d-block mx-auto mt-3">
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
											<h6 class="text-uppercase text-body text-xs font-weight-bolder mb-0 opacity-5">*Isi Form ini
												untuk Kedatangan Kapal Baru
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
													<option value="11-20 GT">11-20 GT</option>
													<option value="20-30 GT">20-30 GT</option>
													<option value="31-50 GT">31-50 GT</option>														<option value="51-100 GT">51-100 GT</option>
													<option value=">100 GT">>100 GT</option>
												</select>
											</div>
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
										<div class="row mb-3">
											<div class="col-md-6">
												<label for="nama_nahkoda" class="">Nama Nahkoda</label>
												<input type="text" class="form-control" name="nama_nahkoda" id="nama_nahkoda" placeholder="">
											</div>
											<div class="col-md-6">
												<div class="d-flex flex-row">
													<label for="abk" class="">Jumlah ABK</label>
													<p for="" class="abk">*Anak Buah Kapal</p>
												</div>
												<input type="number" class="form-control" name="abk" id="abk" placeholder="" required="">
											</div>
										</div>
										<h6 class="mt-2 text-uppercase text-xs font-weight-bolder opacity-6">Operasi Penangkapan</h6>
										<div class="row d-flex">
											<div class="col-md-6 mb-3">
												<label for="alat_tangkap" class="">Alat Tangkap</label>
												<select class="form-select" name="alat_tangkap" placeholder="Pilih Alat Tangkap">
													<option></option>
													<option value="Payang">Payang</option>
													<option value="Pancing Ulur">Pancing Ulur</option>
													<option value="Jaring Rampus">Jaring Rampus</option>
													<option value="Payang">Tramel Net</option>
													<option value="Payang">Bagan</option>
													<option value="Payang">Pancing Tonda</option>
													<option value="Payang">Rawai Tuna (Long Line)</option>
													<option value="Payang">Purse Seine</option>
												</select>
												<div class="mt-2 d-flex flex-row">
													<div class="col-md-4">
														<label for="alat_tangkap2" class="label-lainnya me-2">Alat Tangkap lainnya :</label>
													</div>
													<div class="col-md-8">
														<input type="text" class="form-login" name="alat_tangkap2" id="alat_tangkap2">
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<label for="alat_bantu_tangkap" class="">Alat Bantu Tangkap</label>
												<input type="text" class="form-control" name="alat_bantu_tangkap" id="alat_bantu_tangkap" placeholder="">
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
											<div class="col-sm-3 mb-3">
												<div class="d-flex flex-row">
													<label for="panjang_kapal" class="">Panjang Kapal</label>
													<p for="" class="abk">*Meter</p>
												</div>
												<input type="text" class="form-control" name="panjang_kapal" id="panjang_kapal" placeholder="">
											</div>												<div class="col-sm-3 mb-3">
												<label for="status_kapal" class="">Status Kapal</label>
												<input type="text" class="form-control" name="status_kapal" id="status_kapal" placeholder="" required="">
											</div>
										</div>
										<div class="row ">
											<div class="col-sm-6 mb-3">
												<label for="mesin_utama" class="">Mesin Utama (PK)</label>
												<input type="text" class="form-control" name="mesin_utama" id="mesin_utama" placeholder="">
											</div>
											<div class="col-sm-6 mb-3">
												<label for="tanda_selar" class="">Tanda Selar</label>
												<input type="text" class="form-control" name="tanda_selar" id="tanda_selar" placeholder="">
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6 mb-3">
												<label for="jenis_izin" class="">Jenis Izin</label>
												<input type="text" class="form-control" name="jenis_izin" id="jenis_izin" placeholder="">
											</div>
											<div class="col-sm-6 mb-3">
												<label for="izin_WPP" class="">Izin WPP</label>													<input type="text" class="form-control" name="izin_WPP" id="izin_WPP" placeholder="">
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
											<button class="btn bg-dark text-white mt-3 rounded-pill float-end" type="submit" value="register" name="daftar_kapal">SAVE</button>
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
