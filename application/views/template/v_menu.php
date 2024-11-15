<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div class="logo-text">
        <img src="<?= base_url('logo.png')?>" width="150" height="45" alt="" />
          <!-- <img src="<?= base_url('favicon.ico')?>" class="logo-icon" alt="logo icon"> -->
        </div>
        <!-- <div>
            <h3 class="logo-text text-center"> S T A T I K</h3>
        </div> -->
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="<?= site_url('dashboard')?>">
                <div class="parent-icon">
                    <ion-icon name="home-outline"></ion-icon>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li>
            <a href="<?= site_url('data-pemohon')?>">
                <div class="parent-icon">
                    <ion-icon name="server-outline"></ion-icon>
                </div>
                <div class="menu-title">Data Pemohon</div>
            </a>
        </li>
        <li>
            <a href="<?= site_url('data-pengukuran')?>">
                <div class="parent-icon">
                    <ion-icon name="server-outline"></ion-icon>
                </div>
                <div class="menu-title">Data Pengukuran</div>
            </a>
        </li>
        <li>
            <a href="<?= site_url('data-peta')?>">
                <div class="parent-icon">
                    <ion-icon name="map-outline"></ion-icon>
                </div>
                <div class="menu-title">Data Peta Bidang Tanah</div>
            </a>
        </li>
        <li>
            <a href="<?= site_url('data-anggota-pengukur')?>">
                <div class="parent-icon">
                    <ion-icon name="people-outline"></ion-icon>
                </div>
                <div class="menu-title">Data Petugas Ukur</div>
            </a>
        </li>
        <li>
            <a href="<?= site_url('scan-whatsapp')?>">
                <div class="parent-icon">
                    <div class="font-22">
                      <i class="fadeIn animated bx bx-slider-alt"></i>
                    </div>
                </div>
                <div class="menu-title">Scan Whatsapp</div>
            </a>
        </li>
    </ul>
    <!--end navigation-->
</aside>