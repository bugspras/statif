<!-- start page content wrapper-->
<div class="page-content-wrapper">
    <!-- start page content-->
    <div class="page-content">
        <!--start breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Data peta</div>
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
                            <a href="<?= site_url('data-peta')?>" type="button"
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
                    <form onSubmit="return false" id="form-peta">
                        <div class="row">
                            <div class="col-12 col-lg-12 col-xl-12">
                                <div class="card">
                                    <div class="sidebar-header alert alert-dismissible fade show py-3 bg-burly-wood">
                                    <h5 class="mb-1 text-white">PETA</h5>
                                    </div>
                                    <div class="card-body">
                                        <div id="test-l-1" role="tabpanel" class="bs-stepper-pane"
                                            aria-labelledby="stepper1trigger1">
                                            <p class="mb-4"></p>
                                            <div class="row g-3">
                                                <div class="col-12 col-lg-12 mb-4">
                                                    <label for="inputPassword" class="form-label">nama lengkap (pemohon)</label>
                                                    <select class="form-select" id="kd_pemohon" name="kd_pemohon"
                                                        data-placeholder="Choose one nama pemohon">
                                                        <option></option>
                                                        <?php if($pemohon->num_rows()):?>
                                                        <?php foreach ($pemohon->result() as $key):?>
                                                        <option value="<?= $key->kd_pemohon; ?>">
                                                            <?= $key->nama_lengkap_pemohon ?></option>
                                                        <?php endforeach;?>
                                                        <?php endif;?>
                                                    </select>
                                                </div>
                                                <div class="col-12 col-lg-12 mb-4">
                                                    <label for="inputEmail" class="form-label">Pdf</label>
                                                    <input type="file" class="form-control" id="pdf" name="pdf"
                                                        placeholder="pdf">
                                                </div>
                                                <div class="col-12 col-lg-6 mb-4">
                                                    <button type="button" class="btn btn-success px-4 btn-peta">Simpan</button>
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
});
var input = document.getElementById("form-peta");
input.addEventListener("keypress", function(event) {
    if (event.key === "Enter") {
        event.preventDefault();
        $('.btn-peta').click();
    }
});
$('.btn-peta').click(function() {
    var kd_peta = $("#kd_peta").val();
    var kd_pemohon = $("#kd_pemohon").val();
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
    } else {
        var formData = new FormData();
        formData.append("kd_peta", makeid(120));
        formData.append("kd_pemohon", kd_pemohon);
        formData.append("file", pdf);
        $.ajax({
            url: "<?= site_url('save-peta')?>",
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
                        window.location.href = "<?= site_url('data-peta')?>";
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