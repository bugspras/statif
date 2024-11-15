<!-- start page content wrapper-->
<div class="page-content-wrapper">
    <!-- start page content-->
    <div class="page-content">
        <!--start breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Data Peta</div>
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
                            <a href="<?= site_url('add-peta')?>" type="button" class="btn btn-primary">+ add</a>
                            <!-- Modal -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="alert alert-dismissible fade show py-3 bg-burly-wood">
            <div class="d-flex align-items-start gap-2">
                <div>
                    <div class="ms-auto text-white">
                        <h5>Total Peta</h5>
                    </div>
                </div>
                <div class="ms-auto widget-icon-small text-white bg-gradient-info">
                    <ion-icon name="people-sharp"></ion-icon>
                </div>
            </div>
            <div class="d-flex align-items-center mt-3">
                <div>
                    <h4 class="mb-0 text-white"><?= ($peta->num_rows())? $peta->num_rows() : 0 ?></h4>
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
                                <th>nama lengkap (pemohon)</th>
                                <th>tanggal & waktu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if($peta->num_rows()):?>
                            <?php $no=1;?>
                            <?php foreach ($peta->result() as $key):?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $key->nama_lengkap_pemohon?></td>
                                <td><?= $key->waktu?></td>
                            </tr>
                            <?php endforeach;?>
                            <?php endif;?>
                        <tfoot>
                            <tr>
                                <th>no</th>
                                <th>nama lengkap (pemohon)</th>
                                <th>tanggal & waktu</th>
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