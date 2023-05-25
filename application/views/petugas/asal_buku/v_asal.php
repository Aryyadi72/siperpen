<div class="main-panel">
    <div class="content-wrapper">
        <h2 style="margin-bottom:-45px;margin-top:50px;">Data Asal Buku</h2>
        <a href="<?= base_url('buku/tambah_asal')?>" style="margin-left:1216px;margin-bottom:10px;" type="button" class="btn btn-social-icon-text btn-facebook"><i class="typcn typcn-plus"></i>Tambah Data</a>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="row">
                        <div class="card-body">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Asal Buku</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $no=1; 
                                            foreach($asal as $a) {
                                    ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $a->asal_buku ?></td>
                                        <td>
                                            <div class="row d-flex justify-content-center">
                                                <div style="margin-right:5px;">
                                                    <a href="<?= base_url("buku/edit_asal/" . $a->id_asal_buku)?>">
                                                        <button type="button" class="btn btn-warning btn-rounded btn-icon">
                                                            <i class="typcn typcn-edit"></i>
                                                        </button>
                                                    </a>
                                                </div>
                                                <div style="margin-right:5px;">
                                                    <a href="<?= base_url("buku/hapus_asal/" . $a->id_asal_buku)?>">
                                                        <button type="button" class="btn btn-danger btn-rounded btn-icon">
                                                            <i class="typcn typcn-backspace-outline"></i>
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