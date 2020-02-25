<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jurusan</title>
</head>
<body>
    <h1>Get Jurusan</h1>
    <?php var_dump($data['get_jurusan']); ?>
    <br><br>
    <form action="<?= BASEURL; ?>/jurusan/insert" method="post">
        <select name="nama_jurusan">
            <option> - </option>
            <option value="RPL 1"> RPL 1 </option>
            <option value="RPL 2"> RPL 2 </option>
        </select>
        <button type="submit">Tambah Data</button>
    </form>

    <h1>Delete</h1>

    <form action="<?= BASEURL; ?>/jurusan/delete" method="post">
        <input type="text" name="id" placeholder="id">
        <button type="submit" onclick="return confirm('yakin?')">Hapus</button>
    </form>

    <h1> Update Jurusan </h1>
    
    <form action="<?= BASEURL; ?>/jurusan/update" method="post">
        <input type="text" name="nama" placeholder="Jurusan" value="<?= $data["jurusan_id_1"]['nama_jurusan']; ?>">
        <button type="submit">update</button>
    </form>

    <h1> Search Jurusan </h1>

    <form action="<?= BASEURL; ?>/jurusan" method="post">
        <input type="text" name="keyword" placeholder="Jurusan">
        <button type="submit">Search</button>
    </form>
    <?php if ($data['JurusanSearch'] > 0) : ?>
        <p><?php var_dump($data['JurusanSearch']); ?></p>
    <?php endif; ?>

</body>
</html>