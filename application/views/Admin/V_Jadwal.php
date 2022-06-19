<h1>Jadwal</h1>
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
								<th style="color: white;"> Angkatan </th>
								<th style="color: white;"> NIDN </th>
								<th style="color: white;"> Waktu </th>
								<th style="color: white;"> Pukul </th>
								<th style="color: white;"> Tautan </th>
								<th style="color: white;"> Aksi </th>
							</tr>
						</thead>
						<tbody>
						<?php foreach ($jadwal as $row) : ?>
								<tr>
									<td style="color: white;"><?= $row->angkatan ?> </td>
									<td style="color: white;"><?= $row->nidn ?> </td>
									<td style="color: white;"><?= $row->tanggal ?> </td>
									<td style="color: white;"><?= $row->jam ?> </td>
									<td style="color: white;"><?= $row->link ?> </td>
									<td>
									<a href="<?= base_url().'Admin/Jadwal/ViewEditJadwal/'.$row->id_jadwal?>"type="button" class="btn btn-warning btn-fw">Edit</a>
									<a href="<?= base_url().'Admin/Jadwal/HapusJadwal/'.$row->id_jadwal?>"type="button" class="btn btn-danger btn-fw">Delete</a>
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
