<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="row">
                        <div class="card-body">
                            <h4 class="card-title">Peminjaman Buku</h4>
                            <hr>
                            <form class="forms-sample" action="<?php echo base_url('peminjaman/proses_ubah/' . $peminjaman['id_peminjaman']); ?>" method="post" role="form">

                            <input type="hidden" class="form-control" id="exampleInputName1" name="id_buku" value="<?= $peminjaman['id_peminjaman'] ?>">

                                <div class="form-group">
                                    <label for="exampleInputName1">Buku</label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Buku" name="id_buku" value="<?= $peminjaman['id_buku'] ?>">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Santri</label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Santri" name="id_santri" value="<?= $peminjaman['id_santri'] ?>">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Petugas</label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Petugas" name="id_petugas" value="<?= $peminjaman['id_petugas'] ?>">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Tanggal Peminjaman</label>
                                        <input type="date" class="form-control" id="exampleInputName1" placeholder="Tanggal Peminjaman" name="tanggal_peminjaman" value="<?= $peminjaman['tanggal_peminjaman'] ?>">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Tanggal Wajib Dikembalikan</label>
                                        <input type="date" class="form-control" id="exampleInputName1" placeholder="Tanggal Pengembalian" name="tanggal_wajib_pengembalian" value="<?= $peminjaman['tanggal_wajib_pengembalian'] ?>">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Status</label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Status" name="status" value="<?= $peminjaman['status'] ?>">
                                </div>

                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                <a href="<?= base_url('buku/buku_santri')?>"class="btn btn-light">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>          