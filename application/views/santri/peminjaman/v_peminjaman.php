<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="row">
                        <div class="card-body">
                            <!-- <h4 class="card-title">Peminjaman Buku</h4> -->
                            <!-- <hr> -->
                            <form class="forms-sample" action="<?php echo base_url('peminjaman/proses_tambah'); ?>" method="post" role="form">

                                <input type="hidden" class="form-control" id="exampleInputName1" placeholder="Buku" name="id_buku" value="<?= $data ?>">

                                <input type="hidden" class="form-control" id="exampleInputName1" placeholder="Santri" name="id_santri" value="<?= $id_santri ?>">

                                <input type="hidden" class="form-control" id="exampleInputName1" placeholder="Petugas" name="id_petugas" value="4">

                                <input type="hidden" class="form-control" id="exampleInputName1" placeholder="Status" name="status" value="Pengajuan">

                                <input type="hidden" class="form-control" id="exampleInputName1" placeholder="Status" name="tanggal_wajib_pengembalian">

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