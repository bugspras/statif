<!-- start page content wrapper-->
<div class="page-content-wrapper">
    <!-- start page content-->
    <div class="page-content">
        <!--start breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Data pengukur</div>
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
                            <a href="<?= site_url('data-anggota-pengukur')?>" type="button"
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
                    <form onSubmit="return false" id="form-pengukur">
                        <div class="row">
                            <div class="col-12 col-lg-12 col-xl-12">
                                <div class="card">
                                    <div class="sidebar-header alert alert-dismissible fade show py-3 bg-burly-wood">
                                            <h5 class="mb-1 text-white">ANGGOTA</h5>
                                    </div>
                                    <div class="card-body">
                                        <div id="test-l-1" role="tabpanel" class="bs-stepper-pane"
                                            aria-labelledby="stepper1trigger1">
                                            <p class="mb-4"></p>
                                            <div class="col-12 col-lg-12 mb-4">
                                                <label for="inputEmail" class="form-label">nama lengkap
                                                    (pengukur)</label>
                                                <input type="text" class="form-control" id="nama_anggota_pengukur"
                                                    name="nama_anggota_pengukur" value="<?= $nama_anggota_pengukur ?>"
                                                    placeholder="nama lengkap yang dalam akta tanah">
                                            </div>
                                            <div class="col-12 col-lg-12 mb-4">
                                                <label for="inputEmail" class="form-label">nomor whatsapp
                                                    (pengukur)</label>
                                                <input class="result form-control" type="text" id="nomor_telepon"
                                                    name="nomor_telepon" value="<?= $nomor_telepon ?>"
                                                    placeholder="nomor whatsapp">
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <button type="button"
                                                    class="btn btn-success px-4 btn-pengukur">Simpan</button>
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
var input = document.getElementById("form-pengukur");
input.addEventListener("keypress", function(event) {
    if (event.key === "Enter") {
        event.preventDefault();
        $('.btn-pengukur').click();
    }
});
$('.btn-pengukur').click(function() {
    var nama_anggota_pengukur = $("#nama_anggota_pengukur").val();
    var nomor_telepon = $("#nomor_telepon").val();
    if (nama_anggota_pengukur.length === 0) {
        Lobibox.notify('warning', {
            pauseDelayOnHover: true,
            size: 'mini',
            rounded: true,
            delayIndicator: false,
            icon: 'bx bx-x-circle',
            continueDelayOnInactiveTab: false,
            position: 'top right',
            msg: 'nama lengkap (pengukur) tidak boleh kosong.'
        });
        document.getElementById("nama_anggota_pengukur").focus();
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
            msg: 'nomor telepon (pengukur) tidak boleh kosong.'
        });
        document.getElementById("nomor_telepon").focus();
    } else {
        var kode = '<?= $kd_anggota_pengukur?>';
        var formData = new FormData();
        formData.append("kode", kode);
        formData.append("kd_anggota_pengukur", makeid(120));
        formData.append("nama_anggota_pengukur", nama_anggota_pengukur);
        formData.append("nomor_telepon", nomor_telepon);
        $.ajax({
            url: "<?= site_url('save-anggota-pengukur')?>",
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
                        window.location.href = "<?= site_url('data-anggota-pengukur')?>";
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