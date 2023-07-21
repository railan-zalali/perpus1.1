<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman <?= $data['judul']; ?></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.5/css/buttons.bootstrap5.min.css">
	<script src="plugins/sweetalert22/sweetalert2.all.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<!-- <style>
		body {
			zoom: 80%;
			-moz-transform: scale(0.8);
			-webkit-transform: scale(0.8);
			-ms-transform: scale(0.8);
			transform: scale(0.8);
		}
	</style> -->
</head>

<body>
	<nav class="navbar bg-primary navbar-expand-lg shadow fixed-top" data-bs-theme="dark">
		<div class="container">
			<a class="navbar-brand" href="<?php echo BASEURL; ?>">Perpustakaan</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ms-auto">
					<li class="nav-item">
						<a class="nav-link <?php if ($data['judul'] == 'Utama') {
												echo 'active';
											} ?>" href="<?php echo BASEURL; ?>">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?php if ($data['judul'] == 'About') {
												echo 'active';
											} ?>" href="<?php echo BASEURL; ?>/about">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?php if ($data['judul'] == 'Blog') {
												echo 'active';
											} ?>" href="<?php echo BASEURL; ?>/blog">Blog</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?php if ($data['judul'] == 'Contact') {
												echo 'active';
											} ?>" href="<?php echo BASEURL; ?>/perpustakaan/contact">Contact</a>
					</li>
					<?php if (!isset($_SESSION['user'])) : ?>
						<li class="nav-item">
							<a class="btn btn-primary mx-1" data-bs-toggle="modal" data-bs-target="#modalSignin">Login</a>
						</li>
						<li class="nav-item">
							<a class="btn btn-secondary mx-1" data-bs-toggle="modal" data-bs-target="#modalSignout">Register</a>
						</li>
					<?php endif ?>
					<?php if (isset($_SESSION['user'])) : ?>
						<li class="nav-item">
							<a class="nav-link <?php if ($data['judul'] == 'Perpustakaan') {
													echo 'active';
												} ?>" href="<?php echo BASEURL; ?>/perpustakaan">Menu</a>
						</li>
						<li class="nav-item dropdown">
							<div class="dropdown text-end my-2 mx-4">
								<a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
									<img src="<?= BASEURL; ?>/img/userwht.png" alt="mdo" width="32" height="32" class="rounded-circle">
									Hai <?= $_SESSION['username'] ?>
								</a>
								<ul class="dropdown-menu text-small">
									<li><a class="dropdown-item" href="#">New project...</a></li>
									<li><a class="dropdown-item" href="#">Settings</a></li>
									<li><a class="dropdown-item" href="#">Profile</a></li>
									<li>
										<hr class="dropdown-divider">
									</li>
									<li><a class="dropdown-item" href="<?= BASEURL; ?>/users_logout/logout">Sign out</a></li>
								</ul>
							</div>

						</li>
					<?php endif ?>
				</ul>
			</div>
		</div>
	</nav>
	<?= Flasher::login(); ?>
	<div class="modal fade mt-5 bg-transparent" tabindex="-1" id="modalSignin" aria-labelledby="judulModal" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content rounded-4 shadow">
				<div class="modal-header p-5 pb-4 border-bottom-0">
					<!-- <h1 class="modal-title fs-5" >Modal title</h1> -->
					<h1 class="fw-bold mb-0 fs-2">Login</h1>
				</div>

				<div class="modal-body p-5 pt-0">
					<form action="<?= BASEURL; ?>/home/proses_login" method="POST">
						<div class="form-floating mb-3">
							<input type="text" class="form-control rounded-3" name="username" id="username" autofocus>
							<label for="username">Username</label>
						</div>
						<div class="form-floating mb-3">
							<input type="password" class="form-control rounded-3" name="password" id="password">
							<label for="password">Password</label>
						</div>
						<button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Login</button>
					</form>
					<small class="text-muted">No have account? register <b>Now !</b></small>
					<hr class="my-4">
					<h2 class="fs-5 fw-bold mb-3">Register</h2>
					<a class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-3" data-bs-toggle="modal" data-bs-target="#modalSignout">Register</a>

				</div>
			</div>
		</div>
	</div>

	<div class="modal fade mt-0" tabindex="-1" id="modalSignout" aria-labelledby="judulModal" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content rounded-4 shadow">
				<div class="modal-header p-5 pb-4 border-bottom-0">
					<!-- <h1 class="modal-title fs-5" >Modal title</h1> -->
					<h1 class="fw-bold mb-0 fs-2">Register</h1>
				</div>

				<div class="modal-body p-5 pt-0">
					<form action="<?= BASEURL; ?>/home/proses_register" method="POST">
						<input type="hidden" name="keterangan" id="keterangan" value="tidak aktif">
						<div class="form-floating mb-3">
							<input type="text" class="form-control rounded-3" name="nama_user" id="nama_user">
							<label for="nama_user">Nama</label>
						</div>
						<div class="form-floating mb-3">
							<input type="text" class="form-control rounded-3" name="username" id="username">
							<label for="username">Username</label>
						</div>
						<div class="form-floating mb-3">
							<input type="email" class="form-control rounded-3" name="email" id="email">
							<label for="email">Email address</label>
						</div>
						<div class="form-floating mb-3">
							<input type="password" class="form-control rounded-3" name="password" id="password">
							<label for="password">Password</label>
						</div>
						<button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Register</button>
					</form>
					<small class="text-muted">Already have account? Login <b>Now !</b></small>
					<hr class="my-4">
					<h2 class="fs-5 fw-bold mb-3">Login</h2>
					<a class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-3" data-bs-toggle="modal" data-bs-target="#modalSignin">Login</a>

				</div>
			</div>
		</div>
	</div>