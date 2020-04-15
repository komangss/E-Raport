<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mapel</title>
    <link rel="stylesheet" href="<?= BASEURL_PUBLIC; ?>/css/css_ghazy/navbar.css">
    <link rel="stylesheet" href="<?= BASEURL_PUBLIC; ?>/css/css_anton/alert.css">
    <link rel="stylesheet" href="<?= BASEURL_PUBLIC; ?>/css/css_anton/dashboard-wali.css">
    <link rel="stylesheet" href="<?= BASEURL_PUBLIC; ?>/css/css_anton/responsive.css">
</head>
<body>

    <nav class="navbar">
        <h3 class="logo"><img src="<?= BASEURL_PUBLIC; ?>/img/image_anton/logo.png" width="90"></h3>

        <div class="icon"><i><img src="<?= BASEURL_PUBLIC; ?>/img/image_anton/icon-menu.png" width="23px"></i></div>

        <div class="links-wrapper active">
            <div class="backdrop"></div>
            <div class="close-btn"><i>+</i></div>
            <ul class="links">
                <li><a href="#">Home</a></li>
                <li><a href="<?= BASEURL; ?>/guru/wali">Wali</a></li>
                <li><a href="#" style="color: blue;">Mapel</a></li>
                <li><a href="<?= BASEURL; ?>/auth/logout">Logout</a></li>
            </ul>
        </div>
    </nav>

    <h1>hi, anda mengajar pelajaran : $mapel</h1>
    <a href="<?= BASEURL; ?>/mapel/nilaimurid">nilai murid</a>
</body>
</html>