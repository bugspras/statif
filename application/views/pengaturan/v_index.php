<!-- start page content wrapper-->
<div class="page-content-wrapper">
    <!-- start page content-->
    <div class="page-content">
        <!--start breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Dashboard</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0 align-items-center">
                        <li class="breadcrumb-item active" aria-current="page">Scan Whatsapp</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
            </div>
        </div>
        <div class="container">
            <div class="row bg-white mt-5 p-4" id="readyDiv" style="display: none;">
                <h3 class="title" id="title" style="margin-bottom:0px;"></h3>
                <p style="font-size: 90%; margin-bottom: 0px;">WhatsApp anda sudah terkoneksi.</p>
                <i style="font-size: 90%;">*Hanya <b>WhatsApp (Multi Device)</b> yang bisa terkoneksi dengan
                    applikasi ini.</i>
                <h5 class="title" style="margin-top:20px;">Cara Logout?</h5>
                <div class="imgLogout">
                    <ol>
                        <li>Buka WhatsApp di handphone anda</li>
                        <li>Tap menu atau setting lalu pilih perangkat tertaut</li>
                        <li>klik nama perangkat yang ingin di logout</li>
                        <li>pilih hapus perangkat</li>
                    </ol>
                </div>
            </div>
            <div class="row bg-white mt-5 p-4" id="scanDiv">
                <div class="col-md-7">
                    <h4 class="title pt-4 pb-4">Untuk menggunakan WhatsApp di device anda :</h4>
                    <ol>
                        <li>Buka WhatsApp di handphone anda</li>
                        <li>Tap menu atau setting lalu pilih perangkat tertaut</li>
                        <li>klik tautan perangkat</li>
                        <li>Arahkan kamera ke QR-Code</li>
                    </ol>
                </div>
                <div class="col-md-5 pt-4 pb-4">
                    <div class="client-container">
                        <div class="client">
                            <h3 class="title">Scan QR Code</h3>
                            <p class="description"></p>
                            <img src="" alt="QR Code" id="qrcode" style="display:none">
                            <ul class="logs"></ul>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <i style="font-size: 90%;">*Hanya <b>WhatsApp (Multi Device)</b> yang bisa terkoneksi dengan
                        applikasi ini.</i>
                </div>
            </div>
        </div>
        <!--end breadcrumb-->
    </div>
    <!-- end page content-->
</div>
<!--end page content wrapper-->
<script>
$(document).ready(function() {
    getQrcode()
    setInterval(() => {
        try {
            getQrcode()
        } catch (error) {}
    }, 10000);

    function getQrcode() {
        var settings = {
            "url": "http://localhost:3000/session",
            "method": "GET",
            "timeout": 3000,
        };
        $.ajax(settings).done(function(response) {
            console.log(response);
            if (response.status == false) {
                $('#readyDiv').hide();
                $('#scanDiv').show();
                $(`#qrcode`).attr('src',response.data.qr).show();
                $(`#title`).html('');
            } else {
                $('#scanDiv').hide();
                $('#readyDiv').show();
                $(`#qrcode`).attr('src', '').hide();
                $(`#title`).html(data.name);
                // if (!data.name) {
                //     $(`.logs`).append($('<li>').text(
                //         'Silahkan reload jika nama WhatsApp anda tidak tampil'));
                // }
            }
        });
    }
})
</script>