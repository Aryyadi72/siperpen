<div class="main-panel">
    <div class="content-wrapper">
        <h2 style="margin-bottom:-45px;margin-top:50px;">Data Buku</h2>
        <div class="row">
            <div class="col-12 grid-margin stretch-card" style="margin-top:70px;">
                <div class="card">
                    <div class="row">
                        <div class="card-body">
                            <table id="example" class="table table-striped table-bordered" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Pengarang</th>
                                        <th>Penerbit</th>
                                        <th>Jenis Buku</th>
                                        <th>Bahasa</th>
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
                                        <td><?= $b->judul ?></td>
                                        <td><?= $b->pengarang ?></td>
                                        <td><?= $b->penerbit ?></td>
                                        <td><?= $b->jenis ?></td>
                                        <td><?= $b->bahasa ?></td>
                                        <td>
                                            <div class="row d-flex justify-content-center">
                                                <div style="margin-right:5px;">
                                                    <a href="<?= base_url("buku/detail_buku/" . $b->id_buku)?>">
                                                        <button type="button" class="btn btn-success btn-rounded btn-icon">
                                                            <i class="typcn typcn-book"></i>
                                                        </button>
                                                     </a>
                                                </div>
                                                <div>
                                                    <a href="<?= base_url("peminjaman/tambah_peminjaman?id=" . $b->id_buku)?>">
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