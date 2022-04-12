<h1>Halaman Mahasiswa</h1>
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
							</tr>
						</thead>
						<tbody>

							<?php foreach ($mahasiswa as $row) : ?>
								<tr>
									<td><?= $row->nim ?> </td>
									<td><?= $row->username ?></td>
									<td><?= $row->angkatan ?></td>
									<td><?= $row->email ?></td>
									<!-- <td><a href="<?php echo base_url('/Admin/Mahasiswa/ViewTambah/'. $row->nim ) ?>" class="btn btn-small"><i class="fas fa-edit"></i> Edit</a></td> -->
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
