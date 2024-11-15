<!-- start page content wrapper-->
<div class="page-content-wrapper">
    <!-- start page content-->
    <div class="page-content">
        <!--start breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Data Anggota</div>
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
                            <a href="<?= site_url('add-anggota-pengukur')?>" type="button" class="btn btn-primary">+
                                add</a>
                            <!-- Modal -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="alert alert-dismissible fade show py-3 bg-info">
            <div class="d-flex align-items-start gap-2">
                <div>
                    <div class="ms-auto text-white">
                        <h5>Total anggota</h5>
                    </div>
                </div>
                <div class="ms-auto widget-icon-small text-white bg-gradient-info">
                    <ion-icon name="people-sharp"></ion-icon>
                </div>
            </div>
            <div class="d-flex align-items-center mt-3">
                <div>
                    <h4 class="mb-0 text-white"><?= ($anggota->num_rows())? $anggota->num_rows() : 0 ?></h4>
                </div>
            </div>
        </div>
        <!--end row-->

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>no</th>
                                <th>nama lengkap anggota</th>
                                <th>nomor whatsapp</th>
                                <th>aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if($anggota->num_rows()):?>
                            <?php $no=1;?>
                            <?php foreach ($anggota->result() as $key):?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $key->nama_anggota_pengukur?></td>
                                <td><?= $key->nomor_telepon?></td>
                                <td>
                                    <div class="row row-cols-auto g-3">
                                        <div class="col">
                                            <button type="button" onclick="_edit('<?= $key->kd_anggota_pengukur?>')" class="btn btn-sm btn-primary px-5">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-edit">
                                                    <path
                                                        d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                                                    </path>
                                                    <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
                                                    </path>
                                                </svg>
                                                edit
                                            </button>
                                        </div>
                                        <div class="col">
                                            <button type="button" <?php if($key->kode):?> disabled <?php else:?> onclick="_delete('<?= $key->kd_anggota_pengukur?>')" <?php endif;?> class="btn btn-sm btn-danger px-5">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-delete">
                                                    <path d="M21 4H8l-7 8 7 8h13a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2z"></path>
                                                    <line x1="18" y1="9" x2="12" y2="15"></line>
                                                    <line x1="12" y1="9" x2="18" y2="15"></line>
                                                </svg>
                                                delete
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach;?>
                            <?php endif;?>
                        <tfoot>
                            <tr>
                                <th>no</th>
                                <th>nama lengkap anggota</th>
                                <th>nomor whatsapp</th>
                                <th>aksi</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- end page content-->
</div>
<!--end page content wrapper-->
<script>

function _edit(id) {
    window.location.href = "<?= site_url('add-anggota-pengukur/')?>" + id;
};

function _delete(id) {
    $.ajax({
        url: "<?= site_url('delete-anggota-pengukur')?>",
        type: "POST",
        data: {
            "kd_anggota_pengukur": id
        },
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
                    msg: 'Berhasil delete.'
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
};
</script>