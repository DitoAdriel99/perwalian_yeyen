<h1>Upload Krs</h1>
<p class="text-danger"><?php echo $this->session->flashdata('peringatan'); ?></p>
<p class="text-primary"><?php echo $this->session->flashdata('message'); ?></p>
<p></p>
<div class="col-md-6 grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
			<h4 class="card-title">Silahkan Upload Krs</h4>
			<form class="forms-sample" method="post" action="<?php echo base_url(); ?>/Admin/krs/UploadKrs" enctype="multipart/form-data">
				<div class="form-group">
					<label for="exampleInputName1">Angkatan</label>
					<input type="text" class="form-control" name="angkatan" placeholder="angkatan" required>
				</div>
				<div class="form-group">
					<label>Krs Prediksi</label>
					<div class="input-group col-xs-12">
						<input type="file" id="krs_prediksi" name="krs_prediksi">
					</div>
				</div>
				<button type="submit" class="btn btn-primary mr-2">Submit</button>
				<button class="btn btn-dark">Cancel</button>
			</form>
		</div>
	</div>
</div>
