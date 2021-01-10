<div class="card">
	<div class="card-header">
		<h4><?= $title ?> </h4>
		<div class="card-header-form">
			<button class="btn btn-primary float-right" data-toggle="modal" data-target="#modalTambah">Tambah Data</button>
		</div>
	</div>
</div>


<div class="card">
	<div class="card-body">
		<div class="table-responsive">
			<table id="list_user" class="table table-striped table-bordered" style="width:100%">
				<thead>
					<tr>
						<th>No</th>
						<th>Username</th>
						<th>Nama Pengguna</th>
						<th>Jabatan</th>
						<th>Menjabat di RT</th>
						<th>Status</th>
						<th>Aksi</th>
					</tr>
				</thead>

				<tbody>
				</tbody>

			</table>
		</div>
	</div>
</div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="modalTambah">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Tambah User</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form id="formAddUser">
				<div class="modal-body">
					<div class="form-group">
						<label>Nama User</label>
						<input type="text" name="nama_user" id="nama_user" class="form-control" required>
					</div>

					<div class="form-group">
						<label>Nama Pengguna</label>
						<input type="text" name="username" id="username" class="form-control" required>
					</div>

					<div class="form-group">
						<label>Tugas</label>
						<select name="level" id="level" required class="form-control">
							<option value="">-- Silakan Pilih --</option>
							<option value="1">Ketua RW</option>
							<option value="2">Sekretaris RW</option>
							<option value="3">Bendahara RW</option>
							<option value="4">Ketua RT</option>
						</select>
					</div>

					<div id="rt">

					</div>


				</div>
				<div class="modal-footer bg-whitesmoke br">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="modalEdit">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit User</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form id="formEditUser">
				<div class="modal-body">
					<input type="hidden" name="id" id="idData">

					<div class="form-group">
						<label>Nama User</label>
						<input type="text" name="nama_user" id="nama_user1" class="form-control" required>
					</div>

					<div class="form-group">
						<label>Nama Pengguna</label>
						<input type="text" name="username" id="username1" class="form-control" required>
					</div>

					<div class="form-group">
						<label>Tugas</label>
						<select name="level" id="level" required class="form-control">
							<option value="">-- Silakan Pilih --</option>
							<option value="1">Ketua RW</option>
							<option value="2">Sekretaris RW</option>
							<option value="3">Bendahara RW</option>
							<option value="4">Ketua RT</option>
						</select>
					</div>

					<div id="rt1">

					</div>

				</div>
				<div class="modal-footer bg-whitesmoke br">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>