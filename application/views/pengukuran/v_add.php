<!-- start page content wrapper-->
<div class="page-content-wrapper">
    <!-- start page content-->
    <div class="page-content">
        <!--start breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Data Pengukuran</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0 align-items-center">
                        <li class="breadcrumb-item active" aria-current="page">Kantor Pertanahan Kota Gorontalo</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <div class="row row-cols-auto g-3">
                        <div class="col">
                            <!-- Button trigger modal -->
                            <a href="<?= site_url('data-pengukuran')?>" type="button"
                                class="btn btn-primary">kembali</a>
                            <!-- Modal -->
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="">
            <div class="card-body">
                <div class="page-content">
                    <form onSubmit="return false" id="form-pengukuran">
                        <div class="row">
                            <div class="col-12 col-lg-12 col-xl-12">
                                <div class="card">
                                    <div class="sidebar-header alert alert-dismissible fade show py-3 bg-burly-wood">
                                            <h5 class="mb-1 text-white">PENGUKURAN</h5>
                                    </div>
                                    <div class="card-body">
                                        <div id="test-l-1" role="tabpanel" class="bs-stepper-pane"
                                            aria-labelledby="stepper1trigger1">
                                            <p class="mb-4"></p>
                                            <div class="row g-3">
                                                <div class="col-12 col-lg-12 mb-4">
                                                    <label for="inputPassword" class="form-label">nama lengkap (pemohon)
                                                        | e
                                                        tiket</label>
                                                    <select class="form-select" id="kd_pemohon" name="kd_pemohon"
                                                        data-placeholder="Choose one nama pemohon">
                                                        <option></option>
                                                        <?php if($pemohon->num_rows()):?>
                                                        <?php foreach ($pemohon->result() as $key):?>
                                                        <option value="<?= $key->kd_pemohon; ?>">
                                                            <?= $key->nama_lengkap_pemohon ?> | <?= $key->e_tiket ?>
                                                        </option>
                                                        <?php endforeach;?>
                                                        <?php endif;?>
                                                    </select>
                                                </div>
                                                <div class="col-12 col-lg-12 mb-4">
                                                    <label for="inputEmail" class="form-label">Pdf</label>
                                                    <input type="file" class="form-control" id="pdf" name="pdf"
                                                        placeholder="pdf">
                                                </div>
                                                <div class="col-12 col-lg-12 mb-4">
                                                    <label for="inputEmail" class="form-label">nama lengkap
                                                        (pengukur) | nomor whatsapp</label>
                                                    <select class="form-select" id="kd_anggota_pengukur" name="kd_anggota_pengukur"
                                                        data-placeholder="Choose one nama lengkap pengukur">
                                                        <option></option>
                                                        <?php if($anggota->num_rows()):?>
                                                        <?php foreach ($anggota->result() as $key):?>
                                                        <option value="<?= $key->kd_anggota_pengukur; ?>">
                                                            <?= $key->nama_anggota_pengukur ?> | <?= $key->nomor_telepon ?>
                                                        </option>
                                                        <?php endforeach;?>
                                                        <?php endif;?>
                                                    </select> 
                                                </div>
                                                <div class="col-12 col-lg-6 mb-4">
                                                    <label for="inputEmail" class="form-label">tanggal</label>
                                                    <input class="result form-control" type="text" id="date" name="tanggal_pengukuran" placeholder="tanggal pengukuran">
                                                    <!-- <input type="date" class="form-control" id="tanggal_pengukuran" name="tanggal_pengukuran" placeholder="tanggal pengukuran">  -->
                                                </div>
                                                <div class="col-12 col-lg-6 mb-4">
                                                    <label for="inputEmail" class="form-label">waktu</label>
                                                <input class="result form-control" type="text" id="time" name="waktu_pengukuran" placeholder="waktu pengukuran">
                                                    <!-- <input type="time" class="form-control" id="waktu_pengukuran"
                                                        name="waktu_pengukuran" placeholder="waktu pengukuran"> -->
                                                </div>
                                                <div class="col-12 col-lg-6 mb-4">
                                                    <button type="button" class="btn btn-success px-4 btn-pengukuran">Simpan</button>
                                                </div>
                                            </div>
                                            <!---end row-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end row-->
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>


    <!-- end page content-->
