<h1>Tambah Jadwal Perwalian</h1>
<code><?php echo $this->session->flashdata('message'); ?></code>
<p></p>
<div class="col-md-6 grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
			<h4 class="card-title">Tambah Jadwal</h4>
			<form class="forms-sample" method="post" action="<?php echo base_url(); ?>/Dosen/Dashboard/TambahJadwal">
				<div class="form-group">
					<label for="tanggal">Tanggal & Waktu</label>
					<input type="date" id="tanggal" name="tanggal" required>
				</div>
				<div class="form-group">
					<label for="jam">Pilih Jam</label>
					<input type="time" id="jam" name="jam" required>
				</div>

				<div class="form-group">
					<label for="exampleInputUsername1">Link</label>
					<input type="text" class="form-control" id="link" name="link" placeholder="Masukan Link" required>
				</div>
				<button type="submit" class="btn btn-primary mr-2">Submit</button>
				<button class="btn btn-dark">Cancel</button>
			</form>
		</div>
	</div>
</div>
