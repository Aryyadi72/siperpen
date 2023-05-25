<div class="main-panel">
    <div class="content-wrapper">
        <h2 style="margin-bottom:-45px;margin-top:50px;">Data Petugas</h2>
        <a href="<?= base_url('petugas/tambah')?>" style="margin-left:1216px;margin-bottom:10px;" type="button" class="btn btn-social-icon-text btn-facebook"><i class="typcn typcn-plus"></i>Tambah Data</a>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="row">
                        <div class="card-body">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Nomor HP</th>
                                        <th>Email</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $no=1; 
                                            foreach($petugas as $p) {
                                    ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $p->nama_petugas ?></td>
                                        <td><?= $p->alamat ?></td>
                                        <td><?= $p->no_hp ?></td>
                                        <td><?= $p->email ?></td>
                                        <td>
                                            <div class="row d-flex justify-content-center">
                                                <div style="margin-right:5px;">
                                                    <a href="<?= base_url("petugas/edit/" . $p->id_petugas)?>">
                                                        <button type="button" class="btn btn-warning btn-rounded btn-icon">
                                                            <i class="typcn typcn-edit"></i>
                                                        </button>
                                                    </a>
                                                </div>
                                                <div style="margin-right:5px;">
                                                    <a href="<?= base_url("petugas/hapus/" . $p->id_petugas)?>">
                                                        <button type="button" class="btn btn-danger btn-rounded btn-icon">
                                                            <i class="typcn typcn-backspace-outline"></i>
                                                        </button>
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="<?= base_url("petugas/detail/" . $p->id_petugas)?>">
                                                        <button type="button" class="btn btn-success btn-rounded btn-icon">
                                                            <i class="typcn typcn-book"></i>
                                                        </button>
                                                     </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>          