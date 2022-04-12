<h1>Tambah Dosen</h1>
<div class="col-12 grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
			<h4 class="card-title">Basic form elements</h4>
			<p class="card-description"> Basic form elements </p>
			<form class="forms-sample" method="post" action="<?php echo base_url(); ?>Admin/TambahDosen/add" enctype="multipart/form-data">
				<div class="form-group">
					<label for="exampleInputName1">NIDN</label>
					<input type="text" class="form-control" name="nidn" placeholder="nidn" required>
				</div>
				<div class="form-group">
					<label for="exampleInputName1">Nama Dosen</label>
					<input type="text" class="form-control" name="username" placeholder="username" required>
				</div>
				<div class="form-group">
					<label for="exampleInputName1">Email</label>
					<input type="email" class="form-control" name="email" placeholder="email" required>
				</div>
				<div class="form-group">
					<label for="exampleInputName1">password</label>
					<input type="text" class="form-control" name="password" placeholder="password" required>
				</div>
				<div class="form-group">
					<label for="exampleInputName1">No Hp</label>
					<input type="text" class="form-control" name="no_hp" placeholder="No_hp" required>
				</div>
				<div class="form-group">
					<label for="exampleInputName1">Penanggung Jawab Angkatan</label>
					<input type="text" class="form-control" name="pj_angkatan" placeholder="Masukan Angkatan Yang di bimbing" required>
				</div>
				<div class="form-group">
					<label>Foto</label>
					<div class="input-group col-xs-12">
					<input type="file" id="profile" name="profile">
					</div>
				</div>
				<button type="submit" class="btn btn-primary mr-2">Submit</button>
				<button class="btn btn-dark">Cancel</button>
			</form>
		</div>
	</div>
</div>
