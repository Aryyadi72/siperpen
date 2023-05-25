<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="row">
                        <div class="card-body">
                            <h4 class="card-title">Tambah Data Buku</h4>
                            <hr>
                            <form class="forms-sample" action="<?php echo base_url('buku/proses_tambah'); ?>" method="post" role="form">

                                <div class="form-group">
                                    <label for="exampleInputName1">No Invent</label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="No Invent" name="no_invent">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Pengarang</label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Pengarang" name="pengarang">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Judul</label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Judul" name="judul">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Bahasa</label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Bahasa" name="bahasa">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Harga Satuan</label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Harga Satuan" name="harga_satuan">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Jumlah Buku</label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Jumlah Buku" name="jumlah_buku">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Penerbit</label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Penerbit" name="penerbit">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Keterangan</label>
                                        <textarea class="form-control" id="exampleTextarea1" rows="4" name="keterangan"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="exampleSelectGender">Asal Buku</label>
                                        <select class="form-control" id="exampleSelectGender" name="id_asal_buku">
                                            <option selected disabled>Pilih Asal Buku</option>
                                            <?php foreach($asal as $a) { ?>
                                            <option value="<?= $a->id_asal_buku; ?>"><?= $a->asal_buku; ?></option>
                                            <?php } ?>
                                        </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleSelectGender">Jenis Buku</label>
                                        <select class="form-control" id="exampleSelectGender" name="id_jenis_buku">
                                            <option selected disabled>Pilih Jenis Buku</option>
                                            <?php foreach($jenis as $j) { ?>
                                            <option value="<?= $j->id_jenis_buku; ?>"><?= $j->jenis; ?></option>
                                            <?php } ?>
                                        </select>
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