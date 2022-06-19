<h1>KRS Prediksi</h1>
<div class="row">
	<p class="text-danger"><?php echo $this->session->flashdata('peringatan'); ?></p>
	<p class="text-primary"><?php echo $this->session->flashdata('message'); ?></p>

	<div class="col-lg-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h4 class="card-title">Data Mahasiswa Perwalian</h4>
				<div class="table-responsive">
					<table class="table table-dark">
						<a href="<?= base_url('/Admin/Krs/halamanUploadKrs') ?>" class="btn btn-primary btn-fw">Tambah Jadwal Perwalian</a>

						<thead>
							<tr>
								<th style="color: white;"> Angkatan </th>
								<th style="color: white;"> KRS Prediksi </th>
								<th style="color: white;"> Upload Krs</th>
								<!-- <th> Aksi</th> -->
							</tr>
						</thead>
						<tbody>

							<?php foreach ($angkatan as $row) : ?>
								<form class="forms-sample" method="post" action="<?php echo base_url(); ?>Admin/Krs/UploadKrs" enctype="multipart/form-data">

									<tr>
										<td style="color: white;"><?= $row->angkatan ?> <input type="hidden" name="angkatan" value="<?= $row->angkatan ?>"></td>
										<td><a type="button" class="btn btn-link" href="<?= base_url() . 'krs_prediksi/' . $row->krs_prediksi ?>">Link</a></td>

										<td><input type="file" id="krs_prediksi" name="krs_prediksi"><button type="submit" class="btn btn-primary btn-fw" style="width:10px;">Upload</button></td>

									</tr>
								</form>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
