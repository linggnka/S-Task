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
					<a class="nav-link" href="<?= base_url(); ?>kedatangan">
						<div class="icon icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
							<i class="fas fa-anchor" style="color:#457B9D"></i>
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
					<a class="nav-link active" href="<?= base_url(); ?>user/datakapal_user">
						<div class="icon icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
							<i class="fas fa-ship " style="color:#fff"></i>
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
		<div class="container-fluid py-4">
			<div class="row">
				<!--Fitur Search-->
				<?php echo form_open('user/search_kapaluser')?>
				<div class="row">
					<div class="col-auto">
						<div class="input-group mb-4">
							<span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
							<input type="text" name="key" id="carikapal" autocomplete="off" class="form-control" placeholder="Cari Kapal">
						</div>
					</div>
					<div class="col-auto">
						<div class="mb-3">
							<button type="submit" name="submit" id="carikapal" class="btn bg-dark text-white" value="search">Cari</button>
						</div>
					</div>
					<h6 class=" text-sm font-weight-bolder">Search For : <?php echo $key ?>
						<a href="<?= base_url(); ?>user/datakapal_user" class="ms-2">
							<i class="far fa-times-circle" style="color: #E63946"></i>
						</a>
					</h6>
				</div>
				<?php echo form_close()?>
				<!--End Search-->
				<div class="col-12 mt-3">
					<div class="card mb-4">
						<div class="card-header pb-0 p-5">
							<div class=" border-radius-lg d-flex justify-content-end flex-row">
								<a href="<?= base_url(); ?>user/excel_kapal" class="btn btn-link text-dark text-sm mb-0 px-0 ms-4 pt-0">
									<i class="fas fa-file-excel text-lg me-1"></i>Export
								</a>
							</div>
							<h6 class="fw-bolder mb-3">Daftar Kapal</h6>
							<div class="card-body px-0 pt-0 pb-2">
								<div class="table-responsive p-0">
									<table class="table table-hover align-items-center mb-0">
										<thead>
											<tr>
												<th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ">
													No
												</th>
												<th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ">
													Nama Kapal
												</th>
												<th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2 ">
													GT Kapal
												</th>
												<th class="ps-2">
													<p class="dropdown cursor-pointer mb-0 text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-0" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
														Kelompok GT
														<i class="ms-2 fas fa-chevron-circle-down text-secondary"></i>
													</p>
													<ul class="dropdown-menu" aria-labelledby="dropdownTable">
														<form action="<?php echo base_url().'filter/filter_kapal_kelompokgt'; ?>" method="post">
															<a class="dropdown-item border-radius-md text-xs" href="<?= base_url(); ?>datakapal_user">Semua</a>
															<?php
                          									foreach ($kelompokgt as $key): ?>
															<input type="submit" class="dropdown-item border-radius-md text-xs" href="" name="kelompok_gt" value="<?php echo $key->kelompok_gt ?>">
														</form>
														<?php endforeach ?>
													</ul>
												</th>
												<th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2 ">
													Tanggal Daftar
												</th>
												<th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2 ">
													Pemilik
												</th>
												<th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2 ">
													No. HP Pemilik
												</th>
												<th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2 ">
													Nama Nahkoda
												</th>
												<th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2 ">
													Jumlah ABK
												</th>
												<th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2 ">
													Alat Tangkap
												</th>
												<th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2 ">
													Alat Bantu Tangkap
												</th>
												<th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2 ">
													Jenis Kapal
												</th>
												<th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2 ">
													Status Kapal
												</th>
												<th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2 ">
													Panjang Kapal</th>
												<th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2 ">
													Mesin Utama (PK)
												</th>
												<th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2 ">
													Tanda Selar
												</th>
												<th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2 ">
													Jenis Izin
												</th>
												<th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2 ">
													Izin WPP
												</th>
												<th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2 ">
													Izin Pelabuhan Pangkalan
												</th>
												<th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2 ">
													Izin Alat Tangkap
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
													<p class="mb-0 text-sm font-weight-bold"><?php echo $row['nama_nahkoda'] ?></p>
												</td>
												<td class="">
													<p class="mb-0 text-sm font-weight-bold"><?php echo $row['abk'] ?></p>
												</td>
												<td class="">
													<p class="mb-0 text-sm font-weight-bold">
														<?php echo $row['alat_tangkap'] ?><?php echo $row['alat_tangkap2'] ?></p>
												</td>
												<td class="">
													<p class="mb-0 text-sm font-weight-bold"><?php echo $row['alat_bantu_tangkap'] ?></p>
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
													<p class="mb-0 text-sm font-weight-bold"><?php echo $row['jenis_izin'] ?></p>
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
													<a href="<?= base_url(); ?>rincian_kapal/<?= $row['id_kapal'];?>" class="btn btn-outline-primary btn-sm mb-0">Rincian</a>
												</td>
												<td>
													<a href="<?= base_url(); ?>edit_kapal/<?= $row['id_kapal'];?>" class="btn btn-link text-dark px-3 mb-0 pb-0">
														<i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit
													</a>
													<br>
													<form action="<?php echo base_url().'user/hapus_kapal'; ?>/<?= $row['id_kapal'];?>" method="post">
														<input type="hidden" name="id_kapal" id="id_kapal" value="<?= $row['id_kapal'];?>" />
														<input type="hidden" name="kondisi" id="" placeholder="" value="Non Aktif">
														<button type="submit" href="" class="btn btn-link text-danger text-gradient px-3 mb-0">
															<i class="far fa-trash-alt me-2"></i>Delete
														</button>
													</form>
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
	<script src="<?= base_url(); ?>assets/js/stask.js"></script>
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
