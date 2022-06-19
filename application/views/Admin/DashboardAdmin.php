<h1> Halaman Monitoring </h1>
<div class="row">
	<div class="col-lg-6 grid-margin">
		<div class="card">
			<div class="card-body">
				<div class="chartjs-size-monitor">
					<div class="chartjs-size-monitor-expand">
						<div class=""></div>
					</div>
					<div class="chartjs-size-monitor-shrink">
						<div class=""></div>
					</div>
				</div>
				<!-- <h4 class="card-title">DASHBOARD</h4> -->
				<canvas id="pieChart" style="height: 273px; display: block; width: 546px;" width="682" height="341" class="chartjs-render-monitor"></canvas>
				<?php
				//Inisialisasi nilai variabel awal
				$nama_jurusan = "";
				$jumlah = null;
				foreach ($chart as $item) {
					$jur = $item->angkatan;
					$nama_jurusan .= "'$jur'" . ", ";
					$jum = $item->total;
					$jumlah .= "$jum" . ", ";
				}
				?>
			</div>
		</div>
	</div>
	<div class="col-6 grid-margin">
		<div class="card">
			<div class="card-body">
				<h4 class="card-title">Daftar Mahasiswa</h4>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th  style="color: white;"> MAHASISWA </th>
								<th  style="color: white;"> NIM </th>
								<th  style="color: white;"> IPK </th>
								<th  style="color: white;"> EMAIL </th>
								<th style="color: white;"> ANGKATAN </th>
								<th  style="color: white;"> NO HP </th>
								<th  style="color: white;"> STATUS </th>

							</tr>
						</thead>
						<tbody>
							<?php foreach ($monitoring as $val) : ?>
								<tr>
									<td  style="color: white;">
										<img src="<?= base_url() . '/profile/' . $val->profile ?>" alt="image">
										<span class="pl-2"><?= $val->username ?></span>
									</td>
									<td style="color: white;"> <?= $val->nim ?> </td>
									<td  style="color: white;"> <?= $val->ipk ?> </td>
									<td  style="color: white;"> <?= $val->email ?> </td>
									<td  style="color: white;"> <?= $val->angkatan ?> </td>
									<td  style="color: white;"> <?= $val->no_hp ?> </td>
									<?php if ($val->ipk > "5") { ?>
										<td>
											<div class="badge badge-outline-success">BAGUS</div>
										</td>
									<?php } else { ?>
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
<script>
	pieChart()

	function pieChart() {
		$.ajax({
			url: "<?= base_url() . 'admin/dashboard/chart' ?>",
			type: 'JSON',
			success: function(result) {
				console.log(result.length)
				var xValues = [<?php echo $nama_jurusan; ?>];
				var yValues =  [<?php echo $jumlah; ?>];
				var barColors = [
					"#b91d47",
					"#00aba9",
					"#2b5797",
					"#e8c3b9",
					"#1e7145"
				];

				new Chart("pieChart", {
					type: "pie",
					data: {
						labels: xValues,
						datasets: [{
							backgroundColor: barColors,
							data: yValues
						}]
					},
					options: {
						title: {
							display: true,
							text: " Jumlah Angkatan"
						}
					}
				});
			}
		});
	}
</script>
