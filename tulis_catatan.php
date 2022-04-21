<div class="card">
	<div class="card-header">
	<a href="user.php" class="btn btn-primary btn-icon-split">
										<span class="icon text-white-50">
											<i class=" fa fa-arrow-left"></i>
										</span>
										<span class="text">kembali</span>
									</a>
	</div>
	<div class="card-body">
	<form action="simpan_catatan.php" method="post">
		<div class="form-group">
			<label>pilih tanggal</label>
			<input name="tanggal" type="date" required class="form-control" placeholder="masukan tanggal">
		</div>
		<div class="form-group">
			<label>pilih jam</label>
			<input name="jam" type="time" required class="form-control" placeholder="masukan jam">
		</div>
		<div class="form-group">
			<label>pilih lokasi</label>
			<input name="lokasi" type="text" required class="form-control" placeholder="masukan lokasi">
		</div>
		<div class="form-group">
			<label>suhu tubuh</label>
			<input name="suhu" type="text" required class="form-control" placeholder="masukan suhu tubuh">
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>SIMPAN </button>
			<button type="reset" class="btn btn-warning"><i class="fa fa-trash"></i>KOSONGKAN </button>
		</div>
	</form>
	</div>
</div>