<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" type="image/png" href="assets/img/logo-stask.png">
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

<!-- Navbar Left -->

<body class="g-sidenav-show ">
	<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3" id="sidenav-main">
		<div class="sidenav-header">
			<i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
			<a class="navbar-brand m-0" href="">
				<img src="assets/img/logo-stask.png" class="navbar-brand-img h-100" alt="main_logo">
				<span class="ms-1 font-weight-bold text-dark">Syahbandar Task</span>
			</a>
		</div>
		<hr class="horizontal dark mt-0">
		<div class="collapse navbar-collapse  w-auto  max-height-vh-100 h-100" id="sidenav-collapse-main">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link  active" href="<?= base_url(); ?>home">
						<div class="icon icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
							<i class="fas fa-home" style="color:#fff"></i>
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
					<a class="nav-link  " href="user/datakapal_user">
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
					<a class="nav-link" href="<?= base_url(); ?>daftar_ikan">
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
		<div class="container-fluid py-4">
			<div class="row  mt-4">
				<div class="col-lg-6 mb-4 mb-lg-0">
					<div class="">
						<div class="overflow-hidden position-relative border-radius-lg h-100" style="background-image: url('assets/img/map.jpg');">
							<span class="mask bg-gradient-dark"></span>
							<div class="card-body position-relative d-flex flex-column h-100 p-3">
								<h5 class="text-white font-weight-bolder mb-4 pt-2">Kedatangan</h5><br><br><br><br><br><br>
								<a class="text-white text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="<?= base_url(); ?>kedatangan">
									Mulai Pendataan
									<i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="overflow-hidden position-relative border-radius-lg h-100" style="background-image: url('assets/img/map.jpg');">
						<span class="mask bg-gradient-dark"></span>
						<div class="card-body position-relative d-flex flex-column h-100 p-3">
							<h5 class="text-white font-weight-bolder mb-4 pt-2">Keberangkatan</h5><br><br><br><br><br><br>
							<a class="text-white text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="<?= base_url(); ?>keberangkatan">
								Mulai Pendataan
								<i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
							</a>
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
		}
	</script>
	
	<!-- Github buttons -->
	<script async defer src="https://buttons.github.io/buttons.js"></script>
	<script src="assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
</body>

</html>
