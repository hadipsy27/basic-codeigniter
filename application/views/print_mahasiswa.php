<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3 style="text-align: center;">DAFTAR MAHASISWA</h3>
	<br>
	<table>
		<tr>
			<th>No</th>
			<th>Nama Mahasiswa</th>
			<th>NIM</th>
			<th>Tanggal Lahir</th>
			<th>Jurusan</th>
			<th>Alamat</th>
			<th>Email</th>
			<th>No Telepon</th>
		</tr>
		<?php 
		$no= 1;
		foreach ($mahasiswa as $mhs) : ?>
		<tr>
			<td><?= $no++ ?></td>
			<td><?= $mhs->nama ?></td>
			<td><?= $mhs->nim ?></td>
			<td><?= $mhs->tgl_lahir ?></td>
			<td><?= $mhs->jurusan ?></td>
			<td><?= $mhs->alamat ?></td>
			<td><?= $mhs->email ?></td>
			<td><?= $mhs->no_telp ?></td>
		</tr>

	<?php endforeach; ?>
	</table>

	<script type="text/javascript">
		window.print();
	</script>

</body>
</html>