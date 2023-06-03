<div class="main-panel">
    <div class="content-wrapper">
        <h2 style="margin-bottom:-45px;margin-top:50px;">Data Peminjaman</h2>
        <a href="<?= base_url('buku/tambah_jenis')?>" style="margin-left:1216px;margin-bottom:10px;" type="button" class="btn btn-social-icon-text btn-facebook"><i class="typcn typcn-plus"></i>Tambah Data</a>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="row">
                        <div class="card-body">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Buku</th>
                                        <th>Santri</th>
                                        <th>Petugas</th>
                                        <th>Tanggal Peminjaman</th>
                                        <th>Tanggal Wajib Dikembalikan</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $no=1; 
                                            foreach($peminjaman as $p) {
                                    ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $p->judul ?></td>
                                        <td><?= $p->nama ?></td>
                                        <td><?= $p->nama_petugas ?></td>
                                        <td><?= $p->tanggal_peminjaman ?></td>
                                        <td><?= $p->tanggal_wajib_pengembalian ?></td>
                                        <td><?= $p->status ?></td>
                                        <td>
                                            <div class="row d-flex justify-content-center">
                                                <div style="margin-right:5px;">
                                                    <a href="<?= base_url("peminjaman/edit_peminjaman/" . $p->id_peminjaman)?>">
                                                        <button type="button" class="btn btn-warning btn-rounded btn-icon">
                                                            <i class="typcn typcn-edit"></i>
                                                        </button>
                                                    </a>
                                                </div>
                                                <div style="margin-right:5px;">
                                                    <a href="<?= base_url("pengembalian/tambah_pengembalian?id=" . $p->id_peminjaman)?>">
                                                        <button type="button" class="btn btn-success btn-rounded btn-icon">
                                                            <i class="typcn typcn-input-checked"></i>
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