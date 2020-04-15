<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Siswa</title>
    <link rel="stylesheet" href="<?= BASEURL_PUBLIC; ?>/css/css_anton/style.css">
</head>

<body>
    <div class="wrapper">
        <section class="navbar">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bg-menu">
                        <nav>
                            <ul>
                                <li class="logo"><a class="logoa" href="<?= BASEURL; ?>"><img src="http://localhost/E-Raport/public/img/image_anton/logo.png" width="150px"></a></li>
                                <li><a href="<?= BASEURL; ?>">testimony</a></li>
                                <?php
                                $base = BASEURL;
                                Session::init_session();
                                // jika aktif
                                if (Session::get_session('session_data')['is_active'] == 1) {
                                    echo "
                                        <li><a href='$base/auth/logout'>logout</a></li>
                                        ";
                                    echo "
                                        <li><a href='$base/guru/dashboard'>dashboard</a></li>
                                        ";
                                } else {
                                    echo "
                                        <li><a href='$base/auth'>login</a></li>
                                    ";
                                }
                                ?>
                                <li><a>Home</a></li>
                                <li> <a href="javascript:void(0);" class="hide" onclick="myFunction()">
                                        <img src="http://localhost/E-Raport/public/img/image_anton/icon-menu.png" width="30px">
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="banner">
                        <div class="text-banner">
                            <h1>Website E-Raport</h1>
                            <p>Disini Kami Akan memberikan pengalaman experience terbaik dengan web ini.<br>
                                Kalian bisa mengecek nilai dari Raport Kalian secara online<br>
                                Melalui Website E-Raport.</p>
                            <button class="btn-gradient">Get Started !</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
<script>

</script>

</html>