<h1>Halaman Jadwal</h1>
<div class="row">
	<div class="col-lg-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h4 class="card-title">Jadwal Perwalian</h4>
				<a href="<?= base_url('/Admin/Jadwal/ViewTambahJadwal') ?>" class="btn btn-primary btn-fw">Tambah Jadwal Perwalian</a>
				<div class="table-responsive">
					<table class="table table-dark">
						<thead>
							<tr>
								<th> Angkatan </th>
								<th> nidn </th>
								<th> Tanggal </th>
								<th> Jam </th>
								<th> Link </th>
							</tr>
						</thead>
						<tbody>
						<?php foreach ($jadwal as $row) : ?>
								<tr>
									<td><?= $row->angkatan ?> </td>
									<td><?= $row->nidn ?> </td>
									<td><?= $row->tanggal ?> </td>
									<td><?= $row->jam ?> </td>
									<td><?= $row->link ?> </td>

								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>