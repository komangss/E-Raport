<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tahun Ajaran</title>
</head>
<body>
	<h1>Get Tahun</h1>
	<?php var_dump($data['data_tahun']); ?>

	<h1>Insert Tahun</h1>
	<form action="<?= BASEURL; ?>/tahun/insert" method="POST">
		<select id="tahun" name="tahun">
		<option> - </option>
			<option value="2019">2019</option>
			<option value="2020">2020</option>
			<option value="2021">2021</option>
		</select>
		<button type="submit">Tambah Data</button>
	</form>

	<h1>Update Tahun ( id 1 )</h1>
	<form action="<?= BASEURL ?>/tahun/update" method="POST">
		<input type="text" name="tahun" placeholder="kelas" value="<?= $data["tahun_id_1"]['tahun']; ?>">
		<button type="submit">Update</button>
	</form>

	<h1>Search Tahun</h1>
	<form action="<?= BASEURL ?>/tahun" method="POST">
		<input type="text" name="keyword" placeholder="tahun">
		<button type="submit">search</button>
	</form>

	<?php if ($data['tahunFromSearch'] > 0) : ?>
		<p><?php var_dump($data['tahunFromSearch']); ?></p>
	<?php endif; ?>

	<h1>Delete Tahun By id</h1>
	<form action="<?= BASEURL ?>/tahun/delete" method="post">
		<input type="text" name="id" placeholder="id">
		<button type="submit" onclick="return confirm('yakin?')">Delete</button>
	</form>
</body>
</html>