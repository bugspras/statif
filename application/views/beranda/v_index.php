<!doctype html>
<html lang="en" class="light-theme">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- loader-->
    <link href="<?= base_url('/')?>assets/css/pace.min.css" rel="stylesheet" />
    <script src="<?= base_url('/')?>assets/js/pace.min.js"></script>

    <!--plugins-->
    <link href="<?= base_url('/')?>assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />

    <!-- CSS Files -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
    <link href="<?= base_url('/')?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('/')?>assets/css/bootstrap-extended.css" rel="stylesheet">
    <link href="<?= base_url('/')?>assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url('/')?>assets/css/icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/')?>plugins/notifications/css/lobibox.min.css" />
    <script src="<?= base_url('assets/')?>js/jquery.min.js"></script>

    <title>STATIF</title>
</head>

<body>

    <div class="login-bg-overlay au-sign-in-basic"></div>

    <!--start wrapper-->
    <div class="wrapper">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-white p-3">
                <div class="container-fluid">
                    <a href="javascript:;">
                        <img src="<?= base_url('logo.png')?>" width="150" height="45" alt="" />
                    </a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-3 login-menu-2">
                            <li class="nav-item">
                                <a class="nav-link" href="<?= site_url()?>">beranda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= site_url('ajukan-permohonan')?>">ajukan permohonan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= site_url('verifikasi-data')?>">verifikasi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= site_url('login')?>">login</a>
                            </li>
                        </ul>
                    </div>
                    <div class="d-flex">
                        <a href="javascript:;">
                        <img src="<?= base_url('logo2.png')?>" width="150" height="45" alt="" />
                        </a>
                    </div>
                </div>
            </nav>
        </header>
        <?php if($slider->num_rows()): ?>
        <div class="container">
            <div class="row" style="margin-top: 8%;">
                <div class="col-12 col-lg-12 col-xl-12">
                    <div class="w3-content">
                        <div class="row row-cols-12 row-cols-sm-12 row-cols-md-12 row-cols-xl-12 row-cols-xxl-12">
                            <?php foreach ($slider->result() as $key): ?>
                            <div class="mySlides w3-container text-center">
                                <div class="col">
                                    <div class="card radius-10">
                                        <div class="card-body text-center">
                                            <div class="profile-img">
                                                <img src="<?= base_url('favicon.ico')?>" class="rounded-circle"
                                                    width="120" height="120" alt="" />
                                            </div>
                                            <div class="mt-4">
                                                <h1><b>
                                                        <font color="blue" style="font-size: 120px;">
                                                            <?= strtoupper($key->nama_anggota_pengukur)?></font>
                                                    </b></h1>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-around mt-4">
                                                <div class="">
                                                    <h4 class="mb-0">
                                                        <font color="red" style="font-size: 50px;"><?= $key->jml?>
                                                        </font>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
        <?php endif;?>
    </div>
    <!--end wrapper-->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="<?= base_url('/')?>assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/')?>plugins/notifications/js/lobibox.min.js"></script>
</body>
<script>
$(function() {
    "use strict";
    setTimeout(function() {
        window.location.href = "<?= site_url('')?>";
    }, 15000);
});

var slideIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > x.length) {
        slideIndex = 1
    }
    x[slideIndex - 1].style.display = "block";
    setTimeout(carousel, 2000);
}
</script>

</html>