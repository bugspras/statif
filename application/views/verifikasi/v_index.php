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
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5 col-md-7 mx-auto mt-5">
                    <div class="card radius-10">
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h4>VERIFIKASI</h4>
                            </div>
                            <form action="#" id="form-verifikasi" enctype="multipart/form-data" method="post"
                                class="form-body row g-3">
                                <div class="col-12 col-lg-12">
                                    <div class="position-relative border-bottom my-3">
                                        <div class="position-absolute seperator-2 translate-middle-y"></div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="inputEmail" class="form-label">e tiket</label>
                                    <input type="text" class="form-control" id="e_tiket" name="e_tiket"
                                        placeholder="e tiket">
                                </div>
                                <div class="col-12">
                                    <label for="inputEmail" class="form-label">token</label>
                                    <input type="text" class="form-control" id="token" name="token" placeholder="token">
                                </div>
                                <div class="col-12 col-lg-12">
                                    <div class="form-check">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-12">
                                    <div class="d-grid">
                                        <button type="button" class="btn btn-primary btn-verifikasi">pengukuran tanah
                                            selesai</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end wrapper-->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="<?= base_url('/')?>assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/')?>plugins/notifications/js/lobibox.min.js"></script>
</body>
<script>
var input = document.getElementById("form-verifikasi");
input.addEventListener("keypress", function(event) {
    if (event.key === "Enter") {
        event.preventDefault();
        $('.btn-verifikasi').click();
    }
});
$('.btn-verifikasi').click(function() {
    var e_tiket = $("#e_tiket").val();
    var token = $("#token").val();
    if (e_tiket.length === 0) {
        Lobibox.notify('warning', {
            pauseDelayOnHover: true,
            size: 'mini',
            rounded: true,
            delayIndicator: false,
            icon: 'bx bx-x-circle',
            continueDelayOnInactiveTab: false,
            position: 'top right',
            msg: 'e tiket tidak boleh kosong.'
        });
        document.getElementById("e_tiket").focus();
        return false;
    } else if (token.length === 0) {
        Lobibox.notify('warning', {
            pauseDelayOnHover: true,
            size: 'mini',
            rounded: true,
            delayIndicator: false,
            icon: 'bx bx-x-circle',
            continueDelayOnInactiveTab: false,
            position: 'top right',
            msg: 'token tidak boleh kosong.'
        });
        document.getElementById("token").focus();
        return false;
    } else {
        var formData = new FormData();
        formData.append("e_tiket", e_tiket);
        formData.append("token", token);
        $.ajax({
            url: "<?= site_url('save-verifikasi')?>",
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                console.log(response);
                if (response == "success") {
                    Lobibox.notify('success', {
                        pauseDelayOnHover: true,
                        size: 'mini',
                        rounded: true,
                        delayIndicator: false,
                        icon: 'bx bx-x-circle',
                        continueDelayOnInactiveTab: false,
                        position: 'top right',
                        msg: 'Berhasil diverifikasi.'
                    });
                } else if (response == "failed_e_tiket") {
                    Lobibox.notify('warning', {
                        pauseDelayOnHover: true,
                        size: 'mini',
                        rounded: true,
                        delayIndicator: false,
                        icon: 'bx bx-x-circle',
                        continueDelayOnInactiveTab: false,
                        position: 'top right',
                        msg: 'e tiket tidak cocok.'
                    });
                } else if (response == "failed_token") {
                    Lobibox.notify('warning', {
                        pauseDelayOnHover: true,
                        size: 'mini',
                        rounded: true,
                        delayIndicator: false,
                        icon: 'bx bx-x-circle',
                        continueDelayOnInactiveTab: false,
                        position: 'top right',
                        msg: 'token tidak cocok.'
                    });
                } else if (response == "verifikasi") {
                    Lobibox.notify('info', {
                        pauseDelayOnHover: true,
                        size: 'mini',
                        rounded: true,
                        delayIndicator: false,
                        icon: 'bx bx-x-circle',
                        continueDelayOnInactiveTab: false,
                        position: 'top right',
                        msg: 'verifikasi telah berhasil.'
                    });
                } else {
                    Lobibox.notify('error', {
                        pauseDelayOnHover: true,
                        size: 'mini',
                        rounded: true,
                        delayIndicator: false,
                        icon: 'bx bx-x-circle',
                        continueDelayOnInactiveTab: false,
                        position: 'top right',
                        msg: 'gagal.'
                    });
                }
            },
            error: function(response) {
                Lobibox.notify('error', {
                    pauseDelayOnHover: true,
                    size: 'mini',
                    rounded: true,
                    delayIndicator: false,
                    icon: 'bx bx-x-circle',
                    continueDelayOnInactiveTab: false,
                    position: 'top right',
                    msg: 'Gagal.'
                });
                console.log(response);
            }
        });
    }
});
</script>

</html>