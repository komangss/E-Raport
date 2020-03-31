<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E Raport - Dashboard Guru</title>
    <link rel="stylesheet" href="<?= BASEURL_PUBLIC; ?>/css_anton/alert.css">
</head>
<body>
    <?php Session::flash(); ?>
    <h1>navbar</h1>
    <a href="<?= BASEURL; ?>/guru/wali">wali</a>
    <a href="<?= BASEURL; ?>/guru/mapel">mapel</a>
    <a href="<?= BASEURL; ?>/auth/logout">logout</a>

    <h1>selamat datang <?= $data['nama']; ?></h1>
</body>
<script src="<?= BASEURL_PUBLIC; ?>/js_anton/alert.js"></script>
</html>