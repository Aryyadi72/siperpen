<div class="main-panel">
    <div class="content-wrapper">
        <div class="card mb-3 shadow p-3 mb-5 bg-body rounded" style="max-width:1000px;margin-top:100px;margin-left:180px;">
            <div class="row g-0">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Akun Santri</h4>
                            <p class="card-description">
                                Data Akun Santri
                            </p>

                            <form class="forms-sample" action="<?php echo base_url('santri/proses_ubah_akun_santri/'. $id_santri); ?>" method="post">

                                <div class="form-group row">
                                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Username</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="exampleInputUsername2" placeholder="Username" name="username" value="<?= $santri['username']; ?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Password</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="exampleInputEmail2" placeholder="Password" name="password">
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                <button class="btn btn-light">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>