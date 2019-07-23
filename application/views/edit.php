<div class="content-wrapper">
	<section class="content">
		<?php foreach ($mahasiswa as $mhs) { ?>

		<form action="<?php echo base_url().'mahasiswa/update'; ?>" method="post">

			<div class="form-goup">
				<label>Nama Mahasiswa</label>
				<input type="hidden" name="id" class="form-control" value="<?php echo $mhs->id ?>">
				
				<input type="text" name="nama" class="form-control" value="<?php echo $mhs->nama ?>">
			</div>

			<div class="form-goup">
				<label>NIM</label>
				<input type="text" name="nim" class="form-control" value="<?php echo $mhs->nim ?>">
			</div>

			<div class="form-goup">
				<label>Tanggal Lahir</label>
				<input type="date" name="tgl_lahir" class="form-control" value="<?php echo $mhs->tgl_lahir ?>">
			</div>

			<div class="form-goup">
				<label>Jurusan</label>

				<select class="form-control" name="jurusan" value="<?php echo $mhs->jurusan ?>">
      				<option>Teknik Informatika</option>
      				<option>Sistem Informasi</option>
      				<option>Managemen Informasi</option>
      			</select>

			</div>

			<div class="form-goup">
				<label>Alamat</label>
				<input type="text" name="alamat" class="form-control" value="<?php echo $mhs->alamat ?>">
			</div>

			<div class="form-goup">
				<label>Email</label>
				<input type="email" name="email" class="form-control" value="<?php echo $mhs->email ?>">
			</div>

			<div class="form-goup">
				<label>No. Telepon</label>
				<input type="text" name="no_telp" class="form-control" value="<?php echo $mhs->no_telp ?>">
			</div>

			<br>
			<button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
        	<button type="submit" class="btn btn-primary">Simpan</button>
			
		</form>
	<?php } ?>
	
	</section>
</div>