<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?= BASEURL_PUBLIC; ?>/css_ghazy/navbar.css">
    <link rel="stylesheet" href="<?= BASEURL_PUBLIC; ?>/css_anton/alert.css">
    <link rel="stylesheet" href="<?= BASEURL_PUBLIC; ?>/css_anton/dashboard-wali.css">
    <link rel="stylesheet" href="<?= BASEURL_PUBLIC; ?>/css_anton/responsive.css">
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
            <div class="content-main">
                <div class="box">
                    <a href="<?= BASEURL; ?>/raport/create"><img src="<?= BASEURL_PUBLIC; ?>/image_anton/undraw_google_docs.svg" class="img-box">buat raport</a>
                </div>
                <div class="box">
                    <a href="<?= BASEURL; ?>/datakelas/<?= $data['id_data_kelas']; ?>"><img src="<?= BASEURL_PUBLIC; ?>/image_anton/undraw_to_do_list.svg" class="img-box">kontrol data siswa kelas anda</a>
                </div>
                <div class="box">
                    <a href="<?= BASEURL; ?>/guru/<?= $data['id_guru']; ?>"> <img src="<?= BASEURL_PUBLIC; ?>/image_anton/undraw_wall_postl.svg" class="img-box">ubah proil anda</a>
                </div>
            </div>
        </div>
    </section>

</body>
<script src="<?= BASEURL_PUBLIC; ?>/js_anton/alert.js"></script>
<script src="<?= BASEURL_PUBLIC; ?>/js_ghazy/navbar-script.js"></script>

</html>