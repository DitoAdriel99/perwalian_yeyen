<h1>Edit Dosen</h1>
<div class="col-12 grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
			<h4 class="card-title">Silahkan Edit Data Dosen</h4>
			<!-- <p class="card-description"> Basic form elements </p> -->
			<form class="forms-sample" method="post" action="<?php echo base_url(); ?>Admin/TambahDosen/edit" enctype="multipart/form-data">
				<div class="form-group">
					<label for="exampleInputName1">NIDN</label>
					<input type="text" class="form-control" name="nidn" placeholder="nidn" value="<?= $dosen->nidn ?>" required>
				</div>
				<div class="form-group">
					<label for="exampleInputName1">Nama Dosen</label>
					<input type="text" class="form-control" name="username" placeholder="username" value="<?= $dosen->username ?>" required>
				</div>
				<div class="form-group">
					<label for7="exampleInputName1">Email</label>
					<input type="email" class="form-control" name="email" placeholder="email" value="<?= $dosen->email ?>" required>
				</div>
				<div class="form-group">
					<label for="exampleInputName1">password</label>
					<input type="text" class="form-control" name="password" placeholder="password" value="<?= $dosen->password ?>" required>
				</div>
				<div class="form-group">
					<label for="exampleInputName1">No Hp</label>
					<input type="text" class="form-control" name="no_hp" placeholder="Name" value="<?= $dosen->no_hp ?>" required>
				</div>
				<div class="form-group">
					<label>Foto</label>
					<div class="input-group col-xs-12">
					<input type="file" id="profile" name="profile" value="<?= $dosen->profile ?>">
					</div>
				</div>
				<button type="submit" class="btn btn-primary mr-2">Submit</button>
				<button class="btn btn-dark">Cancel</button>
			</form>
		</div>
	</div>
</div>
