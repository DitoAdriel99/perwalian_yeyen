<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="<?= base_url() ?>/gambar_mahasiswa/<?= $data->profile ?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?= $data->username ?>,<?= $data->nim ?></h5>
    <p class="card-text">Jumlah Kehadiran: ......</p>
    <p class="card-text">Ipk: <?= $data->ipk ?></p>
    <a href="#" class="btn btn-primary">Tambahkan Catatan</a>
  </div>
</div>
