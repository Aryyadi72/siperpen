<div class="main-panel">
    <div class="content-wrapper">
        <div class="card mb-3 shadow p-3 mb-5 bg-body rounded" style="max-width:1000px;margin-top:100px;margin-left:180px;">
            <div class="row g-0">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Data Petugas</h4>
                            <p class="card-description">
                                Data Petugas
                            </p>

                            <form class="forms-sample">

                                <div class="form-group row">
                                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nama</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="exampleInputUsername2" placeholder="Nama" name="nama_petugas" value="<?= $petugas['nama_petugas']; ?>" disabled>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Alamat</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="exampleInputUsername2" placeholder="Alamat" name="alamat" value="<?= $petugas['alamat']; ?>" disabled>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">No HP</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="exampleInputUsername2" placeholder="No HP" name="no_hp" value="<?= $petugas['no_hp']; ?>" disabled>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="exampleInputUsername2" placeholder="Jenis Kelamin" name="jenis_kelamin" value="<?= $petugas['jenis_kelamin']; ?>" disabled>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="exampleInputEmail2" placeholder="Email" name="email" value="<?= $petugas['email']; ?>" disabled>
                                    </div>
                                </div>
                            </form>
                            <a href="<?= base_url('petugas/detail_akun_petugas/' . $petugas['id_petugas'])?>">
                                <button type="submit" class="btn btn-dark btn-icon-text btn-sm"><i class="typcn typcn-edit btn-icon-append"></i>  Akun</button>
                            </a>
                            <button class="btn btn-light btn-icon-text btn-sm"><i class="typcn typcn-refresh btn-icon-prepend"></i>Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>