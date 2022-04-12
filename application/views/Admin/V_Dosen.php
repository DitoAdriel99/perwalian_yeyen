<h1>tambah dosen</h1>
<div class="row">
	<div class="col-lg-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h4 class="card-title">Data Dosen</h4>
				<a type="button" href="<?= base_url().'admin/TambahDosen/ViewTambahDosen' ?>" class="btn btn-link btn-fw">Tambah Dosen</a>
				<div class="table-responsive">
					<table class="table table-dark">
						<thead>
							<tr>
								<th> # </th>
								<th> NIDN </th>
								<th> Nama </th>
								<th> Email </th>
								<th> Aksi</th>
							</tr>
						</thead>
						<tbody id="listDosen">
						<?php foreach ($dosen as $row) : ?>
								<tr>
									<td><?= $row->id_user ?> </td>
									<td><?= $row->nidn ?></td>
									<td><?= $row->username ?></td>
									<td><?= $row->email ?></td>
									<td>
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