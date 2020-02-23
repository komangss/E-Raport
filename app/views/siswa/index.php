<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Siswa</title>
</head>
<body>
    <!-- Get Data Siswa -->
    <h1>get Data Siswa</h1>
    <?php var_dump($data['data_siswa']); ?>

    <h1>Insert Data Siswa</h1>
    
    <form action="<?= BASEURL ?>/siswa/insert" method="POST">
        <input type="text" name="nama" placeholder="nama">
        <input type="text" name="nis" placeholder="nis">
        <input type="password" name="password" placeholder="password">
        <button type="submit">insert</button>
    </form>

    <h1>Update Data Siswa ( id 1 )</h1>
    
    <form action="<?= BASEURL ?>/siswa/update" method="POST">
        <input type="text" name="nama" placeholder="nama" value="<?= $data["siswa_id_1"]['nama_siswa']; ?>">
        <input type="text" name="nis" placeholder="nis" value="<?= $data["siswa_id_1"]['nis']; ?>">
        <input type="password" name="password" placeholder="password" value="<?= $data["siswa_id_1"]['password']; ?>">
        <button type="submit">update</button>
    </form>
    
    <h1>Search Siswa</h1>
    
    <form action="<?= BASEURL ?>/siswa" method="POST">
        <input type="text" name="keyword" placeholder="nama siswa">
        <button type="submit">search</button>
    </form>

    <?php if ($data['dataSiswaFromSearch'] > 0) : ?>
        <p><?php var_dump($data['dataSiswaFromSearch']); ?></p>
    <?php endif; ?>

    <h1>Delete Data Siswa By id</h1>
    <form action="<?= BASEURL ?>/siswa/delete" method="POST">
        <input type="text" name="id" placeholder="id">
        <button type="submit">delete</button>
    </form>
</body>
</html>