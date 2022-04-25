<div class="card" style="width: 18rem;">
	<img class="card-img-top" src="<?= base_url() ?>/gambar_mahasiswa/<?= $data->profile ?>" alt="Card image cap">
	<form method="post" action="<?= base_url() . 'Dosen/Dashboard/TambahCatatan/' . $data->id_perwalian ?>">
		<div class="card-body">
			<h5 class="card-title"><?= $data->username ?>,<?= $data->nim ?></h5>
			<p class="card-text">Jumlah Kehadiran: ......</p>
			<p class="card-text">Ipk: <?= $data->ipk ?></p>
			<p class="card-text">Catatan</p>
			<?php if($data->catatan == null){ ?>
			<textarea class="form-control" name="catatan" rows="4"></textarea>
			
			<br>
			<button class="btn btn-primary">Tambahkan Catatan</button>
			<?php }else{ ?>
				<p class="card-text"><?= $data->catatan ?></p>
			<br>
			<a href="<?= base_url() . 'Dosen/Dashboard/HapusCatatan/'.$data->id_perwalian ?>" class="btn btn-danger">Hapus Catatan</a>

				<?php } ?>
		</div>
	</form>
</div>