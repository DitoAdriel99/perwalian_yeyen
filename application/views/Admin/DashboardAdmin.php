<h1>Halaman Monitoring</h1>
<div class="row ">
	<div class="col-12 grid-margin">
		<div class="card">
			<div class="card-body">
				<h4 class="card-title">Order Status</h4>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th> MAHASISWA </th>
								<th> NIM </th>
								<th> IPK </th>
								<th> EMAIL </th>
								<th> ANGKATAN </th>
								<th> NO HP </th>
								<th> STATUS </th>

							</tr>
						</thead>
						<tbody>
							<?php foreach ($data as $val) : ?>
								<tr>
									<td>
										<img src="<?= base_url() . '/gambar_mahasiswa/' . $val->profile ?>" alt="image">
										<span class="pl-2"><?= $val->username ?></span>
									</td>
									<td> <?= $val->nim ?> </td>
									<td> <?= $val->ipk ?> </td>
									<td> <?= $val->email ?> </td>
									<td> <?= $val->angkatan ?> </td>
									<td> <?= $val->no_hp ?> </td>
									<?php if ($val->ipk > "5") { ?>
										<td>
											<div class="badge badge-outline-success">BAGUS</div>
										</td>
									<?php } elseif($val->ipk < "5") { ?>
										<td>
											<div class="badge badge-outline-danger">PERBAIKI</div>
										</td>
									<?php } ?>

								</tr>
							<?php endforeach ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>