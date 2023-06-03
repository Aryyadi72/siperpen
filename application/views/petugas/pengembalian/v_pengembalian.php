<div class="main-panel">
    <div class="content-wrapper">
        <h2 style="margin-bottom:-45px;margin-top:50px;">Data Pengembalian</h2>
        <button style="margin-left:1216px;margin-bottom:10px;" type="button" class="btn btn-social-icon-text btn-facebook"><i class="typcn typcn-plus"></i>Tambah Data</button>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="row">
                        <div class="card-body">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Santri</th>
                                        <th>Petugas</th>
                                        <th>Buku</th>
                                        <th>Tanggal Peminjaman</th>
                                        <th>Tanggal Pengembalian</th>
                                        <th>Denda</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; foreach($pengembalian as $p) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $p->nama ?></td>
                                        <td><?= $p->nama_petugas ?></td>
                                        <td><?= $p->judul ?></td>
                                        <td><?= $p->tanggal_peminjaman ?></td>
                                        <td><?= $p->tanggal_dikembalikan ?></td>
                                        <td><?= $p->keterangan ?></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>          