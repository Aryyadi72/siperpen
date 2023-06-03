<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>CelestialUI Admin</title>
  <!-- base:css -->
  <link rel="stylesheet" href="<?= base_url()?>./assets/vendors/typicons.font/font/typicons.css">
  <link rel="stylesheet" href="<?= base_url()?>./assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= base_url()?>./assets/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/library-126.svg" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">

                            <div class="brand-logo">
                                <img src="<?= base_url()?>./assets/images/logo.svg" alt="logo">
                            </div>

                            <h4>Selamat Datang di SIPERPEN</h4>
                            <h6 class="font-weight-light">Halaman Login Santri</h6>

                                <form class="pt-3" method="POST" action="<?= site_url('login/auth_santri') ?>">

                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username" name="username">
                                    </div>

                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" name="password">
                                    </div>

                                    <div class="mt-3">
                                        <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">SIGN IN</button>
                                    </div>

                                </form>

                                    <div class="mt-3">
                                        <a class="btn btn-block btn-success btn-lg font-weight-medium auth-form-btn" href="<?= base_url('login')?>">SIGN IN ADMIN</a>
                                    </div>

                                    <div class="text-center mt-4 font-weight-light">
                                        Belum memiliki akun? <a href="register.html" class="text-primary">Daftar</a>
                                    </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?= base_url()?>./assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="<?= base_url()?>./assets/js/off-canvas.js"></script>
    <script src="<?= base_url()?>./assets/js/hoverable-collapse.js"></script>
    <script src="<?= base_url()?>./assets/js/template.js"></script>
    <script src="<?= base_url()?>./assets/js/settings.js"></script>
    <script src="<?= base_url()?>./assets/js/todolist.js"></script>

</body>

</html>
