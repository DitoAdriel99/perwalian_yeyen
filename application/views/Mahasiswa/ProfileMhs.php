<?php if ($this->session->userdata('status_akun') == null) { ?>
	<h4>Harap Menunggu Validasi oleh Admin </h4>
<?php } else { ?>
	<h1>Profile Mahasiswa</h1>
<div class="row">
	<div class="card" style="width: 15rem;">
		<img class="card-img-top" src="<?= base_url() ?>/profile/<?= $user->profile ?>" alt="Card image cap">
		<div class="card-body">
			<h5 class="card-title"> Nama : <?= $user->username ?></h5>
			<h5 class="card-title"> NIM : <?= $user->nim ?></h5>
			<h5 class="card-title">Kontak : <?= $user->no_hp?></h5>
		</div>
		<div class="card-body">
		</div>
	</div>
</div>
<?php } ?>

