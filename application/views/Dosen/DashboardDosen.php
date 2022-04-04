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
								<th> Catatan </th>
								<th> Aksi</th>
							</tr>
						</thead>
						<tbody>

							<?php foreach ($perwalian as $row) : ?>
								<form class="forms-sample" method="post" action="<?php echo base_url(); ?>Dosen/Dashboard/TambahCatatan" enctype="multipart/form-data">

									<tr>
										<input type="hidden" name="id_perwalian" value="<?= $row->id_perwalian ?>">
										<td><?= $row->nim ?> </td>
										<td><?= $row->username ?></td>
										<?php if ($row->catatan == null) { ?>
											<td><input type="text" class="form-control" id="catatan" name="catatan" placeholder="Masukan Catatan"></td>
											<td><button type="submit" class="btn btn-primary btn-fw">Send</button></td>
										<?php } else { ?>
											<td><?= $row->catatan ?></td>
										<?php }  ?>
										
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
