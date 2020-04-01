<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?= BASEURL_PUBLIC; ?>/css_ghazy/navbar.css">
    <link rel="stylesheet" href="<?= BASEURL_PUBLIC; ?>/css_anton/alert.css">
    <link rel="stylesheet" href="<?= BASEURL_PUBLIC; ?>/css_anton/dashboard-guru.css">
    <title>E Raport - Dashboard Guru</title>
</head>

<body>
    <nav class="navbar">
        <h3 class="logo"><img src="<?= BASEURL_PUBLIC; ?>/image_anton/logo.png" width="90"></h3>

        <div class="icon"><i><img src="<?= BASEURL_PUBLIC; ?>/image_anton/icon-menu.png" width="23px"></i></div>

        <div class="links-wrapper active">
            <div class="backdrop"></div>
            <div class="close-btn"><i>+</i></div>
            <ul class="links">
                <li><a href="#">Home</a></li>
                <li><a href="<?= BASEURL; ?>/guru/wali">Wali</a></li>
                <li><a href="<?= BASEURL; ?>/guru/mapel">Mapel</a></li>
                <li><a href="<?= BASEURL; ?>/auth/logout">Logout</a></li>
            </ul>
        </div>
    </nav>

    <?php Session::flash(); ?>
    
    <section>
        <div class="content-center">
            <h1 class="welcome-title">selamat datang <?= $data['nama']; ?></h1>
        </div>
    </section>

</body>
<script src="<?= BASEURL_PUBLIC; ?>/js_anton/alert.js"></script>
<script src="<?= BASEURL_PUBLIC; ?>/js_ghazy/navbar-script.js"></script>

</html>