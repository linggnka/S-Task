<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" type="image/png" href="<?= base_url(); ?>assets/img/logo-stask.png">
	<title>
		Filter Sesuai Jenis Ikan
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
					<a class="nav-link active" href="<?= base_url(); ?>daftar_ikan">
						<div class="icon icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
							<i class="fas fa-fish" style="color:#fff"></i>
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
				<?php echo form_open('user/search_dataproduksi')?>
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
					<h6 class=" text-sm font-weight-bolder">Jenis Ikan: <?php echo $jenis ?><a href="<?= base_url(); ?>user/daftar_ikan" class="ms-2"><i class="far fa-times-circle" style="color: #E63946"></i></a></h6>
				</div>
				<?php echo form_close()?>
				<!--End Search-->
				<div class="col-12 mt-3">
					<div class="card mb-4">
						<div class="card-header pb-0">
							<div class="card-body">
								<form action="<?php echo base_url().'filter/tanggalfilter'; ?>" method="post">
									<div class="col-6 d-flex align-items-center mb-3">
										<h6 class="fw-bolder mb-0">Filter Data Sesuai Tanggal Keberangkatan</h6>
									</div>
									<div class="row">
										<div class="col-sm-4 col-md-3 mb-4">
											<div class="border-radius-lg d-flex align-items-center flex-row">
												<label for="" class=" me-2 my-auto">Dari</label>
												<input type="date" class="form-control" name="tanggalawal_out" id="tanggalawal_out" placeholder="">
											</div>
										</div>
										<div class="col-sm-4 col-md-3 mb-4">
											<div class=" border-radius-lg d-flex align-items-center flex-row">
												<label for="" class=" me-2 my-auto">Sampai</label>
												<input type="date" class="form-control" name="tanggalakhir_out" id="tanggalakhir_out" placeholder="">
											</div>
										</div>
										<div class="col-sm-4 col-md-3 mb-4">
											<div class=" border-radius-lg d-flex align-items-center flex-row">
												<button type="submit" class="btn bg-dark text-white" value="">Tampilkan</button>
											</div>
										</div>
									</div>
								</form>
								<div class="">
									<div class=" border-radius-lg d-flex justify-content-end flex-row">
										<a href="<?= base_url(); ?>user/excel" class="btn btn-link text-dark text-sm mb-0 px-0 ms-4 pt-0">
											<i class="fas fa-file-excel text-lg me-1"></i>Export
										</a>
									</div>
								</div>
							</div>
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
													Nama Pemilik Kapal
												</th>
												<th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">
													Nama Nahkoda
												</th>
												<th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">
													Jumlah ABK
												</th>
												<th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">
													Daerah Asal
												</th>
												<th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">
													Tanggal Berangkat
												</th>
												<th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">
													Tanggal Bongkar
												</th>
												<th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">
													Lama Melaut (Hari)
												</th>
												<th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">
													Status Kapal
												</th>
												<th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">
													Jenis Kapal
												</th>
												<th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">
													GT
												</th>
												<th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">
													Kelompok GT
												</th>
												<th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">
													Panjang Kapal
												</th>
												<th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">
													Mesin Utama (PK)
												</th>
												<th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">
													Alat Tangkap
												</th>
												<th class="ps-2">
													<p class="dropdown cursor-pointer mb-0 text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-0" id="jenis_ikan" data-bs-toggle="dropdown" aria-expanded="false">
														Jenis Ikan
														<i class="ms-2 fas fa-chevron-circle-down text-secondary"></i>
													</p>
													<ul class="dropdown-menu" aria-labelledby="jenis_ikan">
														<form action="<?php echo base_url().'filter/filter_in_jenisikan'; ?>" method="post">
															<a class="dropdown-item border-radius-md text-xs" href="<?= base_url(); ?>daftar_ikan">Semua</a>
															<?php
                            								foreach ($jenis_ikan as $key): ?>
															<input type="submit" class="dropdown-item border-radius-md text-xs" href="<?php echo base_url().'filter/filter_in_jenisikan'; ?>/<?php echo $key->jenis_ikan ?>" name="jenis_ikan" value="<?php echo $key->jenis_ikan ?>">
															<?php endforeach ?>
														</form>
													</ul>
												</th>
												<th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">
													Volume Timbang(Kg)
												</th>
												<th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">
													Volume Estimasi
												</th>
												<th class="ps-2">
													<p class="dropdown cursor-pointer mb-0 text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-0" id="kondisi_ikan" data-bs-toggle="dropdown" aria-expanded="false">
														Kondisi Ikan
														<i class="ms-2 fas fa-chevron-circle-down text-secondary"></i>
													</p>
													<ul class="dropdown-menu" aria-labelledby="kondisi_ikan">
														<?php
                            							foreach ($kondisi_ikan as $key): ?>
														<form action="<?php echo base_url().'filter/filter_in_kondisiikan'; ?>" method="post">
															<input type="submit" class="dropdown-item border-radius-md text-xs" href="<?php echo base_url().'filter/filter_in_kondisiikan'; ?>/<?php echo $key->kondisi_ikan ?>" name="kondisi_ikan" value="<?php echo $key->kondisi_ikan ?>">
														</form>
														<?php endforeach ?>
													</ul>
												</th>
												<th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">Lainnya</th>
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
												<td>
													<p class="mb-0 text-sm font-weight-bold"><?php echo $row['nama_pemilik'] ?> GT</p>
												</td>
												<td class="">
													<p class="mb-0 text-sm font-weight-bold"><?php echo $row['nama_nahkoda'] ?></p>
												</td>
												<td class="">
													<p class="mb-0 text-sm font-weight-bold"><?php echo $row['abk'] ?></p>
												</td>
												<td class="">
													<p class="mb-0 text-sm font-weight-bold"><?php echo $row['daerah_asal'] ?></p>
												</td>
												<td class="">
													<p class="mb-0 text-sm font-weight-bold"><?php echo $row['tanggal_out'] ?></p>
												</td>
												<td class="">
													<p class="mb-0 text-sm font-weight-bold"><?php echo $row['tanggal_in'] ?></p>
												</td>
												<td class="">
													<p class="mb-0 text-sm font-weight-bold"><?php echo $row['jumlah_hari_trip'] ?></p>
												</td>
												<td class="">
													<p class="mb-0 text-sm font-weight-bold"><?php echo $row['status_kapal'] ?></p>
												</td>
												<td class="">
													<p class="mb-0 text-sm font-weight-bold"><?php echo $row['jenis_kapal'] ?></p>
												</td>
												<td class="">
													<p class="mb-0 text-sm font-weight-bold"><?php echo $row['GT'] ?></p>
												</td>
												<td class="">
													<p class="mb-0 text-sm font-weight-bold"><?php echo $row['kelompok_gt'] ?></p>
												</td>
												<td class="">
													<p class="mb-0 text-sm font-weight-bold"><?php echo $row['panjang_kapal'] ?></p>
												</td>
												<td class="">
													<p class="mb-0 text-sm font-weight-bold"><?php echo $row['mesin_utama'] ?></p>
												</td>
												<td class="">
													<p class="mb-0 text-sm font-weight-bold"><?php echo $row['alat_tangkap'] ?></p>
												</td>
												<td class="">
													<p class="mb-0 text-sm font-weight-bold"><?php echo $row['jenis_ikan'] ?></p>
												</td>
												<td class="">
													<p class="mb-0 text-sm font-weight-bold"><?php echo $row['volume_timbang'] ?></p>
												</td>
												<td class="">
													<p class="mb-0 text-sm font-weight-bold"><?php echo $row['volume_estimasi'] ?></p>
												</td>
												<td class="">
													<p class="mb-0 text-sm font-weight-bold"><?php echo $row['kondisi_ikan'] ?></p>
												</td>
												<td class="">
													<p class="mb-0 text-sm font-weight-bold"><?php echo $row['lainnya'] ?></p>
												</td>
												<td>
													<a href="<?= base_url(); ?>hapus_dataproduksi/<?= $row['id_hasil'];?>" class="btn btn-link text-danger text-gradient px-3 mb-0">
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
