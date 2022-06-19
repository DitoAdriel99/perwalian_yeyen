<?php if ($this->session->userdata('status_akun') == null) { ?>
	<h4>Harap Menunggu Validasi oleh Admin </h4>
<?php } else { ?>
	<h1>Dosen Perwalian, Anda</h1>
	<div class="row">
		<div class="card" style="width: 15rem;">
			<img class="card-img-top" src="<?= base_url() ?>/profile/<?= $dosen[0]->profile ?>" alt="Card image cap">
			<div class="card-body">
				<h5 class="card-title"> Nama : <?= $dosen[0]->username ?></h5>
				<h5 class="card-title"> NIDN : <?= $dosen[0]->nidn ?></h5>
				<h5 class="card-title">Kontak : <?= $dosen[0]->no_hp ?></h5>
			</div>
			<div class="card-body">
			</div>
		</div>
		<div class="col-md-6 col-xl-4">
		<div class="card">
			<div class="card-body">
				<div class="d-flex flex-row justify-content-between">
					<h4 class="card-title">Chat</h4>
					<!-- <p class="text-muted mb-1 small">View all</p> -->
				</div>
				<div class="preview-list">
					<?php foreach ($pesan as $row) : ?>
					<div class="preview-item border-bottom">
						<!-- <div class="preview-thumbnail">
							<img src="assets/images/faces/face6.jpg" alt="image" class="rounded-circle">
						</div> -->
						<div class="preview-item-content d-flex flex-grow">
							<div class="flex-grow">
								<div class="d-flex d-md-block d-xl-flex justify-content-between">
									<h6 class="preview-subject"><?= $row->username ?></h6>
									<!-- <p class="text-muted text-small">5 minutes ago</p> -->
								</div>
								<p class="text-muted"><?= $row->pesan ?></p>
							</div>
						</div>

					</div>
					<?php endforeach ?>
				</div>
			</div>
			<form class="forms-sample" method="post" action="<?php echo base_url(); ?>/Mahasiswa/DosenWali/pushCatatan" enctype="multipart/form-data">
				<div class="card-footer">
					<div class="add-items d-flex">
						<input type="hidden" name="id_perwalian" value="<?= $id_perwalian ?>">
						<input type="text" class="form-control" name="pesan" placeholder="Masukan pesan" required>
						<button type="submit" class="btn btn-primary mr-2">Submit</button>

					</div>

				</div>
			</form>
		</div>
	</div>
	</div>
<?php } ?>
