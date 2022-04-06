<h1>Jadwal</h1>
<div class="row">
	<div class="col-lg-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h4 class="card-title">Data Mahasiswa Perwalian</h4>
				<div class="table-responsive">
					<table class="table table-dark">
						<thead>
							<tr>
								<th> id </th>
								<th> nidn </th>
								<th> angkatan </th>
								<th> tanggal</th>
								<th> jam </th>
								<th> link</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($jadwal as $row ) : ?>
								<form class="forms-sample" method="post" action="<?php echo base_url(); ?>Dosen/Dashboard/TambahCatatan" enctype="multipart/form-data">
									<tr>
										<td><?= $row->id_jadwal ?></td>
										<td><?= $row->nidn ?></td>
										<td><?= $row->angkatan ?></td>
										<td><?= $row->tanggal ?></td>
										<td><?= $row->jam ?></td>
										<td><?= $row->link ?></td>
									</tr>
								</form>
								<?php endforeach ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
