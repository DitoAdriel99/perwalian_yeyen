<h1>tambah perwalian</h1>
<code><?php echo $this->session->flashdata('message'); ?></code>
<p></p> 
<div class="col-md-6 grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
			<h4 class="card-title">Tambah Jadwal</h4>
			<p class="card-description"> Basic form layout </p>
			<form class="forms-sample" method="post" action="<?php echo base_url(); ?>/Admin/Jadwal/TambahJadwal">
			<div class="form-group">
					<label for="exampleFormControlSelect2">Pilih Dosen</label>
					<select class="form-control" id="nidn" name="nidn" required>
					</select>
				</div>
				<div class="form-group">
					<label for="exampleInputUsername1">Angkatan</label>
					<input type="text" class="form-control" id="angkatan" name="angkatan" placeholder="Masukan Angkatan" required>
				</div>
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
<script>
	selectDosen();

	function selectDosen(x) {

		// console.log(x);
		var option = '<option value="" selected>--Select Data--</option>';
		$.ajax({
			url: '<?= base_url() ?>Admin/Jadwal/getDataDosen/' + x,
			type: 'json',
			success: function(result) {
				console.log(result)
				result = $.parseJSON(result)

				for (let i = 0; i < result.length; i++) {
					option += '<option value="' + result[i].nidn + '" data-id="' + result[i].nidn + '" >' + result[i].username + '</option>'
				}
				$('#nidn').html(option)
			}
		});
	}
</script>
