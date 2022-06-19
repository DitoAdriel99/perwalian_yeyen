<div class="row">
	<div class="col-lg-3 grid-margin stretch-card">
		<div class="card" style="width: 18rem;">
			<img class="card-img-top" src="<?= base_url() ?>/profile/<?= $mahasiswa->profile ?>" alt="Card image cap">
			<form method="post" action="<?= base_url() . 'Dosen/Dashboard/TambahCatatan/' . $mahasiswa->id_perwalian ?>">
				<div class="card-body">
					<h5 class="card-title"><?= $mahasiswa->username ?>,<?= $mahasiswa->nim ?></h5>
					<p class="card-text">Ipk: <?= $mahasiswa->ipk ?></p>
					<?php if ($cekkrs < 1) { ?>
						<h5>KRS belum tersedia</h5>
					<?php } else { ?>
						<a href="<?= base_url() . 'krs_prediksi/' . $krs->krs_prediksi ?>" target="_blank" class="card-link">Download Krs Prediksi</a>
					<?php } ?>
					
					<!-- <p class="card-text">Catatan:</p>
					

					<textarea style="color: white;" class="form-control" name="catatan" rows="4"></textarea>
					<br>
					<button class="btn btn-primary">Tambahkan Catatan</button>
					<p class="card-text"><?= $mahasiswa->catatan ?></p>
					<br>
					<a href="<?= base_url() . 'Dosen/Dashboard/HapusCatatan/' . $mahasiswa->id_perwalian ?>" class="btn btn-danger">Hapus Catatan</a> -->
				</div>
			</form>
		</div>
	</div>
	<div class="col-lg-5">
		<div class="card">
			<div class="card-body">
				<h4 class="card-title">Daftar Matakuliah</h4>
				</p>
				<div class="table-responsive">
					<table class="table table-striped">
						<thead>
							<tr>
								<th style="color: white;"> Kode Matakuliah </th>
								<th style="color: white;"> Nama Matakuliah </th>
								<th style="color: white;"> Kehadiran </th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($chart as $val) : ?>
								<tr>
									<td style="color: white;"><?= $val->kode_mk ?> </td>
									<td style="color: white;"><?= $val->nama_mk ?></td>
									<?php if ($val->absensi < 75) { ?>
										<td style="color: white;"><label class="badge badge-danger">Kurang</label></td>
									<?php } else { ?>
										<td style="color: white;"><label class="badge badge-success">Baik</label></td>
									<?php } ?>
								</tr>
							<?php endforeach ?>
						</tbody>
					</table>
				</div>
			</div>
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

			<form class="forms-sample" method="post" action="<?php echo base_url(); ?>/Dosen/Dashboard/pushCatatan" enctype="multipart/form-data">
				<div class="card-footer">
					<div class="add-items d-flex">
						<input type="hidden" name="id_perwalian" value="<?= $mahasiswa->id_perwalian ?>">
						<input type="text" class="form-control" name="pesan" placeholder="Masukan pesan" required>
						<button type="submit" class="btn btn-primary mr-2">Submit</button>

					</div>

				</div>
			</form>
		</div>
	</div>
</div>
