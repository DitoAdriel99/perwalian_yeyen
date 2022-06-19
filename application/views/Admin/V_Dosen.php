<h1>Data Dosen</h1>
<div class="row">
	<div class="col-lg-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h4 class="card-title">Dosen Perwalian</h4>
				<a type="button" href="<?= base_url().'admin/TambahDosen/ViewTambahDosen' ?>" class="btn btn-link btn-fw">Registrasi Dosen</a>
				<div class="table-responsive">
					<table class="table table-dark">
						<thead>
							<tr>
								<th style="color: white;"> # </th>
								<th style="color: white;"> NIDN </th>
								<th style="color: white;"> Nama </th>
								<th style="color: white;"> Email </th>
								<th style="color: white;"> PJ Angkatan </th>
								<th style="color: white;"> Aksi</th>
							</tr>
						</thead>
						<tbody id="listDosen">
						<?php foreach ($dosen as $row) : ?>
								<tr>
									<td style="color: white;"><?= $row->id_user ?> </td>
									<td style="color: white;"><?= $row->nidn ?></td>
									<td style="color: white;"><?= $row->username ?></td>
									<td style="color: white;"><?= $row->email ?></td>
									<td style="color: white;"><?= $row->pj_angkatan ?></td>
									<td style="color: white;">
										<a type="button" href="<?= base_url().'admin/TambahDosen/ViewEdit/'.$row->nidn ?>" class="btn btn-dark btn-icon-text"> Edit <i class="mdi mdi-file-check btn-icon-append"></i></a>
										<a type="button" href="<?= base_url().'admin/TambahDosen/destroy/'.$row->nidn ?>" class="btn btn-danger btn-icon-text"><i class="mdi mdi-upload btn-icon-prepend"></i> Delete </a>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
