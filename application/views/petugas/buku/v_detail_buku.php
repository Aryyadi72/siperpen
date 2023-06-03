<div class="main-panel">
    <div class="content-wrapper">
        <div class="card mb-3 shadow p-3 mb-5 bg-body rounded" style="max-width:1000px;margin-top:100px;margin-left:180px;">
        <div class="row g-0">
            <div class="col-md-4">
            <img src="<?= base_url()?>./assets/upload/buku/<?= $buku['foto_buku'] ?>" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= $buku['judul']; ?></h5>
                    <hr>
                    <table>
                        <tr>
                            <th>No Invent</th>
                            <td>: <?= $buku['no_invent']; ?></td>
                        </tr>
                        <tr>
                            <th>Pengarang</th>
                            <td>: <?= $buku['pengarang']; ?></td>
                        </tr>
                        <tr>
                            <th>Penerbit</th>
                            <td>: <?= $buku['penerbit']; ?></td>
                        </tr>
                        <tr>
                            <th>Bahasa</th>
                            <td>: <?= $buku['bahasa']; ?></td>
                        </tr>
                        <tr>
                            <th>Harga Satuan</th>
                            <td>: <?= $buku['harga_satuan']; ?></td>
                        </tr>
                        <tr>
                            <th>Jumlah</th>
                            <td>: <?= $buku['jumlah_buku']; ?></td>
                        </tr>
                    </table>
                    <hr>
                    <p class="card-text"><?= $buku['deskripsi']; ?></p>
                    <p class="card-text"><small class="text-muted">Ditambahkan pada : <?= $buku['tanggal_ditambahkan']?></small></p>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>