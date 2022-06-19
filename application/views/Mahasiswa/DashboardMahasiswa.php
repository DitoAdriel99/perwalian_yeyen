<?php if ($this->session->userdata('status_akun') == null) { ?>
	<h4>Harap Menunggu Validasi oleh Admin </h4>
<?php } else { ?>

	<h1>Selamat Datang, <?= $this->session->userdata('username'); ?></h1>
	<div class="row" style="margin-left: 10%;">
		<!-- <div class="card" style="width: 18rem;">

			<div class="card-body">
				<h5 style="color: red;" class="card-title">Catatan Dari Dosen Wali</h5>
				<?php foreach ($catatan as $row) : ?>
					<h6 style="color: white;" class="card-subtitle mb-2 "><?= $row->tanggal . ':' ?></h6>
					<h6 style="color: white;" class="card-subtitle mb-2 "><?= $row->catatan ?></h6>
				<?php endforeach ?>
			</div>
		</div> -->


		<?php if ($cek < 1 || $jadwal == false) { ?>
			<div class="col-md-4 grid-margin stretch-card">
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
						<h4 class="card-title">Jadwal Perwalian</h4>
						<div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
							<div class="text-md-center text-xl-left">
								<h6 class="mb-1">Belum ada</h6>
								<p class="text-muted mb-0">Belum ada</p>
								<p class="text-muted mb-0">Tanggal : Belum ada, jam : Belum ada </p>
							</div>

						</div>
					</div>
				</div>
			</div>
		<?php } else { ?>

			<div class="col-md-4 grid-margin stretch-card">
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
						<h4 class="card-title">Jadwal Perwalian</h4>
						<div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
							<div class="text-md-center text-xl-left" style="color: white;">
								<h6 class="mb-1"><?= $jadwal['0']->angkatan ?></h6>
								<p class="text-muted mb-0"><?= $jadwal['0']->nidn ?></p>
								<p class="text-muted mb-0">Tanggal : <?= $jadwal['0']->tanggal ?>, jam : <?= $jadwal['0']->jam ?></p>
							</div>
							<div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
								<a href="<?= $jadwal['0']->link ?>" target="_blank" class="card-link">link</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>

		<div class="col-md-4 grid-margin stretch-card">
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
					<h4 class="card-title">Krs Prediksi</h4>
					<div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
						<div class="text-md-center text-xl-left">
							<?php if ($cekkrs < 1) { ?>
								<h5>KRS belum tersedia</h5>
							<?php } else { ?>
								<a href="<?= base_url() . 'krs_prediksi/' . $krs->krs_prediksi ?>" target="_blank" class="card-link">Download Krs Prediksi</a>
							<?php } ?>
						</div>

					</div>
				</div>
			</div>
		</div>

	</div>
<?php } ?>
