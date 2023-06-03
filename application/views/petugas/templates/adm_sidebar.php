      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->
        <div class="theme-setting-wrapper">
          <div id="settings-trigger"><i class="typcn typcn-cog-outline"></i></div>
          <div id="theme-settings" class="settings-panel">
            <i class="settings-close typcn typcn-delete-outline"></i>
            <p class="settings-heading">SIDEBAR SKINS</p>
            <div class="sidebar-bg-options" id="sidebar-light-theme">
              <div class="img-ss rounded-circle bg-light border mr-3"></div>
              Light
            </div>
            <div class="sidebar-bg-options selected" id="sidebar-dark-theme">
              <div class="img-ss rounded-circle bg-dark border mr-3"></div>
              Dark
            </div>
            <p class="settings-heading mt-2">HEADER SKINS</p>
            <div class="color-tiles mx-0 px-4">
              <div class="tiles success"></div>
              <div class="tiles warning"></div>
              <div class="tiles danger"></div>
              <div class="tiles primary"></div>
              <div class="tiles info"></div>
              <div class="tiles dark"></div>
              <div class="tiles default border"></div>
            </div>
          </div>
        </div>
        <!-- partial -->
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <div class="d-flex sidebar-profile">
              <div class="sidebar-profile-image">
                <img src="<?php echo base_url(); ?>assets/images/faces/face29.png" alt="image">
                <span class="sidebar-status-indicator"></span>
              </div>
              <div class="sidebar-profile-name">
                <p class="sidebar-name">
                  Admin
                </p>
                <p class="sidebar-designation">
                  Welcome
                </p>
              </div>
            </div>
            <div class="nav-search">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Type to search..." aria-label="search" aria-describedby="search">
                <div class="input-group-append">
                  <span class="input-group-text" id="search">
                    <i class="typcn typcn-zoom"></i>
                  </span>
                </div>
              </div>
            </div>
            <p class="sidebar-menu-title">Dash menu</p>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('dashboard')?>">
              <i class="typcn typcn-device-desktop menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#buku" aria-expanded="false" aria-controls="buku">
              <i class="typcn typcn-user-add-outline menu-icon"></i>
              <span class="menu-title">Data Buku</span>
              <i class="typcn typcn-chevron-right menu-arrow"></i>
            </a>
            <div class="collapse" id="buku">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?= base_url('buku/tampil_jenis')?>">Jenis Buku</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?= base_url('buku/tampil_asal')?>">Asal Buku</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?= base_url('buku')?>">Buku</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="typcn typcn-user-add-outline menu-icon"></i>
              <span class="menu-title">Pengguna</span>
              <i class="typcn typcn-chevron-right menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?= base_url('santri')?>">Santri</a></li>
                <?php if ($id_level == 1): ?> <!-- Jika id_level = 1 (admin) -->
                <li class="nav-item"> <a class="nav-link" href="<?= base_url('petugas')?>">Petugas</a></li>
                <?php endif; ?>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('peminjaman')?>">
              <i class="typcn typcn-device-desktop menu-icon"></i>
              <span class="menu-title">Peminjaman</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('pengembalian')?>">
              <i class="typcn typcn-device-desktop menu-icon"></i>
              <span class="menu-title">Pengembalian</span>
            </a>
          </li>
      </nav>