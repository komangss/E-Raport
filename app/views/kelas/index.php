<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelas</title>
</head>
<body>
	<h1>Get Kelas</h1>
	<?php var_dump($data['data_kelas']); ?>

	<h1>Insert Kelas</h1>
	<form action="<?= BASEURL; ?>/kelas/insert" method="POST">
		<select id="kelas" name="nama_kelas">
		<option> - </option>
			<option value="X">X</option>
			<option value="XI">XI</option>
			<option value="XII">XII</option>
		</select>
		<button type="submit">Tambah Data</button>
	</form>

	<h1>Update Kelas ( id 1 )</h1>
	<form action="<?= BASEURL ?>/kelas/update" method="POST">
		<input type="text" name="nama" placeholder="kelas" value="<?= $data["kelas_id_1"]['nama_kelas']; ?>">
		<button type="submit">Update</button>
	</form>

	<h1>Search Siswa</h1>
	<form action="<?= BASEURL ?>/kelas" method="POST">
		<input type="text" name="keyword" placeholder="kelas">
		<button type="submit">search</button>
	</form>

	<?php if ($data['kelasFromSearch'] > 0) : ?>
		<p><?php var_dump($data['kelasFromSearch']); ?></p>
	<?php endif; ?>

	<h1>Delete Kelas By id</h1>
	<form action="<?= BASEURL ?>/kelas/delete" method="post">
		<input type="text" name="id" placeholder="id">
		<button type="submit" onclick="return confirm('yakin?')">Delete</button>
	</form>
</body>
</html>