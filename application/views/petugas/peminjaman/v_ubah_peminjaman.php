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

                                        <input type="hidden" class="form-control" id="exampleInputName1" name="id_buku" value="<?= $peminjaman['id_buku'] ?>">

                                        <input type="hidden" class="form-control" id="exampleInputName1" name="id_santri" value="<?= $peminjaman['id_santri'] ?>">

                                <div class="form-group">
                                    <label for="exampleInputName1">Petugas</label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Petugas" name="id_petugas" value="<?= $id_petugas ?>">
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
                                        <select class="form-control" id="exampleSelectGender" name="status">
                                            <option value="pengajuan" <?php if ($peminjaman['status'] == "pengajuan") echo "selected"; ?>>Pengajuan</option>
                                            <option value="diterima" <?php if ($peminjaman['status'] == "diterima") echo "selected"; ?>>Diterima</option>
                                        </select>
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