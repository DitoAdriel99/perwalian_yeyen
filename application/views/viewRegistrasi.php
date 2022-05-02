<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Corona Admin</title>
	<!-- plugins:css -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/vendors/mdi/css/materialdesignicons.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/vendors/css/vendor.bundle.base.css">
	<!-- endinject -->
	<!-- Plugin css for this page -->
	<!-- End plugin css for this page -->
	<!-- inject:css -->
	<!-- endinject -->
	<!-- Layout styles -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
	<!-- End layout styles -->
	<link rel="shortcut icon" href="<?= base_url() ?>assets/images/favicon.png" />
</head>

<body>
	<div class="container-scroller">
		<div class="container-fluid page-body-wrapper full-page-wrapper">
			<div class="row w-100 m-0">
				<div class="content-wrapper full-page-wrapper d-flex align-items-center" style="background-image: url('ukdw.jpg');">
					<div class="card col-lg-4 mx-auto">
						<div class="card-body px-5 py-5">
							<h3 class="card-title text-left mb-3">Register</h3>
							<p class="text-danger"><?php echo $this->session->flashdata('message'); ?></p>
							<form class="forms-sample" method="post" action="<?php echo base_url(); ?>Registrasi/add" enctype="multipart/form-data">
								<div class="form-group">
									<label>Nim</label>
									<input type="text" name="nim" class="form-control p_input" required>
								</div>
								<div class="form-group">
									<label>Username</label>
									<input type="text" name="username" class="form-control p_input" required>
								</div>
								<div class="form-group">
									<label>Email</label>
									<input type="email" name="email" class="form-control p_input" required>
								</div>
								<div class="form-group">
									<label>No Hp</label>
									<input type="text" name="no_hp" class="form-control p_input" required>
								</div>
								<div class="form-group">
									<label>Password</label>
									<input type="password" name="password" class="form-control p_input" required>
								</div>
								<div class="form-group">
									<label>Foto</label>
									<div class="input-group col-xs-12">
										<input type="file" id="profile" name="profile">
									</div>
								</div>
								<div class="text-center">
									<button type="submit" class="btn btn-primary btn-block enter-btn">Daftar</button>
								</div>
								<a href="<?= base_url() . 'Registrasi/back' ?>" class="text-warning">Kembali</a>
							</form>
						</div>
					</div>
				</div>
				<!-- content-wrapper ends -->
			</div>
			<!-- row ends -->
		</div>
		<!-- page-body-wrapper ends -->
	</div>
	<!-- container-scroller -->
	<!-- plugins:js -->
	<script src="<?= base_url() ?>assets/vendors/js/vendor.bundle.base.js"></script>
	<!-- endinject -->
	<!-- Plugin js for this page -->
	<!-- End plugin js for this page -->
	<!-- inject:js -->
	<script src="<?= base_url() ?>assets/js/off-canvas.js"></script>
	<script src="<?= base_url() ?>assets/js/hoverable-collapse.js"></script>
	<script src="<?= base_url() ?>assets/js/misc.js"></script>
	<script src="<?= base_url() ?>assets/js/settings.js"></script>
	<script src="<?= base_url() ?>assets/js/todolist.js"></script>
	<!-- endinject -->
</body>

</html>
