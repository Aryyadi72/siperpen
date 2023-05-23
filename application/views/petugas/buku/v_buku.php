<div class="main-panel">
    <div class="content-wrapper">
        <h2 style="margin-bottom:-45px;margin-top:50px;">Data Buku</h2>
        <a href="<?= base_url('buku/tambah')?>" style="margin-left:1216px;margin-bottom:10px;" type="button" class="btn btn-social-icon-text btn-facebook"><i class="typcn typcn-plus"></i>Tambah Data</a>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="row">
                        <div class="card-body">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal Ditambahkan</th>
                                        <th>Pengarang</th>
                                        <th>Judul</th>
                                        <th>Penerbit</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $no=1; 
                                            foreach($buku as $b) {
                                    ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $b->tanggal_ditambahkan ?></td>
                                        <td><?= $b->pengarang ?></td>
                                        <td><?= $b->judul ?></td>
                                        <td><?= $b->penerbit ?></td>
                                        <td>
                                            <div class="row d-flex justify-content-center">
                                                <div style="margin-right:5px;">
                                                    <a href="<?= base_url("buku/edit/" . $b->id_buku)?>">
                                                        <button type="button" class="btn btn-warning btn-rounded btn-icon">
                                                            <i class="typcn typcn-edit"></i>
                                                        </button>
                                                    </a>
                                                </div>
                                                <div style="margin-right:5px;">
                                                    <a href="<?= base_url("buku/hapus/" . $b->id_buku)?>">
                                                        <button type="button" class="btn btn-danger btn-rounded btn-icon">
                                                            <i class="typcn typcn-backspace-outline"></i>
                                                        </button>
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="<?= base_url("buku/detail/" . $b->id_buku)?>">
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