<div class="row">
	<div class="col-lg-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h4 class="card-title">Data Mahasiswa Perwalian</h4>
				<div class="table-responsive">
					<table class="table table-dark">
						<thead>
							<tr>
								<th  style="color: white;"> NIM </th>
								<th  style="color: white;"> Nama </th>
								<th  style="color: white;"> Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($perwalian as $row) : ?>
								<form class="forms-sample" method="post" action="<?php echo base_url(); ?>Dosen/Dashboard/TambahCatatan" enctype="multipart/form-data">

									<tr>
										<input type="hidden" name="id_perwalian" value="<?= $row->id_perwalian ?>">
										<td  style="color: white;"><?= $row->nim ?> </td>
										<td  style="color: white;"><?= $row->username ?></td>
										<td>
											<a href="<?= base_url() . 'Dosen/Dashboard/ViewTambahCatatan/' . $row->nim?>">Cek Detail</a>
										</td>
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
