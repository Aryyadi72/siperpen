<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="row">
                        <div class="card-body">
                            <h4 class="card-title">Pengembalian Buku</h4>
                            <hr>
                            <form class="forms-sample" action="<?php echo base_url('pengembalian/proses_tambah'); ?>" method="post" role="form">

                                <input type="hidden" class="form-control" id="exampleInputName1" placeholder="Pengarang" name="id_peminjaman" value="<?= $data ?>">

                                <div class="form-group">
                                    <label for="exampleInputName1">Tanggal Pengembalian Buku</label>
                                        <input type="date" class="form-control" id="exampleInputName1" placeholder="Tanggal Pengembalian Buku" name="tanggal_dikembalikan">
                                </div>

                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                <a href="<?= base_url('buku')?>"class="btn btn-light">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>          