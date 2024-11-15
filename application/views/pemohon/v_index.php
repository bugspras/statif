<!-- start page content wrapper-->
<div class="page-content-wrapper">
    <!-- start page content-->
    <div class="page-content">
        <!--start breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Data Pemohon</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0 align-items-center">
                        <li class="breadcrumb-item active" aria-current="page">Kantor Pertanahan Kota Gorontalo</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="alert alert-dismissible fade show py-3 bg-info">
            <div class="d-flex align-items-start gap-2">
                <div>
                    <div class="ms-auto text-white"><h5>Total Pemohon</h5></div>
                </div>
                <div class="ms-auto widget-icon-small text-white bg-gradient-info">
                      <ion-icon name="people-sharp"></ion-icon>
                    </div>
            </div>
            <div class="d-flex align-items-center mt-3">
                <div>
                    <h4 class="mb-0 text-white"><?= ($pemohon->num_rows())? $pemohon->num_rows() : 0 ?></h4>
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
                                <th>nomor berkas</th>
                                <th>nama lengkap (pemohon)</th>
                                <th>whatsapp (pemohon)</th>
                                <th>jenis layanan</th>
                                <th>e tiket</th>
                                <th>Tanggal (pemohon)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if($pemohon->num_rows()):?>
                            <?php $no=1;?>
                            <?php foreach ($pemohon->result() as $key):?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><b><?= $key->no_mohon_ukur?></b></td>
                                <td><?= $key->nama_lengkap_pemohon?></td>
                                <td><?= $key->nomor_telepon?></td>
                                <td><span class="badge bg-info"><?= $key->status_permohonan?></span></td>
                                <td><span class="badge bg-success"><?= $key->e_tiket?></span></td>
                                <td><?= $key->tanggal_pemohon?></td>
                            </tr>
                            <?php endforeach;?>
                            <?php endif;?>
                        <tfoot>
                            <tr>
                                <th>no</th>
                                <th>nomor berkas</th>
                                <th>nama lengkap (pemohon)</th>
                                <th>whatsapp (pemohon)</th>
                                <th>jenis layanan</th>
                                <th>e tiket</th>
                                <th>Tanggal (pemohon)</th>
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