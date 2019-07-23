<div class="content-wrapper">
	<section class="content-header">
      <h1>
        Data Mahasiswa
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Mahasiswa</li>
      </ol>
    </section>

    <!-- menampilkan data mahasiswa dari database -->
    <section class="content">
      <!-- flash data notifikasi [tambah,edit,hapus] -->
      <?= $this->session->flashdata('message');  ?>

    	<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>Tambah data Mahasiswa</button>

      <a class="btn btn-danger" href="<?= base_url('mahasiswa/print') ?>" target="_blank"><i class="fa fa-print"></i>Print</a>

      <div class="dropdown inline">
        <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
          <i class="fa fa-download"></i>Export
          <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
          <li><a href="<?= base_url('mahasiswa/pdf') ?>">PDF</a></li>
          <li><a href="<?= base_url('mahasiswa/excel') ?>">Excel</a></li>
        </ul>
      </div>
	  <div class="navbar-form navbar-right">
	  	<?= form_open('mahasiswa/search') ?>
		<input type="text" name="keyword" class="form-control" placeholder="Search">
		<button type="submit" class="btn btn-success">cari</button>
		<?= form_close() ?>
	  </div>

    	<table class="table">
    		<tr>
    			<th>No</th>
    			<th>Nama Mahasiswa</th>
    			<th>NIM</th>
    			<th>Tanggal lahir</th>
    			<th>Jurusan</th>
    			<th colspan="3">Aksi</th>
    		</tr>
    		
    			<?php
    			$no = 1;
    			foreach ($mahasiswa as $mhs) : ?>
    			<tr>
    				<td><?php echo $no++ ?></td>
    				<td><?php echo $mhs->nama ?></td>
    				<td><?php echo $mhs->nim ?></td>
    				<td><?php echo $mhs->tgl_lahir ?></td>
    				<td><?php echo $mhs->jurusan ?></td>
    				<td><?= anchor('mahasiswa/detail/'.$mhs->id,'<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?></td>
    				<td onclick="javascript: return confirm('Anda yakin untuk hapus?')"><?= anchor('mahasiswa/hapus/'.$mhs->id,'<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
    				<td><?= anchor('mahasiswa/edit/'.$mhs->id,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
    			</tr>
    		
    	<?php endforeach; ?>
    	</table>
    </section>
    <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Form Input Data Mahasiwa</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<?= form_open_multipart('mahasiswa/tambah_aksi'); ?>
      		<div class="form-group">
      			<label>Nama Mahasiswa</label>
      			<!-- name=nama dari form berfungsi untuk menyambungkan inputan ke method controller Mahasiswa dgn function tambah_aksi()-->
      			<!-- berlaku juga pada form selanjutnya -->
      			<input type="text" name="nama" class="form-control">
      		</div>

      		<div class="form-group">
      			<label>NIM</label>
      			<input type="text" name="nim" class="form-control">
      		</div>
      		<div class="form-group">
      			<label>Tanggal Lahir</label>
      			<input type="date" name="tgl_lahir" class="form-control">
      		</div>

      		<div class="form-group">
      			<label>Jurusan</label>
      			<select class="form-control" name="jurusan">
      				<option>Teknik Informatika</option>
      				<option>Sistem Informasi</option>
      				<option>Managemen Informasi</option>
      			</select>
      		</div>

      		<div class="form-group">
      			<label>Alamat</label>
      			<input type="text" name="alamat" class="form-control">
      		</div>

      		<div class="form-group">
      			<label>Email</label>
      			<input type="email" name="email" class="form-control">
      		</div>

      		<div class="form-group">
      			<label>No. Telepon</label>
      			<input type="text" name="no_telp" class="form-control">
      		</div>

      		<div class="form-group">
      			<label>Upload Foto</label>
      			<input type="file" name="foto" class="form-control">
      		</div>

      		<button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
        	<button type="submit" class="btn btn-primary">Simpan</button>
      	
      	<?= form_close(); ?>
      </div>
    </div>
  </div>
</div>
</div>