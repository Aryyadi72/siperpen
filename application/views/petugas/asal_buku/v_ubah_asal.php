<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="row">
                        <div class="card-body">
                            <h4 class="card-title">Ubah Asal Buku</h4>
                            <hr>
                            <form class="forms-sample" action="<?php echo base_url('buku/proses_ubah_asal/' . $asal['id_asal_buku']); ?>" method="post" role="form">

                            <input type="hidden" name="id_asal_buku" value="<?= $asal['id_asal_buku'] ?>">

                                <div class="form-group">
                                    <label for="exampleInputName1">Asal Buku</label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Asal Buku" name="asal_buku" value="<?= $asal['asal_buku'] ?>">
                                </div>

                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                <a href="<?= base_url('buku/tampil_asal')?>"class="btn btn-light">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>          