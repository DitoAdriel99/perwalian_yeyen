<h1>tambah perwalian</h1>
<div class="col-md-6 grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
			<h4 class="card-title">Tambah Perwalian</h4>
			<p class="card-description"> Basic form layout </p>
			<form class="forms-sample" method="post" action="<?php echo base_url(); ?>/Admin/Mahasiswa/TambahMahasiswa">
				<input type="hidden" name="nim" id="nim" value="<?php echo $mahasiswa->nim; ?>" />
				<div class="form-group">
					<label for="exampleInputUsername1">Mahasiswa</label>
					<input type="text" class="form-control" id="exampleInputUsername1" value="<?php echo $mahasiswa->username; ?>" placeholder="Username">
				</div>
				<div class="form-group">
					<label for="exampleFormControlSelect2">Pilih Dosen</label>
					<select class="form-control" id="nidn" name="nidn">
					</select>
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
			url: '<?= base_url() ?>Admin/Dashboard/getDataDosen/' + x,
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
