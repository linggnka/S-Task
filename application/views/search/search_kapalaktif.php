<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" type="image/png" href="<?= base_url(); ?>assets/img/logo-stask.png">
	<title>
		Search Kapal Aktif (<?php echo $key ?>)
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
					<a class="nav-link" href="<?= base_url(); ?>home_admin">
						<div class="icon icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
							<i class="fas fa-folder-plus" style="color:#457B9D"></i>
						</div>
						<span class="nav-link-text ms-1">Pendaftaran Akun</span>
					</a>
				</li>
				<li class="nav-item mt-3">
					<h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Data Tersimpan</h6>
				</li>
				<li class="nav-item">
					<div class="nav-link navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbaruser" aria-controls="navbaruser" aria-expanded="false" aria-label="Toggle navigation">
						<div class="icon icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
							<i class="fas fa-folder" style="color:#457B9D"></i>
						</div>
						<span class="nav-link-text ms-1">Data Akun</span>
					</div>
					<div class="collapse ms-5" id="navbaruser">
						<a class="nav-link" href="<?= base_url(); ?>data_user">
							<div class="icon icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
								<i class="fas fa-arrow-alt-circle-up" style="color:#457B9D"></i>
							</div>
							<span class="nav-link-text ms-1">User</span>
						</a>
						<a class="nav-link" href="<?= base_url(); ?>data_admin">
							<div class="icon icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
								<i class="fas fa-arrow-alt-circle-down" style="color:#457B9D"></i>
							</div>
							<span class="nav-link-text ms-1">Admin</span>
						</a>
					</div>
				</li>
				<li class="nav-item">
					<div class="nav-link active navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarkapal" aria-controls="navbarkapal" aria-expanded="false" aria-label="Toggle navigation">
						<div class="icon icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
							<i class="fas fa-ship" style="color:#fff"></i>
						</div>
						<span class="nav-link-text ms-1">Data Kapal</span>
					</div>
					<div class="collapse ms-5" id="navbarkapal">
						<a class="nav-link" href="<?= base_url(); ?>admin/datakapal_admin">
							<div class="icon icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
								<i class="fas fa-arrow-alt-circle-up" style="color:#457B9D"></i>
							</div>
							<span class="nav-link-text ms-1 fw-bold">Aktif</span>
						</a>
						<a class="nav-link" href="<?= base_url(); ?>datakapal_admin2">
							<div class="icon icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
								<i class="fas fa-arrow-alt-circle-down" style="color:#457B9D"></i>
							</div>
							<span class="nav-link-text ms-1">Non Aktif</span>
						</a>
					</div>
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
						<a href="<?= base_url(); ?>profile_admin" class="nav-link text-body font-weight-bold px-0">
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
		<div class="container-fluid py-4">
			<div class="row">
				<!--Fitur Search-->
				<div class="row">
					<?php echo form_open('admin/search_kapalaktif')?>
					<div class="row">
						<div class="col-auto">
							<div class="input-group mb-4">
								<span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
								<input type="text" name="key" id="carikapal" autocomplete="off" class="form-control" placeholder="Cari Kapal">
							</div>
						</div>
						<div class="col-auto">
							<div class="mb-3">
								<button type="submit" name="submit" id="carikapal" class="btn bg-dark text-white" value="">Cari</button>
							</div>
						</div>
						<h6 class=" text-sm font-weight-bolder">Search For: <?php echo $key ?>
							<a href="<?= base_url(); ?>admin/datakapal_admin" class="ms-2">
								<i class="far fa-times-circle" style="color: #E63946"></i>
							</a>
						</h6>
					</div>
					<?php echo form_close()?>
				</div>
				<!--End Search-->
				<div class="col-12 mt-3">
					<div class="card mb-4">
						<div class="card-header pb-0 p-sm-5">
							<h6 class="fw-bold montserrat mb-3">Daftar Kapal</h6>
							<div class="card-body px-0 pt-0 pb-2">
								<div class="table-responsive p-0">
									<table class="table table-hover align-items-center mb-0">
										<thead>
											<tr class="">
												<th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ">
													No
												</th>
												<th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ">
													Nama Kapal
												</th>
												<th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2 ">
													GT Kapal
												</th>
												<th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2 ">
													Kelompok GT
												</th>
												<th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2 ">
													Waktu Daftar
												</th>
												<th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2 ">
													Pemilik
												</th>
												<th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2 ">
													No. HP Pemilik
												</th>
												<th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2 ">
													Jenis Kapal
												</th>
												<th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2 ">
													Status Kapal
												</th>
												<th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2 ">
													Panjang Kapal
												</th>
												<th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2 ">
													Mesin Utama (PK)
												</th>
												<th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2 ">
													Tanda Selar</th>
												<th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2 ">
													Izin WPP
												</th>
												<th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2 ">
													Izin Pelabuhan Pangkalan
												</th>
												<th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2 ">
													Izin Alat Tangkap</th>
												<th class="text-secondary opacity-7"></th>
											</tr>
										</thead>
										<tbody>
											<?php 
											$no=$row+1;
											foreach ($result as $row) : ?>
											<tr class="">
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
														</div>
													</div>
												</td>
												<td class="">
													<p class="mb-0 text-sm font-weight-bold"><?php echo $row['GT'] ?> GT</p>
												</td>
												<td class="">
													<p class="mb-0 text-sm font-weight-bold"><?php echo $row['kelompok_gt'] ?></p>
												</td>
												<td class="">
													<p class="mb-1 text-sm font-weight-bold"><?php echo $row['tanggal_daftar'] ?></p>
													<div class="row">
														<p class="col-auto text-uppercase text-secondary text-xs font-weight-bolder opacity-7 mb-0 pe-1">
															Pukul
														</p>
														<p class="col-auto mb-0 text-xs font-weight-bold ps-0"><?php echo $row['waktu_daftar'] ?>
														</p>
													</div>
												</td>
												<td class="">
													<p class="mb-0 text-sm font-weight-bold"><?php echo $row['nama_pemilik'] ?></p>
												</td>
												<td class="">
													<p class="mb-0 text-sm font-weight-bold"><?php echo $row['no_hp_pemilik'] ?></p>
												</td>
												<td class="">
													<p class="mb-0 text-sm font-weight-bold"><?php echo $row['jenis_kapal'] ?></p>
												</td>
												<td class="">
													<p class="mb-0 text-sm font-weight-bold"><?php echo $row['status_kapal'] ?></p>
												</td>
												<td class="">
													<p class="mb-0 text-sm font-weight-bold"><?php echo $row['panjang_kapal'] ?></p>
												</td>
												<td class="">
													<p class="mb-0 text-sm font-weight-bold"><?php echo $row['mesin_utama'] ?></p>
												</td>
												<td class="">
													<p class="mb-0 text-sm font-weight-bold"><?php echo $row['tanda_selar'] ?></p>
												</td>
												<td class="">
													<p class="mb-0 text-sm font-weight-bold"><?php echo $row['izin_WPP'] ?></p>
												</td>
												<td class="">
													<p class="mb-0 text-sm font-weight-bold"><?php echo $row['izin_PP'] ?></p>
												</td>
												<td class="">
													<p class="mb-0 text-sm font-weight-bold"><?php echo $row['izin_AT'] ?></p>
												</td>
												<td>
													<a href="<?= base_url(); ?>delete_kapal/<?= $row['id_kapal'];?>" class="btn btn-link text-danger text-gradient px-3 mb-0">
														<i class="far fa-trash-alt me-2"></i>Delete
													</a>
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
	</main>
	<!--   Core JS Files   -->
	<script src="<?= base_url(); ?>assets/js/core/popper.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/core/bootstrap.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/plugins/perfect-scrollbar.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/plugins/smooth-scrollbar.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/plugins/chartjs.min.js"></script>
	<!--<script src="assets/js/stask.js"></script>-->
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
