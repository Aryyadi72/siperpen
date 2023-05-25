<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="row">
                        <div class="card-body">
                            <h4 class="card-title">Peminjaman Buku</h4>
                            <hr>
                            <form class="forms-sample" action="<?php echo base_url('peminjaman/proses_tambah'); ?>" method="post" role="form">

                                <div class="form-group">
                                    <label for="exampleInputName1">Buku</label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Buku" name="id_buku" value="<?= $data ?>">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Santri</label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Santri" name="id_santri">
                                </div>

                                        <input type="hidden" class="form-control" id="exampleInputName1" placeholder="Petugas" name="id_petugas" value="4">

                                <div class="form-group">
                                    <label for="exampleInputName1">Status</label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Status" name="status" value="Pinjam">
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