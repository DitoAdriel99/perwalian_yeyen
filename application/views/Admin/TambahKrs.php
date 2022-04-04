<h1>List krs Predfisi</h1>
<div class="row">
	<div class="col-lg-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h4 class="card-title">Data Mahasiswa Perwalian</h4>
				<div class="table-responsive">
					<table class="table table-dark">
						<thead>
							<tr>
								<th> NIM </th>
								<th> Nama </th>
								<th> Angkatan </th>
								<th> Email </th>
								<th> Upload Krs</th>
							</tr>
						</thead>
						<tbody>

							<?php foreach ($mahasiswa as $row) : ?>
								<form class="forms-sample" method="post" action="<?php echo base_url(); ?>Admin/Dashboard/UploadKrs" enctype="multipart/form-data">

									<tr>
										<td><?= $row->nim ?> <input type="hidden" name="nim" value="<?= $row->nim ?>"></td>
										<td><?= $row->username ?></td>
										<td><?= $row->angkatan ?></td>
										<td><?= $row->email ?></td>
										<?php if($row->krs_prediksi == null){ ?>
										<td><input type="file" id="krs_prediksi" name="krs_prediksi"><button type="submit" class="btn btn-primary btn-fw">Upload</button></td>
										<?php }else{ ?>
										<td><a href= "<?= base_url(); ?>krs_prediksi/<?= $row->krs_prediksi ?>" target="_blank">Sudah Ada Krs </a></td>

										<?php } ?>
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
