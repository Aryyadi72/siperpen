<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="row">
                        <div class="card-body">
                            <h4 class="card-title">Tambah Jenis Buku</h4>
                            <hr>
                            <form class="forms-sample" action="<?php echo base_url('buku/proses_tambah_jenis'); ?>" method="post" role="form">

                                <div class="form-group">
                                    <label for="exampleInputName1">Jenis Buku</label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Jenis Buku" name="jenis">
                                </div>

                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                <a href="<?= base_url('buku/tampil_jenis')?>"class="btn btn-light">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>          