</div>
<!--end page content wrapper-->

<script>
$(function() {
    "use strict";
    $('#kd_pemohon').select2({
        theme: "bootstrap-5",
        width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' :
            'style',
        placeholder: $(this).data('placeholder'),
    });
    $('#kd_anggota_pengukur').select2({
        theme: "bootstrap-5",
        width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' :
            'style',
        placeholder: $(this).data('placeholder'),
    });
});
var input = document.getElementById("form-pengukuran");
input.addEventListener("keypress", function(event) {
    if (event.key === "Enter") {
        event.preventDefault();
        $('.btn-pengukuran').click();
    }
});
$('.btn-pengukuran').click(function() {
    var kd_pengukuran = $("#kd_pengukuran").val();
    var kd_pemohon = $("#kd_pemohon").val();
    var kd_anggota_pengukur = $("#kd_anggota_pengukur").val();
    var tanggal_pengukuran = $("#date").val();
    var waktu_pengukuran = $("#time").val();
    var form_pdf = $('#pdf').prop('files')['length'];
    var pdf = $('#pdf').prop('files')[0];
    if (kd_pemohon.length === 0) {
        Lobibox.notify('warning', {
            pauseDelayOnHover: true,
            size: 'mini',
            rounded: true,
            delayIndicator: false,
            icon: 'bx bx-x-circle',
            continueDelayOnInactiveTab: false,
            position: 'top right',
            msg: 'Pemohon belum dipilih.'
        });
        document.getElementById("kd_pemohon").focus();
        return false;
    } else if (form_pdf === 0) {
        Lobibox.notify('warning', {
            pauseDelayOnHover: true,
            size: 'mini',
            rounded: true,
            delayIndicator: false,
            icon: 'bx bx-x-circle',
            continueDelayOnInactiveTab: false,
            position: 'top right',
            msg: 'Pdf belum di upload.'
        });
        document.getElementById("pdf").focus();
    } else if (kd_anggota_pengukur.length === 0) {
        Lobibox.notify('warning', {
            pauseDelayOnHover: true,
            size: 'mini',
            rounded: true,
            delayIndicator: false,
            icon: 'bx bx-x-circle',
            continueDelayOnInactiveTab: false,
            position: 'top right',
            msg: 'nama lengkap (pengukur) belum dipilih.'
        });
        document.getElementById("kd_anggota_pengukur").focus();
        return false;
    } else if (tanggal_pengukuran.length === 0) {
        Lobibox.notify('warning', {
            pauseDelayOnHover: true,
            size: 'mini',
            rounded: true,
            delayIndicator: false,
            icon: 'bx bx-x-circle',
            continueDelayOnInactiveTab: false,
            position: 'top right',
            msg: 'tanggal pengukuran tidak boleh kosong.'
        });
        document.getElementById("date").focus();
        return false;
    } else if (waktu_pengukuran.length === 0) {
        Lobibox.notify('warning', {
            pauseDelayOnHover: true,
            size: 'mini',
            rounded: true,
            delayIndicator: false,
            icon: 'bx bx-x-circle',
            continueDelayOnInactiveTab: false,
            position: 'top right',
            msg: 'waktu pengukuran tidak boleh kosong.'
        });
        document.getElementById("time").focus();
        return false;
    } else {
        var formData = new FormData();
        formData.append("kd_pengukuran", makeid(120));
        formData.append("kd_pemohon", kd_pemohon);
        formData.append("kd_anggota_pengukur", kd_anggota_pengukur);
        formData.append("tanggal_pengukuran", tanggal_pengukuran);
        formData.append("waktu_pengukuran", waktu_pengukuran);
        formData.append("file", pdf);
        $.ajax({
            url: "<?= site_url('save-pengukuran')?>",
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
                    setTimeout(function() {
                        window.location.href = "<?= site_url('data-pengukuran')?>";
                    }, 1000);
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
</script>