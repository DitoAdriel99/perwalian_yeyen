<div class="row">
	<div class="col-xl-3 col-sm-6 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-9">
						<div class="d-flex align-items-center align-self-start">
							<h3 class="mb-0">$12.34</h3>
							<p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p>
						</div>
					</div>
					<div class="col-3">
						<div class="icon icon-box-success ">
							<span class="mdi mdi-arrow-top-right icon-item"></span>
						</div>
					</div>
				</div>
				<h6 class="text-muted font-weight-normal">Potential growth</h6>
			</div>
		</div>
	</div>
	<div class="col-xl-3 col-sm-6 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-9">
						<div class="d-flex align-items-center align-self-start">
							<h3 class="mb-0">$17.34</h3>
							<p class="text-success ml-2 mb-0 font-weight-medium">+11%</p>
						</div>
					</div>
					<div class="col-3">
						<div class="icon icon-box-success">
							<span class="mdi mdi-arrow-top-right icon-item"></span>
						</div>
					</div>
				</div>
				<h6 class="text-muted font-weight-normal">Revenue current</h6>
			</div>
		</div>
	</div>
	<div class="col-xl-3 col-sm-6 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-9">
						<div class="d-flex align-items-center align-self-start">
							<h3 class="mb-0">$12.34</h3>
							<p class="text-danger ml-2 mb-0 font-weight-medium">-2.4%</p>
						</div>
					</div>
					<div class="col-3">
						<div class="icon icon-box-danger">
							<span class="mdi mdi-arrow-bottom-left icon-item"></span>
						</div>
					</div>
				</div>
				<h6 class="text-muted font-weight-normal">Daily Income</h6>
			</div>
		</div>
	</div>
	<div class="col-xl-3 col-sm-6 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-9">
						<div class="d-flex align-items-center align-self-start">
							<h3 class="mb-0">$31.53</h3>
							<p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p>
						</div>
					</div>
					<div class="col-3">
						<div class="icon icon-box-success ">
							<span class="mdi mdi-arrow-top-right icon-item"></span>
						</div>
					</div>
				</div>
				<h6 class="text-muted font-weight-normal">Expense current</h6>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h4 class="card-title">Data Dosen</h4>
				<div class="table-responsive">
					<table class="table table-dark">
						<thead>
							<tr>
								<th> # </th>
								<th> NIDN </th>
								<th> Nama </th>
								<th> No Hp </th>
							</tr>
						</thead>
						<tbody id="listDosen">

						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
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
									<td><a href="<?php echo base_url('/Admin/Dashboard/ViewTambah/'. $row->nim ) ?>" class="btn btn-small"><i class="fas fa-edit"></i> Edit</a></td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h4 class="card-title">Jadwal Perwalian</h4>
				<a href="<?= base_url('/Admin/Dashboard/ViewTambahJadwal') ?>" class="btn btn-primary btn-fw">Tambah Jadwal Perwalian</a>
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

<script>
	getDataDosen();
	// getDataMahasiswa();

	function getDataDosen() {
		$.ajax({
			type: 'POST',
			url: '<?= base_url() . 'Admin/Dashboard/getDataDosen' ?>',
			dataType: 'json',
			success: function(data) {
				console.log(data);
				var baris = '';
				for (var i = 0; i < data.length; i++) {
					baris += '<tr>' +
						'<td>' + (i + 1) + '</td>' +
						'<td>' + data[i].nidn + '</td>' +
						'<td>' + data[i].username + '</td>' +
						'<td>' + data[i].no_hp + '</td>' +
						'<tr>';
				}
				$('#listDosen').html(baris);
			}
		});
	}

	// function getDataMahasiswa() {
	// 	$.ajax({
	// 		type: 'POST',
	// 		url: '<?= base_url() . 'Admin/Dashboard/getDataMahasiswa' ?>',
	// 		dataType: 'json',
	// 		success: function(data) {
	// 			console.log(data);
	// 			var baris = '';
	// 			for (var i = 0; i < data.length; i++) {
	// 				baris += '<tr>' +
	// 					'<td>' + (i + 1) + '</td>' +
	// 					'<td>' + data[i].nim + '</td>' +
	// 					'<td>' + data[i].username + '</td>' +
	// 					'<td>' + data[i].no_hp + '</td>' +
	// 					'<td><a class="btn btn-primary mb-2" href="<?= base_url('Admin/Dashboard/ViewTambah/'); ?>">Tambah Data</a></td>' +
	// 					'<tr>';
	// 			}
	// 			$('#listMahasiswa').html(baris);
	// 		}
	// 	});
	// }
</script>
