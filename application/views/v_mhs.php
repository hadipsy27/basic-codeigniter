<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>

	<table border="1px solid black">
		<tr>
			<th>Nama Mahasiswa</th>
			<th>NIM</th>
			<th>Alamat</th>
			<?php foreach ($mahasiswa as $mhs) : ?>
				<tr>
					<td><?= $mhs['nama']; ?></td>
					<td><?php echo $mhs['nim']; ?></td>
					<td><?php echo $mhs['alamat']; ?></td>
				</tr>
			<?php endforeach; ?>
		</tr>
	</table>

</body>
</html>