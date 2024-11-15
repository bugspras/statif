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
            <div class="row mb-4 d-flex flex-column gap-3 align-items-center justify-content-center" style="margin-top: 8%;">
                <div class="col-12 col-lg-4 col-xl-5">
                    <div class="card radius-10">
                        <div class="card-body">
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h4>PENDAFTARAN PEMOHON PERTANAHAN</h4>
                                </div>
                                <form action="#" id="form-registrasi" enctype="multipart/form-data" method="post"
                                    class="form-body row g-3">
                                    <div class="col-12 col-lg-12">
                                        <div class="position-relative border-bottom my-3">
                                            <div class="position-absolute seperator-2 translate-middle-y"></div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="inputEmail" class="form-label">nomor berkas</label>
                                        <input type="text" class="form-control" id="no_mohon_ukur" name="no_mohon_ukur"
                                            placeholder="nomor berkas">
                                    </div>
                                    <div class="col-12">
                                        <label for="inputEmail" class="form-label">nama lengkap pemohon</label>
                                        <input type="text" class="form-control" id="nama_lengkap_pemohon"
                                            name="nama_lengkap_pemohon" placeholder="nama lengkap pemohon">
                                    </div>
                                    <div class="col-12">
                                        <label for="inputEmail" class="form-label">nomor whatsapp pemohon</label>
                                        <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon"
                                            placeholder="nomor whatsapp pemohon">
                                    </div>
                                    <div class="col-12">
                                        <label for="inputPassword" class="form-label">jenis layanan</label>
                                        <select class="form-select" id="id_status_permohonan"
                                            name="id_status_permohonan" data-placeholder="Choose one jenis layanan">
                                            <option></option>
                                            <?php if($status_permohonan->num_rows()): ?>
                                            <?php foreach ($status_permohonan->result() as $key): ?>
                                            <option value="<?= $key->id_status_permohonan; ?>"><?= $key->status_permohonan; ?></option>
                                            <?php endforeach;?>
                                            <?php endif;?>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label for="inputEmail" class="form-label">keterangan</label>
                                        <textarea class="form-control" name="keterangan" id="keterangan" cols="30" rows="5"></textarea>
                                    </div>
                                    <div class="col-12 col-lg-12">
                                        <div class="form-check">
                                            <!-- <label class="form-check-label" for="flexCheckChecked">
                                                by registering you agree to the <a href="#"><u>Terms of Use</u></a>
                                            </label> -->
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-12">
                                        <div class="d-grid">
                                            <button type="button" class="btn btn-primary btn-registrasi">submit</button>
                                        </div>
                                    </div>
                                    <!-- <div class="col-12 col-lg-12 text-center">
                                        <p class="mb-0"><a href="<?= site_url('login')?>"><u>Sign
                                                    up</u></a></p>
                                    </div> -->
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
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="<?= base_url('/')?>assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/')?>plugins/notifications/js/lobibox.min.js"></script>
</body>
<script>
$(function() {
    "use strict";
    $('#id_status_permohonan').select2({
        theme: "bootstrap-5",
        width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' :
            'style',
        placeholder: $(this).data('placeholder'),
    });
});
var input = document.getElementById("form-registrasi");
input.addEventListener("keypress", function(event) {
    if (event.key === "Enter") {
        event.preventDefault();
        $('.btn-registrasi').click();
    }
});
$('.btn-registrasi').click(function() {
    var no_mohon_ukur = $("#no_mohon_ukur").val();
    var nama_lengkap_pemohon = $("#nama_lengkap_pemohon").val();
    var nomor_telepon = $("#nomor_telepon").val();
    var id_status_permohonan = $("#id_status_permohonan").val();
    var keterangan = $("#keterangan").val();
    if (no_mohon_ukur.length === 0) {
        Lobibox.notify('warning', {
            pauseDelayOnHover: true,
            size: 'mini',
            rounded: true,
            delayIndicator: false,
            icon: 'bx bx-x-circle',
            continueDelayOnInactiveTab: false,
            position: 'top right',
            msg: 'Nomor berkas tidak boleh kosong.'
        });
        document.getElementById("no_mohon_ukur").focus();
        return false;
    } else if (nama_lengkap_pemohon.length === 0) {
        Lobibox.notify('warning', {
            pauseDelayOnHover: true,
            size: 'mini',
            rounded: true,
            delayIndicator: false,
            icon: 'bx bx-x-circle',
            continueDelayOnInactiveTab: false,
            position: 'top right',
            msg: 'nama lengkap pemohon tidak boleh kosong.'
        });
        document.getElementById("nama_lengkap_pemohon").focus();
        return false;
    } else if (nomor_telepon.length === 0) {
        Lobibox.notify('warning', {
            pauseDelayOnHover: true,
            size: 'mini',
            rounded: true,
            delayIndicator: false,
            icon: 'bx bx-x-circle',
            continueDelayOnInactiveTab: false,
            position: 'top right',
            msg: 'nomor whatsapp pemohon tidak boleh kosong.'
        });
        document.getElementById("nomor_telepon").focus();
        return false;
    } else if (id_status_permohonan.length === 0) {
        Lobibox.notify('warning', {
            pauseDelayOnHover: true,
            size: 'mini',
            rounded: true,
            delayIndicator: false,
            icon: 'bx bx-x-circle',
            continueDelayOnInactiveTab: false,
            position: 'top right',
            msg: 'jenis layanan tidak boleh kosong.'
        });
        document.getElementById("id_status_permohonan").focus();
        return false;
    } else if (keterangan.length === 0) {
        Lobibox.notify('warning', {
            pauseDelayOnHover: true,
            size: 'mini',
            rounded: true,
            delayIndicator: false,
            icon: 'bx bx-x-circle',
            continueDelayOnInactiveTab: false,
            position: 'top right',
            msg: 'keterangan tidak boleh kosong.'
        });
        document.getElementById("keterangan").focus();
        return false;
    } else {
        var formData = new FormData();
        formData.append("kd_pemohon", makeid(120));
        formData.append("e_tiket", 'P' + <?= rand(999,9999)?> + 'n');
        formData.append("token", 'ken_' + makeid(9));
        formData.append("no_mohon_ukur", no_mohon_ukur);
        formData.append("nama_lengkap_pemohon", nama_lengkap_pemohon);
        formData.append("nomor_telepon", nomor_telepon);
        formData.append("id_status_permohonan", id_status_permohonan);
        formData.append("keterangan", keterangan);
        $.ajax({
            url: "<?= site_url('addregistrasi')?>",
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
                        msg: 'Berhasil disimpan.'
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

function makeid(length) {
    let result = '';
    const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    const charactersLength = characters.length;
    let counter = 0;
    while (counter < length) {
        result += characters.charAt(Math.floor(Math.random() * charactersLength));
        counter += 1;
    }
    return result;
}
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