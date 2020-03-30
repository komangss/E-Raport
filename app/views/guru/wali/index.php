<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wali</title>
</head>
<body>
    <h1>navbar</h1>
    <h1>anda adalah wali dari kelas $kelas</h1>
    <a href="<?= BASEURL; ?>/raport/create">buat raport</a>
    <a href="<?= BASEURL; ?>/datakelas/<?= $data['id_data_kelas']; ?>">kontrol data siswa kelas anda</a>
    <a href="<?= BASEURL; ?>/kelas/<?= $data['id_data_kelas']; ?>">lihat data siswa kelas anda</a>
</body>
</html>