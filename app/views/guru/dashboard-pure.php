<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E Raport - Dashboard Guru</title>
</head>
<body>
    <h1>navbar</h1>
    <a href="<?= BASEURL; ?>/guru/wali">wali</a>
    <a href="<?= BASEURL; ?>/guru/mapel">mapel</a>
    <a href="<?= BASEURL; ?>/auth/logout">logout</a>

    <h1>selamat datang <?= $data['nama']; ?></h1>
</body>
</html>