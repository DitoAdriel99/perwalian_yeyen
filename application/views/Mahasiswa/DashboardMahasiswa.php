<h1>Selamat Datang, <?= $this->session->userdata('username'); ?></h1>
<div class="row">
	<?php if ($perwalian['0']->catatan == null) { ?>

		<div class="card" style="width: 18rem;">
			<div class="card-body">
				<h5 class="card-title">Tidak Ada Catatan</h5>

			</div>
		</div>
	<?php } else { ?>
		<div class="card" style="width: 18rem;">
			<div class="card-body">
				<h5 class="card-title">Catatan Dari Dosen Wali</h5>
				<h6 class="card-subtitle mb-2 "><?= $perwalian['0']->username ?></h6>
				<p class="card-text"><?= $perwalian['0']->catatan ?></p>
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
				<h4 class="card-title">Jadwal Perwalian</h4>
				<div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
					<div class="text-md-center text-xl-left">
						<h6 class="mb-1"><?= $jadwal['0']->angkatan ?></h6>
						<p class="text-muted mb-0"><?= $jadwal['0']->nidn ?></p>
					</div>
					<div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
						<a href="<?= $jadwal['0']->link ?>" target="_blank" class="card-link">link</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
