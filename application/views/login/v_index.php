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
    <link href="<?= base_url('/')?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('/')?>assets/css/bootstrap-extended.css" rel="stylesheet">
    <link href="<?= base_url('/')?>assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url('/')?>assets/css/icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/')?>plugins/notifications/css/lobibox.min.css" />
    <script src="<?= base_url('assets/')?>js/jquery.min.js"></script>

    <title>STATIF</title>
</head>

<body class="bg-white">

    <!--start wrapper-->
    <div class="wrapper">
        <div class="">
            <div class="row g-0 m-0">
                <div class="col-xl-6 col-lg-12">
                    <div class="position-fixed top-0 h-100 d-xl-block d-none login-cover-img">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="login-cover-wrapper">
                        <div class="card shadow-none">
                            <div class="card-body">
                                <div class="text-left">
                                    <h4>Welcome Back !</h4>
                                    <p>Sign In to continue</p>
                                </div>
                                <form action="#" method="post" id="form-login" class="form-body row g-3">
                                    <div class="col-12">
                                        <label for="inputEmail" class="form-label">Username</label>
                                        <input type="text" class="form-control" id="username" name="username">
                                    </div>
                                    <div class="col-12">
                                        <label for="inputPassword" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password">
                                    </div>
                                    <div class="col-12 col-lg-12">
                                        <div class="d-grid">
                                            <button type="button" class="btn btn-primary btn-login">Sign In</button>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-12 text-center">
                                        <p class="mb-0">PENDAFTARAN PEMOHON PERTANAHAN <a href="<?= site_url('ajukan-permohonan')?>">ajukan permohonan</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
    </div>
    <!--end wrapper-->
</body>
<script src="<?= base_url('assets/')?>plugins/notifications/js/lobibox.min.js"></script>
<script>
var input = document.getElementById("form-login");
input.addEventListener("keypress", function(event) {
    if (event.key === "Enter") {
        event.preventDefault();
        $('.btn-login').click();
    }
});
$('.btn-login').click(function() {
    var username = $("#username").val();
    var password = $("#password").val();
    var validasiHuruf = /^[a-zA-Z ]+$/;
    if (!username.match(validasiHuruf)) {
        Lobibox.notify('warning', {
            pauseDelayOnHover: true,
            size: 'mini',
            rounded: true,
            delayIndicator: false,
            icon: 'bx bx-x-circle',
            continueDelayOnInactiveTab: false,
            position: 'top right',
            msg: 'username wajib huruf.'
        });
        document.getElementById("username").focus();
        return false;
    } else if (username.length === 0) {
        Lobibox.notify('warning', {
            pauseDelayOnHover: true,
            size: 'mini',
            rounded: true,
            delayIndicator: false,
            icon: 'bx bx-x-circle',
            continueDelayOnInactiveTab: false,
            position: 'top right',
            msg: 'username tidak boleh kosong.'
        });
        document.getElementById("username").focus();
        return false;
    } else if (username.length <= 3) {
        Lobibox.notify('warning', {
            pauseDelayOnHover: true,
            size: 'mini',
            rounded: true,
            delayIndicator: false,
            icon: 'bx bx-x-circle',
            continueDelayOnInactiveTab: false,
            position: 'top right',
            msg: 'username terlalu pendek.'
        });
        document.getElementById("username").focus();
        return false;
    } else if (password.length === 0) {
        Lobibox.notify('warning', {
            pauseDelayOnHover: true,
            size: 'mini',
            rounded: true,
            delayIndicator: false,
            icon: 'bx bx-x-circle',
            continueDelayOnInactiveTab: false,
            position: 'top right',
            msg: 'password tidak boleh kosong.'
        });
        document.getElementById("password").focus();
        return false;
    } else if (password.length <= 6) {
        Lobibox.notify('warning', {
            pauseDelayOnHover: true,
            size: 'mini',
            rounded: true,
            delayIndicator: false,
            icon: 'bx bx-x-circle',
            continueDelayOnInactiveTab: false,
            position: 'top right',
            msg: 'password terlalu pendek.'
        });
        document.getElementById("password").focus();
        return false;
    } else {
            var formData = new FormData();
            formData.append("username", username);
            formData.append("password", password);
            $.ajax({
                url: "<?= site_url('auth')?>",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
            success: function(response) {
                if (response == "success") {
                    Lobibox.notify('success', {
                        pauseDelayOnHover: true,
                        size: 'mini',
                        rounded: true,
                        delayIndicator: false,
                        icon: 'bx bx-x-circle',
                        continueDelayOnInactiveTab: false,
                        position: 'top right',
                        msg: 'Selamat datang DI Pertanahan.'
                    });
                    setTimeout(function() {
                        window.location.href = "<?= site_url('dashboard')?>";
                    }, 3000);
                } else if (response == "password") {
                    Lobibox.notify('warning', {
                        pauseDelayOnHover: true,
                        size: 'mini',
                        rounded: true,
                        delayIndicator: false,
                        icon: 'bx bx-x-circle',
                        continueDelayOnInactiveTab: false,
                        position: 'top right',
                        msg: 'Password anda salah.'
                    });
                } else if (response == "level") {
                    Lobibox.notify('warning', {
                        pauseDelayOnHover: true,
                        size: 'mini',
                        rounded: true,
                        delayIndicator: false,
                        icon: 'bx bx-x-circle',
                        continueDelayOnInactiveTab: false,
                        position: 'top right',
                        msg: 'Mohon maaf, anda tidak bisa login, karena bukan level admin.'
                    });
                } else if (response == "status") {
                    Lobibox.notify('warning', {
                        pauseDelayOnHover: true,
                        size: 'mini',
                        rounded: true,
                        delayIndicator: false,
                        icon: 'bx bx-x-circle',
                        continueDelayOnInactiveTab: false,
                        position: 'top right',
                        msg: 'Akun anda tidak aktif.'
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
                        msg: 'Gagal.'
                    });
                }
                console.log(response);
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